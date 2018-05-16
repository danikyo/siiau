<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
        	'name' => 'D01',
            'start' => '2018-08-10',
            'end' => '2018-12-10',
            'time' => '11:00:00',
            'spaces' => 20,
            'subject_id' => 1,
            'university_id' => 2,
            'teacher_id' => 1,
            'classroom_id' => 1,
        ]);
    }
}
