<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'User1', 'email' => 'user1@example.com', 'password' => Hash::make('password'), 'country' => 'Nigeria'],
            ['name' => 'User2', 'email' => 'user2@example.com', 'password' => Hash::make('password'), 'country' => 'Ghana'],
            ['name' => 'User3', 'email' => 'user3@example.com', 'password' => Hash::make('password'), 'country' => 'United States'],
            ['name' => 'User4', 'email' => 'user4@example.com', 'password' => Hash::make('password'), 'country' => 'Nigeria'],
            ['name' => 'User5', 'email' => 'user5@example.com', 'password' => Hash::make('password'), 'country' => 'Ghana'],
        ]);
    }
}
