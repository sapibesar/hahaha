<?php

use Illuminate\Database\Seeder;

class SumateraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aceh')->insert([
        'tahun' => '2013',
        'budidayalaut' => '84',
        'tambak' => '32940',
        'kolam' => '12752',
        'keramba' => '20',
        'jaringapung' => '480',
        'sawah' => '934',
        ]);

        DB::table('aceh')->insert([
            'tahun' => '2014',
            'budidayalaut' => '109',
            'tambak' => '37721',
            'kolam' => '18931',
            'keramba' => '0',
            'jaringapung' => '240',
            'sawah' => '1150',
        ]);

        DB::table('aceh')->insert([
            'tahun' => '2015',
            'budidayalaut' => '158',
            'tambak' => '42223',
            'kolam' => '18614',
            'keramba' => '0',
            'jaringapung' => '300',
            'sawah' => '1988',
        ]);

        DB::table('sumut')->insert([
            'tahun' => '2013',
            'budidayalaut' => '4348',
            'tambak' => '35506',
            'kolam' => '60042',
            'keramba' => '503',
            'jaringapung' => '51035',
            'sawah' => '10204',
        ]);

        DB::table('sumut')->insert([
            'tahun' => '2014',
            'budidayalaut' => '4350',
            'tambak' => '29345',
            'kolam' => '64213',
            'keramba' => '538',
            'jaringapung' => '83154',
            'sawah' => '9152',
        ]);

        DB::table('sumut')->insert([
            'tahun' => '2015',
            'budidayalaut' => '4363',
            'tambak' => '29496',
            'kolam' => '64205',
            'keramba' => '1628',
            'jaringapung' => '72195',
            'sawah' => '8744',
        ]);

        DB::table('sumbar')->insert([
            'tahun' => '2013',
            'budidayalaut' => '60',
            'tambak' => '179',
            'kolam' => '147832',
            'keramba' => '5602',
            'jaringapung' => '45123',
            'sawah' => '7800',
        ]);

        DB::table('sumbar')->insert([
            'tahun' => '2014',
            'budidayalaut' => '13',
            'tambak' => '297',
            'kolam' => '198514',
            'keramba' => '6034',
            'jaringapung' => '49483',
            'sawah' => '7984',
        ]);

        DB::table('sumbar')->insert([
            'tahun' => '2015',
            'budidayalaut' => '79',
            'tambak' => '332',
            'kolam' => '197054',
            'keramba' => '5898',
            'jaringapung' => '73526',
            'sawah' => '8688',
        ]);

        DB::table('riau')->insert([
            'tahun' => '2013',
            'budidayalaut' => '5',
            'tambak' => '329',
            'kolam' => '45284',
            'keramba' => '5324',
            'jaringapung' => '23401',
            'sawah' => '0',
        ]);

        DB::table('riau')->insert([
            'tahun' => '2014',
            'budidayalaut' => '401',
            'tambak' => '311',
            'kolam' => '54561',
            'keramba' => '5557',
            'jaringapung' => '25152',
            'sawah' => '3',
        ]);

        DB::table('riau')->insert([
            'tahun' => '2015',
            'budidayalaut' => '619',
            'tambak' => '135',
            'kolam' => '55709',
            'keramba' => '5380',
            'jaringapung' => '25315',
            'sawah' => '3',
        ]);

        DB::table('bengkulu')->insert([
            'tahun' => '2013',
            'budidayalaut' => '779',
            'tambak' => '761',
            'kolam' => '1399',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0',
        ]);

        DB::table('bengkulu')->insert([
            'tahun' => '2014',
            'budidayalaut' => '24',
            'tambak' => '4767',
            'kolam' => '46012',
            'keramba' => '1177',
            'jaringapung' => '3202',
            'sawah' => '5501',
        ]);

        DB::table('bengkulu')->insert([
            'tahun' => '2015',
            'budidayalaut' => '1',
            'tambak' => '7548',
            'kolam' => '55635',
            'keramba' => '1657',
            'jaringapung' => '2509',
            'sawah' => '5254',
        ]);

        DB::table('lampung')->insert([
            'tahun' => '2013',
            'budidayalaut' => '15927',
            'tambak' => '91',
            'kolam' => '13366',
            'keramba' => '0',
            'jaringapung' => '0',
            'sawah' => '0',
        ]);

        DB::table('lampung')->insert([
            'tahun' => '2014',
            'budidayalaut' => '6775',
            'tambak' => '71064',
            'kolam' => '70089',
            'keramba' => '636',
            'jaringapung' => '3698',
            'sawah' => '48',
        ]);

        DB::table('lampung')->insert([
            'tahun' => '2015',
            'budidayalaut' => '4440',
            'tambak' => '53076',
            'kolam' => '55350',
            'keramba' => '476',
            'jaringapung' => '3385',
            'sawah' => '48',
        ]);
    }
}
