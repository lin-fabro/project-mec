<?php

namespace App\Http\Controllers;

use Config;
use Excel;
use App\ImportProducts;
use App\Categories;
use App\Products;
use App\ProductItems;
use App\Imports\DataFromExcelImport;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImportProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
     $data = DB::table('import_products')->orderBy('series_number', 'ASC')->get();

     $data_count = count($data);

        return view('import', [
            'data' => $data,
            'data_count'=> $data_count]);
    }

    public function import(Request $request)
    {

        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        //This will delete all records from the import_products table
        ImportProducts::truncate();
        try {

            Excel::import(new DataFromExcelImport, request()->file('select_file'));

        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            $errormessage = "";

            foreach ($failures as $failure) {
                $errormess = "";
                $failure->row(); // row that went wrong
                $failure->attribute(); // either heading key (if using heading row concern) or column index
                foreach($failure->errors() as $error) // Actual error messages from Laravel validator
                {
                    $errormess = $errormess.$error;
                }
                $failure->values(); // The values of the row that has failed.

                $errormess = $errormess.$error;
            }

            return back()->with('error', $errormess.$error);
        }

        return back()->with('success', 'Excel Data Imported successfully.');

    }

    public function publish(){

        DB::beginTransaction();
        try {
            $import_products = ImportProducts::all();

            foreach ($import_products as $import_product){

                $this->parse_categories($import_product);
                $product_id = $this->parse_product($import_product);
                $this->parse_product_item($import_product, $product_id);
                ImportProducts::where('series_number',$import_product->series_number)->delete();
            }
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            return $ex; //response()->json(['error' => $ex->getMessage()], 500);
        }

        return back()->with('success', 'Products published successfully.');

    }

    public function download(){
        return response()->download(storage_path("app/public/import_template.xls"));
    }

    private function parse_categories($import_product) {

        //parse level 1, then perform insert
        $this->process_category($import_product->category_code_one, Config::get('constants.all_products_code'), $import_product->category_name_one, 1);

        //parse level 2, then perform insert
        $this->process_category($import_product->category_code_two, $import_product->category_code_one, $import_product->category_name_two, 2);

        //parse level 3, then perform insert
        $this->process_category($import_product->category_code_three, $import_product->category_code_two, $import_product->category_name_three, 3);
    }

    private function process_category($category_code, $parent_code, $category_name, $level) {

        Categories::updateOrCreate(
            [
                'parent_code' => $parent_code,
                'code' => $category_code
            ],
            [
                'name' => $category_name,
                'level' => $level
            ]);
    }

    private function parse_product($import_product) {

        $process_flag = $import_product->process_flag;
        $is_delete = false;
        $product_id = null;

        $product_id = $this->update_product($import_product);

        return $product_id;
    }

    private function update_product($import_product){

        //this will perform update if the record is existing or create a new one

        $category_tags = $import_product->category_name_one.' '.$import_product->category_name_two.' '.$import_product->category_name_three;
        $product = Products::updateOrCreate(
        [
            'series_code'   => $this->parse_series_code($import_product->series_number)
        ],
        [
            'category_code' => $import_product->category_code_three,
            'name'    => $import_product->product_name,
            'color'   => $import_product->color,
            'material'   => $import_product->material,
            'finish'   => $import_product->finish,
            'includes'   => $import_product->includes,
            'functionalities'   => $import_product->functionalities,
            'features_benefits'   => $import_product->features_benefits,
            'category_tags' => $category_tags,
            'phase_out' => false
        ]);

        return $product -> id;
    }

    //returns the item group code
    private function parse_series_code($series_number){
        return Str::beforeLast($series_number,'-');
    }

    private function parse_product_item($import_product, $product_id) {

        $process_flag = $import_product->process_flag;
        $is_delete = false;

        if ($process_flag != null) {

            if ($process_flag == "delete"){
                $is_delete = true;
            }
        }

        //set all numeric values to null if there is no data from the cell
        $item_weight = !empty($import_product->item_weight) ? $import_product->item_weight : null;
        $shipping_weight = !empty($import_product->shipping_weight) ? $import_product->shipping_weight : null;

        $item_dimension = !empty($import_product->item_dimension) ? $import_product->item_dimension : null;
        $item_length = null;
        $item_width = null;
        $item_height = null;

        //parse item dimension into length, width, height
        if ($item_dimension != null && $item_dimension != 'NA' && $item_dimension != 'N/A') {
            $item_dimensions = explode('x', $item_dimension);
            $item_length = $item_dimensions[0];
            $item_width = $item_dimensions[1];
            $item_height = $item_dimensions[2];
        }

        $shipping_dimension = !empty($import_product->shipping_dimension) ? $import_product->shipping_dimension : null;
        $shipping_length = null;
        $shipping_width = null;
        $shipping_height = null;

        //parse shipping dimension into length, width, height
        if ($shipping_dimension != null && $shipping_dimension != 'NA' && $item_dimension != 'N/A') {
            $shipping_dimensions = explode('x', $shipping_dimension);
            $shipping_length = $shipping_dimensions[0];
            $shipping_width = $shipping_dimensions[1];
            $shipping_height = $shipping_dimensions[2];
        }

        //this will perform update if the record is existing or create a new one
        $products = ProductItems::updateOrCreate(
        [
            'series_number'   => $import_product->series_number,
            'product_code'   => $import_product->product_code,
            'product_id'   => $product_id
        ],
        [
            'size'    => $import_product->size,
            'box_carton'  => $import_product->box_carton,
            'item_weight'   => $item_weight,
            'shipping_weight'   => $shipping_weight,
            'item_length'   => $item_length,
            'item_width'   => $item_width,
            'item_height'   => $item_height,
            'shipping_length'   => $shipping_length,
            'shipping_width'   => $shipping_width,
            'shipping_height'   => $shipping_height,
            'note'   => $import_product->note,
            'phase_out' => $is_delete
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImportProducts  $importProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImportProducts $importProducts)
    {
        ImportProducts::truncate();
    }
}
