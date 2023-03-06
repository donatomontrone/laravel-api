<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $userList = User::all();

        foreach ($userList as $user) {
            $newDetail = new UserDetail();
            $newDetail->user_id = $user->id;
            $newDetail->status = 'Offline';
            $newDetail->profile_image = $faker->imageUrl();
            $newDetail->save();
        }
    }
}
