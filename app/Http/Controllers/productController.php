<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tienda;

class productController extends Controller
{
    public function recogerProductos(){
        $productos = Product::where("Stock", ">", "0")->get();
        $tiendas = Tienda::all();
        return view('tiendas')->with(['tiendas' => $tiendas, 'productos' => $productos]);
    }
}
