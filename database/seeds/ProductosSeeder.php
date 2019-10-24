<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Productos')->insert([
            'ID_Tienda' => '1',
            'Nombre' => 'Iphone 11',
            'Foto' => 'iphone11.png',
            'Descripcion' => 'Ultimo movil lanzado por apple',
            'Precio_venta' => '700',
            'Stock' => '0',
            'EnlaceExterno' => 'www.google.com'
        ]);
        DB::table('Productos')->insert([
            'ID_Tienda' => '1',
            'Nombre' => 'Samsung Galaxy S10',
            'Foto' => 'samsungs10.jpg',
            'Descripcion' => 'Ultimo movil lanzado por Samsung',
            'Precio_venta' => '999.99',
            'Stock' => '5',
            'EnlaceExterno' => 'www.google.com'
        ]);
        DB::table('Productos')->insert([
            'ID_Tienda' => '1',
            'Nombre' => 'OnePlus 7T Pro Dorado',
            'Foto' => 'oneplus7pro.jpg',
            'Descripcion' => 'Ultimo movil lanzado por OnePlus',
            'Precio_venta' => '539.99',
            'Stock' => '8',
            'EnlaceExterno' => 'www.google.com'
        ]);
        DB::table('Productos')->insert([
            'ID_Tienda' => '2',
            'Nombre' => 'Bolso',
            'Foto' => 'bolso.jpg',
            'Descripcion' => 'Bolso comodisimo',
            'Precio_venta' => '19.99',
            'Stock' => '20',
            'EnlaceExterno' => 'www.google.com'
        ]);
        DB::table('Productos')->insert([
            'ID_Tienda' => '2',
            'Nombre' => 'Blusa',
            'Foto' => 'blusa.jpg',
            'Descripcion' => 'Blusa',
            'Precio_venta' => '29.99',
            'Stock' => '30',
            'EnlaceExterno' => 'www.google.com'
        ]);
        DB::table('Productos')->insert([
            'ID_Tienda' => '3',
            'Nombre' => 'GTA V',
            'Foto' => 'GTAV.jpg',
            'Descripcion' => 'El juego mas vendido hasta la fecha',
            'Precio_venta' => '14.99',
            'Stock' => '4',
            'EnlaceExterno' => 'www.google.com'
        ]);
    }
}
