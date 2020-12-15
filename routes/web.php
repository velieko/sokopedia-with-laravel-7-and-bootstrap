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
])->middleware('product');
Route::get('addtocart/{id}', [
    'uses' => 'ProductController@indexCart',
    'as' => 'addtocart'
])->middleware('product');

Route::get('/homepage', 'WebController@productItem')->name('home');
Route::get('/homepage/search', 'WebController@searchItem');
Route::get('/register', 'WebController@registerMenu');
Route::get('/login', 'WebController@loginMenu');


Route::post('/addtocart/{id}/success', 'ProductController@addItem')->middleware('product');
Route::get('/cart/delete/{id}', 'ProductController@cartDelete')->middleware('product');
Route::put('/cart/edit/{id}/success', 'ProductController@editCart')->middleware('product');

Route::get('/admin/add_product','ProductController@addProduct')->middleware('adminpriv');
Route::post('/admin/add_product/success','ProductController@addProductSuccess')->middleware('adminpriv');
Route::get('/admin/product_list','ProductController@productList')->middleware('adminpriv');
Route::get('/admin/product_list/delete/{id}','ProductController@productDelete')->middleware('adminpriv');


Route::get('/admin/add_category','CategoryController@addCategory')->middleware('adminpriv');
Route::post('/admin/add_category/success','CategoryController@addCategorySuccess')->middleware('adminpriv');
Route::get('/admin/category_list','CategoryController@categoryList')->middleware('adminpriv');

Route::get('/admin/admin', 'AdminController@index')->middleware('adminpriv');


Route::get('/cart','ProductController@cartList')->middleware('product');



Route::get('/history','HistoryController@index')->middleware('product');

Route::get('transactiondetails/{id}', [
    'uses' => 'TransactionController@index',
    'as' => 'transactiondetails'
])->middleware('product');

Route::post('/checkoutproduct/{id1}/checkoutcart/{id2}/success', 'HistoryController@store');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
