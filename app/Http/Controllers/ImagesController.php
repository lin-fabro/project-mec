<?php

namespace App\Http\Controllers;

use Config;
use App\Categories;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search_action = '/search';
        $featured_images = $this -> get_images_path(null, 'featured_products');
        $images_count = count($featured_images);

        return view('index',['search_action' => $search_action,
            'featured_images' => $featured_images,
            'images_count' => $images_count]);
    }

    public function get_category_image($categories){

        foreach ($categories as $category) {
            $image_breadcrumb = Categories::get_breadcrumbs($category->code);
            $image_path = $this -> get_images_path($image_breadcrumb, null);
            if(empty($image_path) || $image_path == "" || $image_path == null) {
                $image_path = Config::get('constants.no_image_path');
            } else {
                $image_path = DIRECTORY_SEPARATOR.$image_path[0];
            }
            $category->image_path = $image_path;
        } //*/

        return $categories;
    }

    public function get_default_image($products){

        foreach ($products as $product) {
            $image_breadcrumb = Categories::get_breadcrumbs($product->category_code);
            $image_path = $this -> get_images_path($image_breadcrumb, $product->series_code);
            if(empty($image_path) || $image_path == "" || $image_path == null) {
                $image_path = Config::get('constants.no_image_path');
            } else {
                $image_path = DIRECTORY_SEPARATOR.$image_path[0];
            }
            $product->image_path = $image_path;
            $product->level = 0;
        } //*/

        return $products;
    }

    public function get_images_path($breadcrumb, $series_code){

        $dir_loc = 'images';
        $non_directory_chars = array("\\", "/", ":", "*", "?", "\"", "<", ">", "|", " ,");

        if($breadcrumb != null) {
            foreach ($breadcrumb as $crumb) {
                $dir_loc = $dir_loc.DIRECTORY_SEPARATOR.str_replace($non_directory_chars,',',strtolower($crumb->name));
            }
        }
        $dir_loc = str_replace(' ','_', $dir_loc);

        if($series_code != null){
            $series_code = Str::lower($series_code);
            $series_code = str_replace(' ','_', $series_code);
            $dir_loc = $dir_loc.DIRECTORY_SEPARATOR.$series_code;
        }

        $img_files = glob($dir_loc.DIRECTORY_SEPARATOR."*.{JPG,PNG,GIF,jpg,gif,png}", GLOB_BRACE);//getting all images

        foreach ($img_files as $img_file) {
            error_log($img_file);
        }

        return $img_files;
    }

}
