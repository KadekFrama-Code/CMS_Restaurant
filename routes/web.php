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

Route::get('/', function () {
    return view('swiper-slide');
});

Route::get('/cms/produk', 'ProdukController@index');
Route::get('/cms/produk/create', 'ProdukController@create');
Route::post('/cms/produk/add', 'ProdukController@store');
// Route::get('/cms/produk/edit/{id}', 'ProdukController@update');

Route::get('/produk', 'ProdukController@index2');
