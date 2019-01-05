<?php

use Illuminate\Database\Seeder;

class JawaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('jabar')->insert([
            'tahun' => '2013',
            'budidayalaut' => '1528',
            'tambak' => '338439',
            'kolam' => '424231',
            'keramba' => '286',
            'jaringapung' => '179018',
            'sawah' => '27065'

        ]);

        DB::table('jabar')->insert([
            'tahun' => '2014',
            'budidayalaut' => '1015',
            'tambak' => '310481',
            'kolam' => '478758',
            'keramba' => '227',
            'jaringapung' => '185005',
            'sawah' => '30532'

        ]);

        DB::table('jabar')->insert([
            'tahun' => '2015',
            'budidayalaut' => '3964',
            'tambak' => '320278',
            'kolam' => '517622',
            'keramba' => '233',
            'jaringapung' => '198984',
            'sawah' => '34179'

        ]);

        DB::table('jateng')->insert([
            'tahun' => '2013',
            'budidayalaut' => '14211',
            'tambak' => '188407',
            'kolam' => '160987',
            'keramba' => '984',
            'jaringapung' => '28701',
            'sawah' => '3817'

        ]);

        DB::table('jateng')->insert([
            'tahun' => '2014',
            'budidayalaut' => '42413',
            'tambak' => '212693',
            'kolam' => '199085',
            'keramba' => '1730',
            'jaringapung' => '41833',
            'sawah' => '4054'

        ]);

        DB::table('jateng')->insert([
            'tahun' => '2015',
            'budidayalaut' => '22785',
            'tambak' => '171485',
            'kolam' => '175914',
            'keramba' => '1154',
            'jaringapung' => '44749',
            'sawah' => '4936'

        ]);

        DB::table('jatim')->insert([
            'tahun' => '2013',
            'budidayalaut' => '580683',
            'tambak' => '177077',
            'kolam' => '217162',
            'keramba' => '345',
            'jaringapung' => '12726',
            'sawah' => '7968'

        ]);

        DB::table('jatim')->insert([
            'tahun' => '2014',
            'budidayalaut' => '601413',
            'tambak' => '191610',
            'kolam' => '192566',
            'keramba' => '591',
            'jaringapung' => '11694',
            'sawah' => '46011'

        ]);

        DB::table('jatim')->insert([
            'tahun' => '2015',
            'budidayalaut' => '615466',
            'tambak' => '206362',
            'kolam' => '210211',
            'keramba' => '1487',
            'jaringapung' => '11361',
            'sawah' => '48236'

        ]);

        DB::table('bali')->insert([
            'tahun' => '2013',
            'budidayalaut' => '146192',
            'tambak' => '3005',
            'kolam' => '7990',
            'keramba' => '0',
            'jaringapung' => '4098',
            'sawah' => '280'

        ]);

        DB::table('bali')->insert([
            'tahun' => '2014',
            'budidayalaut' => '84391',
            'tambak' => '3554',
            'kolam' => '9297',
            'keramba' => '0',
            'jaringapung' => '4359',
            'sawah' => '325'

        ]);

        DB::table('bali')->insert([
            'tahun' => '2015',
            'budidayalaut' => '107921',
            'tambak' => '3288',
            'kolam' => '6481',
            'keramba' => '0',
            'jaringapung' => '4687',
            'sawah' => '245'

        ]);

        DB::table('banten')->insert([
            'tahun' => '2013',
            'budidayalaut' => '21930',
            'tambak' => '58511',
            'kolam' => '17061',
            'keramba' => '57',
            'jaringapung' => '1118',
            'sawah' => '753'

        ]);


        DB::table('banten')->insert([
            'tahun' => '2014',
            'budidayalaut' => '25671',
            'tambak' => '60070',
            'kolam' => '18289',
            'keramba' => '57',
            'jaringapung' => '977',
            'sawah' => '571'

        ]);


        DB::table('banten')->insert([
            'tahun' => '2015',
            'budidayalaut' => '26110',
            'tambak' => '60112',
            'kolam' => '17535',
            'keramba' => '57',
            'jaringapung' => '1113',
            'sawah' => '499'

        ]);
    }
}
