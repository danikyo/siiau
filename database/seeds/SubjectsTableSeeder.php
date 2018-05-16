<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => 'Programación',
            'credits' => 8,
            'university_id' => 2,
        ]);

        DB::table('subjects')->insert([
            'name' => 'Bases de datos',
            'credits' => 7,
            'university_id' => 2,
        ]);

        DB::table('subjects')->insert([
            'name' => 'Inteligencia artificial',
            'credits' => 8,
            'university_id' => 2,
        ]);

        DB::table('subjects')->insert([
            'name' => 'Administración',
            'credits' => 6,
            'university_id' => 1,
        ]);

        DB::table('subjects')->insert([
            'name' => 'Contaduría',
            'credits' => 8,
            'university_id' => 1,
        ]);

        DB::table('subjects')->insert([
            'name' => 'Economía',
            'credits' => 7,
            'university_id' => 1,
        ]);

        DB::table('subjects')->insert([
            'name' => 'Medicinas I',
            'credits' => 7,
            'university_id' => 3,
        ]);

        DB::table('subjects')->insert([
            'name' => 'Anestecia',
            'credits' => 9,
            'university_id' => 3,
        ]);

        DB::table('subjects')->insert([
            'name' => 'Biología',
            'credits' => 8,
            'university_id' => 3,
        ]);
    }
}
