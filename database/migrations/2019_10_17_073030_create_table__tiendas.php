<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTiendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tiendas', function (Blueprint $table) {
            $table->increments('ID_Tienda')->onDelete('cascade')->onUpdate('cascade');
            $table->char('Nombre',50);
            $table->char('Horario_Normal',30);
            $table->char('Horario_Festivo',30);
            $table->char('Sector',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tiendas');
    }
}
