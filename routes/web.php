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


Route::get('/admin/products', 'ProductController@index'); //listado de productos
Route::get('/admin/products/create', 'ProductController@create'); //formulario de nuevos productos
Route::post('/admin/products', 'ProductController@store'); //registrar los datos de nuevos productos
Route::get('/admin/products/{id}/edit', 'ProductController@edit'); //formulario de edición productos
Route::post('/admin/products/{id}/edit', 'ProductController@update'); //actualizar los datos de nuevos productos
Route::delete('/admin/products/{id}', 'ProductController@destroy'); //formulario de edición productos
//CR
//UD

