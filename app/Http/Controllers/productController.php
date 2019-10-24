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

    public function vueltaTienda(Request $ID_tienda){
        $idtienda=$ID_tienda;
        $nombre=$_POST['Nombre'];
        
        $descripcion=$_POST['Descripcion'];;
        $precio=$_POST['Precio'];;
        $stock=$_POST['Stock'];
        $enlace=$_POST['Enlace_externo'];
        $productos = Product::insert(["ID_Tienda"=>$idtienda, "Nombre"=>$nombre, "Foto"=>$foto, "Descripcion"=>$descripcion, "Precio_venta"=>$precio, "Stock"=>$stock, "EnlaceExterno"=>$enlace]);
        $productos = Product::where("ID_Tienda","=",$idtienda)->get();
        return view('tienda')->with(['ID'=>$idtienda,'productos'=>$productos]);
    }

    public function eliminarProducto($IDproducto){
        $prodcutos = Product::where("ID_Producto","=",$IDproducto)->delete();
        $productos = Product::where("ID_Tienda","=",$idtienda)->get();
        return view('tienda2')->with(['ID'=>$idtienda,'productos'=>$productos]);
    }

    public function editarProducto($IDproducto) {
        $stock=$_POST['Stock'];
        $productos = Product::where("ID_Producto","=",$IDproducto)->update('Stock', "$stock");
        return view('modificar')-with(['ID'=>$idtienda, 'productos'=>$productos]);
    }
}
