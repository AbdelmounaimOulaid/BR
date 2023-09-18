<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'Admin User',
            'email' => 'admin@gmail.com',
            'isAdmin' => 1,
            'country' => '123',
            'city' => '123',
            'state' => '123',
            'address' =>'123',
            'zip' => '123',
            'password' => Hash::make('Omar@123'), // Hashed password
        ]);
    }
}
