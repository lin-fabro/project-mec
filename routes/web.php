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
Route::get('/import_excel/template', 'ImportProductsController@download');


Route::post('/inquiry', 'InquiriesController@submit');
Route::get('/inquiry/list', 'InquiriesController@index')->middleware('auth');
Route::get('/inquiry/{id}', 'InquiriesController@show')->middleware('auth');
Route::delete('/inquiry/list/{id}', 'InquiriesController@destroy')->middleware('auth');
Route::post('/inquiry/list/delete', 'InquiriesController@delete')->middleware('auth');
Route::get('/inquiry/list/export', 'InquiriesController@export')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{anchor}', 'ImagesController@index');
Route::get('/{anchor}', function(){
    $anchor = request('anchor');
    return redirect(route('index'). '#'.$anchor);
});
