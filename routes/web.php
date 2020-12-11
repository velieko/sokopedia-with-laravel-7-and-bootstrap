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

Route::get('/', 'WebController@productItem');
Route::get('product/{id}', [
    'uses' => 'ProductController@index',
    'as' => 'product'
]);
Route::get('addtocart/{id}', [
    'uses' => 'ProductController@indexCart',
    'as' => 'addtocart'
]);
Route::get('/homepage', 'WebController@productItem')->name('home');
Route::get('/register', 'WebController@registerMenu');
Route::get('/login', 'WebController@loginMenu');
Route::post('/addtocart/{id}/success', 'ProductController@addItem');
Route::get('/admin/add_product','ProductController@addProduct');
Route::post('/admin/add_product/success','ProductController@addProductSuccess');
Route::get('/admin/product_list','ProductController@productList');
Route::get('/admin/product_list/delete/{id}','ProductController@productDelete');
Route::get('/admin/add_category','CategoryController@addCategory');
Route::post('/admin/add_category/success','CategoryController@addCategorySuccess');
Route::get('/admin/category_list','CategoryController@categoryList');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
