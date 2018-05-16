<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'name' => 'CUCEA',
        ]);

        DB::table('universities')->insert([
            'name' => 'CUCEI',
        ]);

        DB::table('universities')->insert([
            'name' => 'CUCS',
        ]);
    }
}
