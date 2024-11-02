<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Admin',
            'email' => 'bongdorn11@email.com',
            'password' => Hash::make('bongdorn11@'), // Remember to hash passwords
            'usertype' => 'admin', // Optional if you have usertypes
        ]);

        // Create a regular user
        User::create([
            'name' => 'kimseng',
            'email' => 'kimseng@email.com',
            'password' => Hash::make('kimseng@'),
            'usertype' => 'admin', // Optional if you have usertypes
        ]);
        // Create a regular user
        User::create([
            'name' => 'seyha',
            'email' => 'seyha@email.com',
            'password' => Hash::make('seyha@'),
            'usertype' => 'admin', // Optional if you have usertypes
        ]);

        // You can add more users as needed
        User::create([
            'name' => 'Test User',
            'email' => 'user1@email.com',
            'password' => Hash::make('user1@'),
            'usertype' => 'user', // Optional if you have usertypes
        ]);
    }
}
