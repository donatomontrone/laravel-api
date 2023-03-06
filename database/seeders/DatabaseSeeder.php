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
            DifficultyTableSeeder::class,
            TechnologiesTableSeeder::class,
            TypesTableSeeder::class,
            RolesTableSeeder::class,
            UserTableSeeder::class,
            RolesUsersTableSeeder::class,
            UserDetailTableSeeder::class,
            ProjectsTableSeeder::class,
            ProjectTechnologyTableSeeder::class
        ]);
    }
}
