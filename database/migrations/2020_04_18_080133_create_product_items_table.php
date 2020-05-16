<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_id', 100)->nullable(false);
            $table->string('series_number', 100)->unique()->index()->nullable(false);
            $table->string('product_code', 100)->unique()->index()->nullable(false);
            $table->text('size')->nullable();
            $table->string('box_carton', 100)->nullable();
            $table->integer('item_weight')->nullable()->length(11)->unsigned();
            $table->integer('shipping_weight')->nullable()->length(11)->unsigned();
            $table->integer('item_length')->nullable()->length(11)->unsigned();
            $table->integer('item_width')->nullable()->length(11)->unsigned();
            $table->integer('item_height')->nullable()->length(11)->unsigned();
            $table->integer('shipping_length')->nullable()->length(11)->unsigned();
            $table->integer('shipping_width')->nullable()->length(11)->unsigned();
            $table->integer('shipping_height')->nullable()->length(11)->unsigned();
            $table->text('note')->nullable();
            $table->boolean('phase_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_items');
    }
}
