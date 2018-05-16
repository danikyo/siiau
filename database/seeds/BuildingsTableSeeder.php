<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([
        	'name' => 'Edificio X',
            'university_id' => 2,
        ]);

        DB::table('buildings')->insert([
        	'name' => 'Edificio Y',
            'university_id' => 2,
        ]);

        DB::table('buildings')->insert([
        	'name' => 'Edificio G',
            'university_id' => 1,
        ]);

        DB::table('buildings')->insert([
        	'name' => 'Edificio E',
            'university_id' => 1,
        ]);

        DB::table('buildings')->insert([
        	'name' => 'Edificio P',
            'university_id' => 3,
        ]);

        DB::table('buildings')->insert([
        	'name' => 'Edificio P',
            'university_id' => 3,
        ]);
    }
}
