<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('parent_code', 20)->index();
            $table->string('code', 20)->unique()->index();
            $table->string('name', 100);
            $table->integer('level')->nullable()->length(2)->unsigned();
            $table->timestamps();
        });

        // Insert All products record
        DB::table('categories')->insert(
            array(
                'parent_code' => '-',
                'code' => '00.00.00',
                'name' => 'All Products',
                'level' => 0
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
