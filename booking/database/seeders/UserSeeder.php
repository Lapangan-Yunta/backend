<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();

        for($i = 0 ; $i <=15 ; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'role' => 'user',
                'otp' => rand(111111,999999),
                'access' => 'yes',
                'password' => bcrypt(rand(000000, 99999999999))
            ]);
        }

      
    }
}
