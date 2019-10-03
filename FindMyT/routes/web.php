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
route::get('/conductores/eliminar/{id}', 'ConductoresController@eliminar')->name('conductores.eliminar');
Route::get('/vehiculos','HomeController@vehiculos')->name('vehiculos');
Route::get('/maps', 'HomeController@maps')->name('maps');
Route::get('/localizaciones', 'HomeController@polygons')->name('polygons');

