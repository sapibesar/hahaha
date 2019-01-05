<?php

use Illuminate\Database\Seeder;

class KalimantanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kalbar')->insert([
            'tahun' => '2013',
            'budidayalaut' => '177',
            'tambak' => '47723',
            'kolam' => '13931',
            'keramba' => '14463',
            'jaringapung' => '3227',
            'sawah' => '0',
        ]);

        DB::table('kalbar')->insert([
            'tahun' => '2014',
            'budidayalaut' => '1631',
            'tambak' => '46730',
            'kolam' => '19366',
            'keramba' => '16034',
            'jaringapung' => '2943',
            'sawah' => '0',
        ]);

        DB::table('kalbar')->insert([
            'tahun' => '2015',
            'budidayalaut' => '32',
            'tambak' => '20158',
            'kolam' => '17876',
            'keramba' => '21913',
            'jaringapung' => '3933',
            'sawah' => '0',
        ]);







        DB::table('kalsel')->insert([
            'tahun' => '2013',
            'budidayalaut' => '2426',
            'tambak' => '23826',
            'kolam' => '37156',
            'keramba' => '26915',
            'jaringapung' => '5991',
            'sawah' => '331',
        ]);

        DB::table('kalsel')->insert([
            'tahun' => '2014',
            'budidayalaut' => '2706',
            'tambak' => '27177',
            'kolam' => '41668',
            'keramba' => '34806',
            'jaringapung' => '8681',
            'sawah' => '730',
        ]);

        DB::table('kalsel')->insert([
            'tahun' => '2015',
            'budidayalaut' => '486',
            'tambak' => '33954',
            'kolam' => '54180',
            'keramba' => '28920',
            'jaringapung' => '7835',
            'sawah' => '665',
        ]);
    }
}
