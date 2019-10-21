<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workerControler extends Controller
{
    public function recibir_id_tienda(Request $respuesta){
        $ID=$respuesta->input("Tiendas");
        return view('tienda',compact('ID')); 
    }

    
}
