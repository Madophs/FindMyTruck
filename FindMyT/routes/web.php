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
    return redirect()->route('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil','HomeController@perfil')->name('perfil');
Route::get('/conductores','ConductoresController@conductores')->name('conductores');
Route::get('/conductores/crear','ConductoresController@crear')->name('conductores.crear');
Route::post('/conductores/guardar','ConductoresController@guardar')->name('conductores.guardar');
Route::get('/conductores/editar/{id}','ConductoresController@editar')->name('conductores.editar');
Route::post('/conductores/actualizar', 'ConductoresController@actualizar')->name('conductores.actualizar');
Route::get('/conductores/eliminar/{id}', 'ConductoresController@eliminar')->name('conductores.eliminar');
Route::get('/vehiculos','HomeController@vehiculos')->name('vehiculos');
Route::get('/maps', 'HomeController@maps')->name('maps');
Route::get('/localizaciones', 'HomeController@polygons')->name('polygons');
Route::get('/vehiculos', 'VehiculosController@vehiculos')->name('vehiculos');
Route::get('/vehiculos/crear', 'VehiculosController@crear')->name('vehiculos.crear');
Route::post('/vehiculos/guardar','VehiculosController@guardar')->name('vehiculos.guardar');
Route::get('/vehiculos/editar/{id}', 'VehiculosController@editar')->name('vehiculos.editar');
Route::post('/vehiculos/actualizar','VehiculosController@actualizar')->name('vehiculos.actualizar');
Route::get('/vehiculos/eliminar/{id}','VehiculosController@eliminar')->name('vehiculos.eliminar');

