<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	'user_id' => 1,
            'career_id' => 1,
        ]);

        DB::table('students')->insert([
        	'user_id' => 2,
            'career_id' => 1,
        ]);

        DB::table('students')->insert([
        	'user_id' => 3,
            'career_id' => 3,
        ]);

        DB::table('students')->insert([
        	'user_id' => 4,
            'career_id' => 3,
        ]);

        DB::table('students')->insert([
        	'user_id' => 1,
            'career_id' => 4,
        ]);
    }
}
