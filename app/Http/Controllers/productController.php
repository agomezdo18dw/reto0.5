<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
    public function recogerProductos(){
        $productos = Product::all();
        return view('tiendas')->with(['productos' => $productos]);
    }
}
