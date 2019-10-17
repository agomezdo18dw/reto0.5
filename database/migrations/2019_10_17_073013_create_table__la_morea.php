<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLaMorea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('LaMorea', function (Blueprint $table) {
            $table->increments('ID_LaMorea');
            $table->char('Localizacion',250);
            $table->char('Informacion',500);
            $table->char('Horario_Normal',30);
            $table->char('Horario_Festivos',30);
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LaMorea');
    }
}
