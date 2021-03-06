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

    /*public function ComprarProducto(Request $ID_Prod){
        $producto = Product::where("ID_Producto", "=", $ID_Prod)->get();
        $producto->Stock -= 1;
        $producto->save();
        recogerProductos();
    }*/

    public function GestionProducto(request $request){
        $IDtienda=$request->get('IDtienda');
        return view('GestionProducto')->with(['ID'=>$IDtienda]);
    }

    public function vueltaTienda(Request $request){
        $idtienda=$request->get('IDtienda');
        $nombre=$request->get('Nombre');
        $foto=$request->file('foto')->getClientOriginalName();
        $request->file('foto')->move("img/Productos/".$idtienda."/",$foto);
        $descripcion=$request->get('Descripcion');
        $precio=$request->get('Precio');
        $stock=$request->get('Stock');
        $enlace=$request->get('Enlace_externo');
        Product::insert([["ID_Tienda"=>$idtienda, "Nombre"=>$nombre, "Foto"=>$foto, "Descripcion"=>$descripcion, "Precio_venta"=>$precio, "Stock"=>$stock, "EnlaceExterno"=>$enlace]]);
        $productos = Product::where("ID_Tienda","=",$idtienda)->get();
        return view('tienda')->with(['productos'=>$productos,'ID'=>$idtienda]);
    }
    
    public function eliminarProducto($IDproducto,Request $request){
        $idtienda=$request->get('IDtienda');
        Product::where("ID_Producto","=",$IDproducto)->delete();
        $productos = Product::where("ID_Tienda","=",$idtienda)->get();
        return view('tienda')->with(['productos'=>$productos, 'ID' => $idtienda]);
    }

    public function editarProducto(Request $request) {
        $IDtienda=$request->get('IDtienda');
        $IDproducto=$request->get('IDprod');
        $producto = Product::where("ID_Producto","=",$IDproducto)->get();
        return view('editar')->with(['producto'=>$producto, 'ID' => $IDtienda]);
    }

    public function modificarProducto(Request $request){
        $IDtienda=$request->get('IDtienda');
        $IDproducto=$request->get('IDproducto');
        $descripcion=$request->get('Descripcion');
        $precio=$request->get('Precio');
        $stock=$request->get('Stock');
        $enlace=$request->get('Enlace_externo');
        Product::where("ID_Producto",$IDproducto)->update(["Descripcion"=>$descripcion, "Precio_venta"=>$precio, "Stock"=>$stock, "EnlaceExterno"=>$enlace]);
        $productos = Product::where('ID_Tienda',$IDtienda)->get();
        return view('tienda')->with(['productos'=>$productos , 'ID'=>$IDtienda]);
    }
}
