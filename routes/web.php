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

Route::post('tienda','workerControler@recibir_id_tienda')->name('IDtienda');

Route::get('comprar', 'productController@ComprarProducto')->name('comprar');

Route::get('tiendas', 'productController@recogerProductos')->name('tiendas');

Route::post('GestionProducto','productController@GestionProducto')->name('GestionProducto');

Route::post('tienda/{id}','productController@vueltaTienda')->name('tienda2');

Route::post('eliminar/{idproducto}','productController@eliminarProducto');