<?php

use Illuminate\Database\Seeder;

class TiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tiendas')->insert([
            'Nombre' => 'MediaMarkt',
            'Horario_Normal' => '10:00-22:00',
            'Horario_Festivo' => 'Cerrado',
            'Sector' => 'Tecnologia'
        ]);
        DB::table('Tiendas')->insert([
            'Nombre' => 'Zara',
            'Horario_Normal' => '10:00-22:00',
            'Horario_Festivo' => 'Cerrado',
            'Sector' => 'Ropa'
        ]);
        DB::table('Tiendas')->insert([
            'Nombre' => 'Game',
            'Horario_Normal' => '10:00-22:00',
            'Horario_Festivo' => 'Cerrado',
            'Sector' => 'Videojueos'
        ]);
        DB::table('Tiendas')->insert([
            'Nombre' => 'Fnac',
            'Horario_Normal' => '10:00-22:00',
            'Horario_Festivo' => 'Cerrado',
            'Sector' => 'Tecnologia'
        ]);
        DB::table('Tiendas')->insert([
            'Nombre' => 'InterSport',
            'Horario_Normal' => '10:00-22:00',
            'Horario_Festivo' => 'Cerrado',
            'Sector' => 'Deporte'
        ]);
    }
}
