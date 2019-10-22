<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class workerControler extends Controller
{
    public function recibir_id_tienda(Request $respuesta){
        $NombreTienda = $respuesta->input.name("Tiendas");
        $ID=$respuesta->input("Tiendas");
        $productos = Product::where("ID_Tienda","=",$ID)->get();
        return view('tienda')->with(['ID'=>$ID,'productos'=>$productos]); 
    }
}
