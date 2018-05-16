<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('users')->insert([
            'name' => 'Daniel Mitchel',
            'curp' => 'examplecurp123',
            'status' => true,
            'email' => 'example@gmail.com',
            'username' => '210676851',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gerardo Mendez',
            'curp' => 'examplecurp234',
            'status' => true,
            'email' => 'example2@gmail.com',
            'username' => '200000000',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mauricio Gonzalez',
            'curp' => 'examplecurp456',
            'status' => true,
            'email' => 'example3@gmail.com',
            'username' => '300000000',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Tatiana Fatima Perez',
            'curp' => 'examplecurp012',
            'status' => true,
            'email' => 'example4@gmail.com',
            'username' => '400000000',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alejandra Gonzalez',
            'curp' => 'examplecurp555',
            'status' => true,
            'email' => 'example5@gmail.com',
            'username' => '500000000',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Guillermo del Toro',
            'curp' => 'examplecurp666',
            'status' => true,
            'email' => 'example6@gmail.com',
            'username' => '600000000',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mario Castañeda',
            'curp' => 'examplecurp777',
            'status' => true,
            'email' => 'example7@gmail.com',
            'username' => '700000000',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Karla Lopez',
            'curp' => 'examplecurp999',
            'status' => true,
            'email' => 'example8@gmail.com',
            'username' => '800000000',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Hansel Benavides',
            'curp' => 'examplecurp999',
            'status' => true,
            'email' => 'example9@gmail.com',
            'username' => '900000000',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dan Rodriguez',
            'curp' => 'examplecurp000',
            'status' => true,
            'email' => 'example10@gmail.com',
            'username' => '110000000',
            'password' => bcrypt('secret'),
        ]);
    }
}
