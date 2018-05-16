<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
        	'name' => 'Ingeniería en informática',
            'department_id' => 1,
        ]);

        DB::table('careers')->insert([
        	'name' => 'Licenciatura en Matemáticas',
            'department_id' => 2,
        ]);

        DB::table('careers')->insert([
        	'name' => 'Economía',
            'department_id' => 4,
        ]);

        DB::table('careers')->insert([
        	'name' => 'Medicina',
            'department_id' => 5,
        ]);
    }
}
