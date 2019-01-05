<?php

use Illuminate\Database\Seeder;

class SulawesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ntt')->insert([
            'tahun' => '2013',
            'budidayalaut' => '1846350',
            'tambak' => '1586',
            'kolam' => '1493',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '44'

        ]);
        DB::table('ntt')->insert([
            'tahun' => '2014',
            'budidayalaut' => '1966260',
            'tambak' => '1902',
            'kolam' => '1853',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '94'

        ]);

        DB::table('ntt')->insert([
            'tahun' => '2015',
            'budidayalaut' => '2283347',
            'tambak' => '3575',
            'kolam' => '1789',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '894'

        ]);

        DB::table('ntb')->insert([
            'tahun' => '2013',
            'budidayalaut' => '599742',
            'tambak' => '97839',
            'kolam' => '17761',
            'keramba' => '1543',
            'jaringapung' => '1537',
            'sawah' => '936'

        ]);

        DB::table('ntb')->insert([
            'tahun' => '2014',
            'budidayalaut' => '749659',
            'tambak' => '111554',
            'kolam' => '21812',
            'keramba' => '1449',
            'jaringapung' => '2290',
            'sawah' => '617'

        ]);

        DB::table('ntb')->insert([
            'tahun' => '2015',
            'budidayalaut' => '921540',
            'tambak' => '120993',
            'kolam' => '21004',
            'keramba' => '1665',
            'jaringapung' => '846',
            'sawah' => '874'

        ]);

        DB::table('sulut')->insert([
            'tahun' => '2013',
            'budidayalaut' => '174052',
            'tambak' => '10451',
            'kolam' => '81762',
            'keramba' => '343',
            'jaringapung' => '39902',
            'sawah' => '16353',
        ]);

        DB::table('sulut')->insert([
            'tahun' => '2014',
            'budidayalaut' => '301876',
            'tambak' => '668',
            'kolam' => '72641',
            'keramba' => '345',
            'jaringapung' => '36708',
            'sawah' => '17304',
        ]);

        DB::table('sulut')->insert([
            'tahun' => '2015',
            'budidayalaut' => '339578',
            'tambak' => '703',
            'kolam' => '68598',
            'keramba' => '300',
            'jaringapung' => '54661',
            'sawah' => '13056',
        ]);






        DB::table('sulteng')->insert([
            'tahun' => '2013',
            'budidayalaut' => '1234021',
            'tambak' => '83215',
            'kolam' => '6546',
            'keramba' => '9',
            'jaringapung' => '630',
            'sawah' => '25',
        ]);

        DB::table('sulteng')->insert([
            'tahun' => '2014',
            'budidayalaut' => '1137589',
            'tambak' => '73733',
            'kolam' => '6460',
            'keramba' => '38',
            'jaringapung' => '91',
            'sawah' => '17',
        ]);

        DB::table('sulteng')->insert([
            'tahun' => '2015',
            'budidayalaut' => '1274906',
            'tambak' => '113202',
            'kolam' => '8040',
            'keramba' => '25',
            'jaringapung' => '58',
            'sawah' => '17',
        ]);






        DB::table('sulsel')->insert([
            'tahun' => '2013',
            'budidayalaut' => '1661417',
            'tambak' => '918645',
            'kolam' => '8222',
            'keramba' => '364',
            'jaringapung' => '375',
            'sawah' => '3114',
        ]);

        DB::table('sulsel')->insert([
            'tahun' => '2014',
            'budidayalaut' => '2087873',
            'tambak' => '1001214',
            'kolam' => '8780',
            'keramba' => '282',
            'jaringapung' => '0',
            'sawah' => '5285',
        ]);

        DB::table('sulsel')->insert([
            'tahun' => '2015',
            'budidayalaut' => '2411918',
            'tambak' => '1052493',
            'kolam' => '9308',
            'keramba' => '352',
            'jaringapung' => '0',
            'sawah' => '5350',
        ]);





        DB::table('sultenggara')->insert([
            'tahun' => '2013',
            'budidayalaut' => '918245',
            'tambak' => '86506',
            'kolam' => '6176',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0',
        ]);

        DB::table('sultenggara')->insert([
            'tahun' => '2014',
            'budidayalaut' => '956495',
            'tambak' => '75954',
            'kolam' => '4967',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0',
        ]);

        DB::table('sultenggara')->insert([
            'tahun' => '2015',
            'budidayalaut' => '916313',
            'tambak' => '74888',
            'kolam' => '2855',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0',
        ]);
    }
}
