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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil','HomeController@perfil')->name('perfil');
Route::get('/conductores','HomeController@conductores')->name('conductores');
Route::get('/conductores/agregar','HomeController@conductoresAgregar')->name('conductores.agregar');
Route::get('/conductores/editar','HomeController@conductoresEditar')->name('conductores.editar');
Route::get('/vehiculos','HomeController@vehiculos')->name('vehiculos');
Route::get('/maps', 'HomeController@maps')->name('maps');