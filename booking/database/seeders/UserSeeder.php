<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            User::create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '12345678',
                'role' => 'admin',
                'otp' => rand(111111,999999),
                'access' => 'yes',
                'password' => bcrypt('password'),
            ]);
        
      
    }
}
