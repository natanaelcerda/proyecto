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


Route::group(['middleware' => 'auth'], function(){

  Route::post('/crearusuario', 'UsersController@store'); //Registro de usuario//

  Route::post('/crearProducto', 'ProductosController@store');

  Route::get('/welcome', 'UsersController@index');

  Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

  Route::get('/productos','ProductosController@indexproductos');

  Route::get('/listas','ProductosController@indexlistas');

  Route::get('/modificar','ProductosController@indexmodificar');

  Route::post('/producto/eliminar', 'ProductosController@eliminar');

  Route::get('/modallista','ProductosController@editar');

});

Auth::routes();
