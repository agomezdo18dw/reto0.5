<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tienda;

class productController extends Controller
{
    public function recogerProductos(){
        $productos = Product::all();
        $tiendas = Tienda::all();
        return view('tiendas')->with(['tiendas' => $tiendas, 'productos' => $productos]);
    }

    public function AñadirProducto(Request $request){
       if ($request->has('InsertarProductos')){
        return view('tienda');
       }
    }
}
