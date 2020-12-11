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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
