<?php

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

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show'); //formulario de edición productos
Route::post('/cart', 'CartDetailController@store'); //formulario de edición productos
Route::delete('/cart', 'CartDetailController@destroy'); //formulario de eliminación de lugares
Route::post('/order', 'CartController@update'); 

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {
   	Route::get('/products', 'ProductController@index'); //listado de productos
   	Route::get('/products/create', 'ProductController@create'); //formulario de nuevos productos
	Route::post('/products', 'ProductController@store'); //registrar los datos de nuevos productos
	Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario de edición productos
	Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar los datos de nuevos productos
	Route::delete('/products/{id}', 'ProductController@destroy'); //formulario de edición productos

	Route::get('/products/{id}/images', 'ImageController@index'); //lista de imagenes
	Route::post('/products/{id}/images', 'ImageController@store'); //registrar los datos de nuevos productos
	Route::delete('/products/{id}/images', 'ImageController@destroy'); //formulario de edición productos
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //destacar una imagen
//CR
//UD
});



