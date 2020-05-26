<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductItems extends Model
{
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
   protected $guarded = [];

   protected $appends = ['parsed_note','parsed_size','list_note','list_size'];

   public static function get_product_items($product_id){

    return ProductItems::where('product_id', '=', $product_id)
            ->orderBy('series_number','ASC')->get();

   }

   public function getParsedNoteAttribute(){
        $buffer = str_replace(array("\r", "\n"), '', $this->note);
        return trim(str_replace("; ", "<br/>", $buffer));
   }

   public function getParsedSizeAttribute(){
        $buffer = str_replace(array("\r", "\n"), '', $this->size);
        return trim(str_replace("; ", "<br/>", $buffer));
   }

   public function getListSizeAttribute(){
     return array_filter(explode(";", $this->size));
   }

   public function getListNoteAttribute(){
     return array_filter(explode(";", $this->note));
   }
}
