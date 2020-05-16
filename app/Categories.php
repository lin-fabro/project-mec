<?php

namespace App;

use Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
   protected $guarded = [];

   public static function get_breadcrumbs($code)
   {
       $breadcrumbs = Categories::where('code', '=', $code)->get();

       while ($breadcrumbs->last() && $breadcrumbs->last()->parent_code !== "-")
       {
           $parent = Categories::where('code', '=', $breadcrumbs->last()->parent_code)->get();
           $breadcrumbs = $breadcrumbs->merge($parent);
       } /** */

       return $breadcrumbs->sort();
   }

   public static function get_breadcrumbs_by_name($name)
   {
       $breadcrumbs = Categories::where('name', '=', $name)->get();

       while ($breadcrumbs->last() && $breadcrumbs->last()->parent_code !== "-")
       {
           $parent = Categories::where('code', '=', $breadcrumbs->last()->parent_code)->get();
           $breadcrumbs = $breadcrumbs->merge($parent);
       } /** */

       return $breadcrumbs->sort();
   }

   public static function get_all_sub_categories_by_code($parent_code)
   {
       $sub_categories = Categories::where('parent_code', '=', $parent_code)->get();

       foreach ($sub_categories as $sub_category) {
           $child = Categories::where('parent_code', '=', $sub_category->code)->get();
           $sub_categories = $sub_categories->merge($child);
       }

       return $sub_categories->sort();
   }

   public static function get_all_sub_categories_by_name($name)
   {
       $sub_categories = Categories::where('name', '=', $name)->get();
       $result = Categories::where('parent_code', '=', $sub_categories->first()->code)->get();
       $sub_categories = $sub_categories->merge($result);

       foreach ($sub_categories as $sub_category) {
           $child = Categories::where('parent_code', '=', $sub_category->code)->get();
           $sub_categories = $sub_categories->merge($child);
       }

       return $sub_categories->sort();
   }

   public static function get_sub_category_by_code($parent_code){

    return  DB::table('categories')
        ->where('parent_code', '=', $parent_code)
        ->paginate(Config::get('constants.options.page_size'));
   }
}
