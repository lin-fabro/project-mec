<?php

namespace App;

use Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
   protected $guarded = [];

   protected $appends = ['include_list','functionality_list','feature_list'];

   public static function get_products_by_category_code($category_code){
    return  DB::table('products')
        ->where('category_code', '=', $category_code)
        ->paginate(Config::get('constants.options.page_size'));
   }

   public static function get_product($series_code){
       return Products::where('series_code', $series_code)->first();
   }

   public static function get_products($keyword, $category_code, $querystringArray, $pagesize, $series_code){


    return  Products::select('products.id','products.category_code','products.series_code','products.name','products.color','products.material'
                ,'products.features_benefits','products.includes','products.functionalities','products.phase_out')
        -> when($series_code, function($query) use ($series_code){
            return $query-> where('series_code', '!=', $series_code);
        })-> when($keyword, function($query) use ($keyword){
            return $query -> join('product_items', 'products.id', '=', 'product_items.product_id')
                -> where('products.name', 'LIKE', '%'.$keyword.'%')
                -> orWhere('products.material', 'LIKE', '%'.$keyword.'%')
                -> orWhere('products.features_benefits', 'LIKE', '%'.$keyword.'%')
                -> orWhere('products.includes', 'LIKE', '%'.$keyword.'%')
                -> orWhere('products.functionalities', 'LIKE', '%'.$keyword.'%')
                -> orWhere('products.color', 'LIKE', '%'.$keyword.'%')
                -> orWhere('products.category_tags', 'LIKE', '%'.$keyword.'%')
                -> orWhere('product_items.note', 'LIKE', '%'.$keyword.'%')
                -> orWhere('product_items.series_number', 'LIKE', '%'.$keyword.'%')
                -> orWhere('product_items.product_code', 'LIKE', '%'.$keyword.'%');
        })-> when($category_code, function($query) use ($category_code){
            return $query->where('products.category_code', '=', $category_code);
        }) -> groupBy('products.id','products.category_code','products.series_code','products.name','products.color','products.material'
                ,'products.features_benefits','products.includes','products.functionalities','products.phase_out')
        -> when($pagesize == Config::get('constants.options.relevant_size'), function($query) use ($pagesize){
            return $query -> inRandomOrder();
        })-> paginate($pagesize)->onEachSide(1)
        -> appends($querystringArray);
   }

   public function getIncludeListAttribute(){
        return array_filter(explode("; ", $this->includes));
   }

   public function getFunctionalityListAttribute(){
        return array_filter(explode("; ", $this->functionalities));
   }

   public function getFeatureListAttribute(){
        return array_filter(explode("; ", $this->features_benefits));
   }

}
