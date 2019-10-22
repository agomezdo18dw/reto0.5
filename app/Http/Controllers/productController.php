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

    public function ComprarProducto(Request $ID_Prod){
        $producto = Product::where("ID_Producto", "=", $ID_Prod)->get();
        $producto->Stock -= 1;
        $producto->save();
        recogerProductos();
    }

    public function GestionProducto($ID_Tienda){
        $IDtienda=$ID_Tienda;
        return view('GestionProducto')->with(['ID'=>$ID_Tienda]);
    }

    public function AñadirProducto($ID_Tienda){
       $IDtienda=$ID_Tienda;
       
       $productos = Product::where("ID_Tienda","=",$IDtienda)->get();
       return view('tienda2')->with(['ID'=>$ID_Tienda,'ID'=>$productos]);
    }
}
