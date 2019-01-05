<?php

use Illuminate\Database\Seeder;

class JakartaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jakarta')->insert([
            'tahun' => '2013',
            'budidayalaut' => '2517',
            'tambak' => '1211',
            'kolam' => '3036',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0'

        ]);

        DB::table('jakarta')->insert([
            'tahun' => '2014',
            'budidayalaut' => '4066',
            'tambak' => '756',
            'kolam' => '5168',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0'

        ]);

        DB::table('jakarta')->insert([
            'tahun' => '2015',
            'budidayalaut' => '2464',
            'tambak' => '2656',
            'kolam' => '4266',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0'

        ]);
    }
}
