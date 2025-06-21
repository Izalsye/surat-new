<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // password terenkripsi
            'avatar' => 'default-avatar.png', // bisa disesuaikan sesuai kebutuhan
            'sub_jabatan' => 'Administrator',
            'remember_token' => Str::random(10),
        ]);

        // Contoh User kedua
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('userpassword'),
            'avatar' => 'default-avatar.png',
            'sub_jabatan' => 'Staff',
            'remember_token' => Str::random(10),
        ]);
    }
}
