<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workerControler extends Controller
{
    public function recibir_id_tienda(Request $respuesta){
            $Tienda_ID = $respuesta->input("Tiendas");
            return view('tienda',['ID' => $Tienda_ID]); 
    }
}
