<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'name' => 'Docente',
        ]);

        DB::table('jobs')->insert([
            'name' => 'Secretario Administrativo',
        ]);

        DB::table('jobs')->insert([
            'name' => 'Administrador',
        ]);
    }
}
