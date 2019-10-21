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
})->name('/');

Route::get('trabajador',function(){
    return view('trabajador');
})->name('trabajador');

Route::get('/MostrarProductos/{id}',function($id){
    return view('tienda',$id);
})->name('VerProductos');

Route::get('/InsertarProductos/{id}',function($id){
    return view('tienda',$id);
})->name('AñadirProductos');

Route::post('tienda','workerControler@recibir_id_tienda')->name('IDtienda');

Route::get('tiendas', 'productController@recogerProductos')->name('tiendas');

