<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producutos;

class productController extends Controller
{
    public function recogerProductos(){
        $productos = Productos::all();
        return view('tiendas', compact('productos'));
    }
}
