<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItems extends Model
{
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
   protected $guarded = [];

   public static function get_product_items($product_id){

    return ProductItems::where('product_id', '=', $product_id)
            ->orderBy('product_code','ASC')->get();

   }
}
