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

    public function GestionProducto(request $request){
        $IDtienda=$request->get('IDtienda');
        return view('GestionProducto')->with(['ID'=>$IDtienda]);
    }

    public function vueltaTienda(Request $request){
        $idtienda=$request->get('IDtienda');
        $nombre=$request->get('Nombre');
        $foto=$request->file('foto')->getClientOriginalName();
        $request->file('foto')->move("public/img/Productos/".$idtienda."/".$foto);
        $descripcion=$request->get('Descripcion');
        $precio=$request->get('Precio');
        $stock=$request->get('Stock');
        $enlace=$request->get('EnlaceExterno');


        $productos = Product::insert(["ID_Tienda"=>$idtienda, "Nombre"=>$nombre, "Foto"=>$foto, "Descripcion"=>$descripcion, "Precio_venta"=>$precio, "Stock"=>$stock, "EnlaceExterno"=>$enlace]);
        $productos = Product::where("ID_Tienda","=",$idtienda)->get();
        return view('tienda')->with(['ID'=>$idtienda,'productos'=>$productos]);
    }

    public function eliminarProducto($IDproducto){
        $productos = Product::where("ID_Producto","=",$IDproducto)->delete();
        $productos = Product::where("ID_Tienda","=",$idtienda)->get();
        return view('tienda2')->with(['ID'=>$idtienda,'productos'=>$productos]);
    }
}
