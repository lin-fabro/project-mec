<?php

namespace App\Imports;

use App\ImportProducts;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataFromExcelImport implements OnEachRow, WithHeadingRow
{
    /**
    * @param Row $row
    */
    public function onRow(Row $row)
    {

        $row = $row->toArray();

        //Inserts records into the import_products table
        ImportProducts::updateOrCreate(
            [
                'series_number'   => Str::of($row['series_number'])->trim(),
                'product_code'   => Str::of($row['product_id'])->trim()
            ],
            [
                'product_name' => Str::of($row['product_name'])->trim(),
                'size' => Str::of($row['size'])->trim(),
                'box_carton'    => Str::of($row['box_carton'])->trim(),
                'item_weight'   => Str::of($row['item_weight'])->trim(),
                'shipping_weight'   => Str::of($row['shipping_weight'])->trim(),
                'item_dimension'   => Str::of($row['item_dimension'])->trim(),
                'shipping_dimension'   => Str::of($row['shipping_dimension'])->trim(),
                'color'   => Str::of($row['color'])->trim(),
                'material'   => Str::of($row['material'])->trim(),
                'note'   => Str::of($row['note'])->trim(),
                'finish'   => Str::of($row['finish'])->trim(),
                'features_benefits'   => Str::of($row['features_benefits'])->trim(),
                'includes'   => Str::of($row['includes'])->trim(),
                'functionalities'   => Str::of($row['functionalities'])->trim(),
                'category_code_one'   => Str::of($row['category_code_one'])->trim(),
                'category_name_one'   => Str::of($row['category_name_one'])->trim(),
                'category_code_two'   => Str::of($row['category_code_two'])->trim(),
                'category_name_two'   => Str::of($row['category_name_two'])->trim(),
                'category_code_three'   => Str::of($row['category_code_three'])->trim(),
                'category_name_three'   => Str::of($row['category_name_three'])->trim(),
                'process_flag'   => Str::of($row['process_flag'])->trim()
            ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
