<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workerControler extends Controller
{
    public function recibir_id_tienda($respuesta){
        $Tienda_ID = $respuesta->method();
        if($respuesta->method('post')){
            echo "recibo el ID de la tienda";
        }
    }
}
