<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('Productos', function (Blueprint $table) {
            $table->increments('ID_Producto');
            $table->unsignedInteger('ID_Tienda');
            $table->char('Nombre',50);
            $table->binary('Foto');
            $table->char('Descripcion',150);
            $table->float('Precio_venta', 2);
            $table->float('Precio_compra', 2);
            $table->integer('Stock');
            $table->char('EnlaceExterno',50);
            
            $table->foreign('ID_Tienda')->references('ID_Tienda')->on('Tiendas');
        });*/


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productos');
    }
}
