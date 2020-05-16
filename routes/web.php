<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'ImagesController@index')->name('index');
Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{category_code}', 'CategoriesController@index');

Route::get('/product/{series_code}', 'ProductsController@show');
Route::get('/products', 'ProductsController@index');
Route::get('/products/{category_code}', 'ProductsController@index');

Route::get('/search', 'ProductsController@search');

Route::get('/import_excel', 'ImportProductsController@index');
Route::post('/import_excel/import', 'ImportProductsController@import');
Route::post('/import_excel/publish', 'ImportProductsController@publish');


Route::post('/inquiry', 'InquiriesController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
