<?php

use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
        	'name' => 'Aula 15',
            'building_id' => 1,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 20',
            'building_id' => 1,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 5',
            'building_id' => 2,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 1',
            'building_id' => 2,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 150',
            'building_id' => 3,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 151',
            'building_id' => 3,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 40',
            'building_id' => 4,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 41',
            'building_id' => 4,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 6',
            'building_id' => 5,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 7',
            'building_id' => 5,
        ]);

        DB::table('classrooms')->insert([
        	'name' => 'Aula 100',
            'building_id' => 6,
        ]);
    }
}
