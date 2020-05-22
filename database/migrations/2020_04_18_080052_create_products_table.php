<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_code', 20)->index()->nullable(false);
            $table->string('series_code', 100)->unique()->index()->nullable(false);
            $table->string('name')->nullable(false);
            $table->text('color')->nullable();
            $table->text('material')->nullable();
            $table->text('finish')->nullable();
            $table->text('features_benefits')->nullable();
            $table->text('includes')->nullable();
            $table->text('functionalities')->nullable();
            $table->text('category_tags');
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
        Schema::dropIfExists('products');
    }
}
