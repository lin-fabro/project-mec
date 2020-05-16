<?php

namespace App\Http\Controllers;

use Config;
use App\Products;
use App\ProductItems;
use App\Categories;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageController = new ImagesController();

        $category_code = request('category_code');

        if ($category_code == null) {
            $category_code = "00.00.00";
        }
        $search_action = Config::get('constants.default_action');
        $breadcrumbs = Categories::get_breadcrumbs($category_code);

        $sub_categories = Products::get_products_by_category_code($category_code);
        $sub_categories = $imageController->get_default_image($sub_categories);

        return view('category', [
            'sub_categories' => $sub_categories,
            'breadcrumbs' => $breadcrumbs,
            'search_action' => $search_action ,
            'keyword' => null]);
    }

    public function search()
    {
        $imageController = new ImagesController();

        $keyword = request('keyword');
        $querystringArray = ['keyword' => $keyword];

        $search_action = Config::get('constants.default_action');
        $breadcrumbs = Categories::get_breadcrumbs('00.00.00');

        $search_products = Products::get_products($keyword, null, $querystringArray
                ,Config::get('constants.options.page_size'), null);
        $search_products = $imageController->get_default_image($search_products);

        return view('category', [
            'sub_categories' => $search_products,
            'breadcrumbs' => $breadcrumbs,
            'search_action' => $search_action ,
            'keyword' => $keyword]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $imageController = new ImagesController();
        $productItems = new ProductItems();

        $series_code = request('series_code');

        $search_action = Config::get('constants.default_action');
        $keyword = request('keyword');
        $querystringArray = ['keyword' => $keyword];
        $product = Products::get_product($series_code);

        $breadcrumbs = Categories::get_breadcrumbs($product->category_code);

        $images = $imageController->get_images_path($breadcrumbs, $product->series_code);
        $images_count = count($images);
        $product_items = ProductItems::where('product_id', '=', $product->id)
        ->orderBy('product_code','ASC')->get();

        $relevant_products = Products::get_products($keyword, $product->category_code, $querystringArray
                    , Config::get('constants.options.relevant_size'), $product->series_code);
        $relevant_products = $imageController->get_default_image($relevant_products);

        return view('product', [
            'product' => $product,
            'breadcrumbs' => $breadcrumbs,
            'search_action' => $search_action,
            'images_count' => $images_count,
            'relevant_products' => $relevant_products,
            'product_items' => $product_items,
            'keyword' => $keyword,
            'product_images'=> $images]);
    }

}
