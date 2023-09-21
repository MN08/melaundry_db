<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Anita',
                'username' => 'anita',
                'email' => 'anita@joyalab.com',
                'password' => Hash::make('password08'),
            ],
            [
                'name' => 'Nurhuda',
                'username' => 'nurhuda',
                'email' => 'nurhuda@joyalab.com',
                'password' => Hash::make('password08'),
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
