<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            UserDetailTableSeeder::class,
            DifficultyTableSeeder::class,
            TypesTableSeeder::class,
            ProjectsTableSeeder::class,
            TechnologiesTableSeeder::class,
            ProjectTechnologyTableSeeder::class
        ]);
    }
}
