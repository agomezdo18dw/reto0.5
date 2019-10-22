<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class workerControler extends Controller
{
    public function recibir_id_tienda(Request $respuesta){
        $ID=$respuesta->input("Tiendas");
        $productos = Product::all()->where('ID_Tienda' == $ID);
        return view('tienda')->with(['ID'=>$id,'productos'=>$productos]); 
    }
}
