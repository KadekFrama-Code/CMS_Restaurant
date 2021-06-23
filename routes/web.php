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

/*Logout Route*/
	Route::get('/keluar', 'LoginController@logout')->name('logout');




Route::group(['middleware' => ['auth:user,client', 'ceklevel:admin,adminclient']], function(){
	Route::get('/produk', 'ProdukController@index2');
	Route::get('/cms/produk', 'ProdukController@index');
	Route::get('/cms/produk/create', 'ProdukController@create');
	Route::post('/cms/produk/add', 'ProdukController@store');
});







// Route::get('/cms/produk/edit/{id}', 'ProdukController@update');


