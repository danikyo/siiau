<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
        	'user_id' => 10,
            'job_id' => 1,
            'department_id' => 1,
        ]);

        DB::table('teachers')->insert([
        	'user_id' => 9,
            'job_id' => 1,
            'department_id' => 1,
        ]);

        DB::table('teachers')->insert([
        	'user_id' => 8,
            'job_id' => 3,
            'department_id' => 2,
        ]);

        DB::table('teachers')->insert([
        	'user_id' => 7,
            'job_id' => 2,
            'department_id' => 1,
        ]);

        DB::table('teachers')->insert([
        	'user_id' => 6,
            'job_id' => 1,
            'department_id' => 3,
        ]);
    }
}
