<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'title' => 'Super Admin',
                'level' => '1'
            ],
            [
                'title' => 'Admin',
                'level' => '2'
            ],
            [
                'title' => 'Moderator',
                'level' => '3'
            ],
            [
                'title' => 'Editor',
                'level' => '4'
            ],
            [
                'title' => 'User',
                'level' => '5'
            ],
        ];

        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->title = $role['title'];
            $newRole->level = $role['level'];
            $newRole->save();
        }
    }
}
