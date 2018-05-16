<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Electrónica y computación',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quibusdam facilis atque autem libero veritatis ab natus at nisi eligendi aperiam illo, optio inventore accusantium eum omnis illum quae itaque.',
            'university_id' => 2,
        ]);

        DB::table('departments')->insert([
            'name' => 'Industriales',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quibusdam facilis atque autem libero veritatis ab natus at nisi eligendi aperiam illo, optio inventore accusantium eum omnis illum quae itaque.',
            'university_id' => 2,
        ]);

        DB::table('departments')->insert([
            'name' => 'Depto. Administración',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quibusdam facilis atque autem libero veritatis ab natus at nisi eligendi aperiam illo, optio inventore accusantium eum omnis illum quae itaque.',
            'university_id' => 1,
        ]);

        DB::table('departments')->insert([
            'name' => 'Depto. Recursos Humanos',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quibusdam facilis atque autem libero veritatis ab natus at nisi eligendi aperiam illo, optio inventore accusantium eum omnis illum quae itaque.',
            'university_id' => 1,
        ]);

        DB::table('departments')->insert([
            'name' => 'Depto. Medicina',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quibusdam facilis atque autem libero veritatis ab natus at nisi eligendi aperiam illo, optio inventore accusantium eum omnis illum quae itaque.',
            'university_id' => 3,
        ]);

        DB::table('departments')->insert([
            'name' => 'Depto. Deportes',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quibusdam facilis atque autem libero veritatis ab natus at nisi eligendi aperiam illo, optio inventore accusantium eum omnis illum quae itaque.',
            'university_id' => 3,
        ]);
    }
}
