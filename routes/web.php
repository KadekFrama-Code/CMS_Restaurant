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
    return view('welcome');
});


/* Login Route*/
	Route::get('/login', function(){
		return view('login');
	})->name('login');

	Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

/*Register Route*/
	Route::get('/register', 'RegisterClientController@add')->name('register');
	Route::post('/postregister', 'RegisterClientController@postregister')->name('postregister');

	Route::get('/daftar-clients', 'RegisterClientController@list_client');

/*Logout Route*/
	Route::get('/keluar', 'LoginController@logout')->name('logout');




Route::group(['middleware' => ['auth:user', 'ceklevel:admin']], function(){
	Route::get('/produk', 'MenulistController@index2');
	Route::get('/cms/produk', 'MenulistController@index');
	Route::get('/cms/produk/create', 'MenulistController@create');
	Route::post('/cms/produk/add', 'MenulistController@store');


	Route::get('/cms/seo-setting/', 'SeosettingController@index');
	// Route::get('/cms/seo-setting/{id}', 'SeosettingController@store');
	Route::get('/cms/seo-setting/{id}', 'SeosettingController@edit');
	Route::put('/cms/seo-setting/{id}', 'SeosettingController@update');
});







// Route::get('/cms/produk/edit/{id}', 'ProdukController@update');


