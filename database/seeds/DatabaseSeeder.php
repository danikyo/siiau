<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        UsersTableSeeder::class,
        UniversitiesTableSeeder::class,
        SubjectsTableSeeder::class,
        JobsTableSeeder::class,
        DepartmentsTableSeeder::class,
        TeachersTableSeeder::class,
        CareersTableSeeder::class,
        StudentsTableSeeder::class,
        BuildingsTableSeeder::class,
        ClassroomsTableSeeder::class,
        SectionsTableSeeder::class,
    ]);
    }
}
