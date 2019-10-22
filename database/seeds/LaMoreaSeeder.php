<?php

use Illuminate\Database\Seeder;

class LaMoreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('LaMorea')->insert([
            'Localizacion' => 'Barrio La Morea, s/n, 31191 Cordovilla, Navarra',
            'Informacion' => '100 Tiendas, 14 Restaurantes, eventos, cine y mucho mas',
            'Horario_Normal' => '10:00 - 22:00',
            'Horario_Festivos' => 'Cerrado',
        ]);
    }
}
