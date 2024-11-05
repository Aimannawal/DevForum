<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Aiman',
            'email' => 'aiman@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Abi',
            'email' => 'abi@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 1,
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 1,
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 0,
        ]);
    }
}
