<?php

use Illuminate\Database\Seeder;

class PapuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('papua')->insert([
            'tahun' => '2013',
            'budidayalaut' => '146',
            'tambak' => '1624',
            'kolam' => '6784',
            'keramba' => '0',
            'jaringapung' => '583',
            'sawah' => '0'

        ]);

        DB::table('papua')->insert([
            'tahun' => '2014',
            'budidayalaut' => '51',
            'tambak' => '1209',
            'kolam' => '8552',
            'keramba' => '0',
            'jaringapung' => '731',
            'sawah' => '0'

        ]);

        DB::table('papua')->insert([
            'tahun' => '2015',
            'budidayalaut' => '155',
            'tambak' => '1548',
            'kolam' => '7834',
            'keramba' => '0',
            'jaringapung' => '1518',
            'sawah' => '0'

        ]);

        DB::table('papuabar')->insert([
            'tahun' => '2013',
            'budidayalaut' => '75565',
            'tambak' => '110',
            'kolam' => '1717',
            'keramba' => '0',
            'jaringapung' => '3',
            'sawah' => '0'

        ]);

        DB::table('papuabar')->insert([
            'tahun' => '2014',
            'budidayalaut' => '57760',
            'tambak' => '2988',
            'kolam' => '1777',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0'

        ]);

        DB::table('papuabar')->insert([
            'tahun' => '2015',
            'budidayalaut' => '37847',
            'tambak' => '441',
            'kolam' => '1784',
            'keramba' => '0',
            'jaringapung' => '7',
            'sawah' => '0'

        ]);
    }
}
