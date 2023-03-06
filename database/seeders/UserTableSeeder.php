<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $myUser = new User();
        $myUser->name = 'Donato Montrone';
        $myUser->email = 'gamblerid@aol.com';
        $myUser->password = Hash::make('12345678');
        $myUser->api_token = Str::random(60);
        $myUser->save();

        for ($i = 0; $i < 20; $i++) {
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->unique()->email();
            $newUser->password = Hash::make($faker->password());
            $newUser->api_token = Str::random(60);
            $newUser->save();
        }
    }
}
