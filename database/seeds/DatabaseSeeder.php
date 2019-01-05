<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JawaSeeder::class);
        $this->call(SumateraSeeder::class);
        $this->call(SulawesiSeeder::class);
        $this->call(PapuaSeeder::class);
        $this->call(KalimantanSeeder::class);
        $this->call(JakartaSeeder::class);
    }
}
