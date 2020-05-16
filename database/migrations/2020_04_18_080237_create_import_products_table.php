<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_products', function (Blueprint $table) {
            $table->string('series_number', 100)->unique()->index()->nullable(false);
            $table->string('product_code', 100)->unique()->index()->nullable(false);
            $table->string('product_name')->nullable(false);
            $table->text('size')->nullable();
            $table->string('box_carton', 100)->nullable();
            $table->string('item_weight', 100)->nullable();
            $table->string('shipping_weight', 100)->nullable();
            $table->string('item_dimension', 100)->nullable();
            $table->string('shipping_dimension', 100)->nullable();
            $table->text('color')->nullable();
            $table->text('material')->nullable();
            $table->text('note')->nullable();
            $table->text('features_benefits')->nullable();
            $table->text('includes')->nullable();
            $table->text('finish')->nullable();
            $table->text('functionalities')->nullable();
            $table->string('category_code_one', 100)->nullable(false);
            $table->string('category_name_one', 100)->nullable(false);
            $table->string('category_code_two', 100)->nullable(false);
            $table->string('category_name_two', 100)->nullable(false);
            $table->string('category_code_three', 100)->nullable(false);
            $table->string('category_name_three', 100)->nullable(false);
            $table->string('process_flag', 100)->nullable();
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
        Schema::dropIfExists('import_products');
    }
}
