<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin Utama
        User::updateOrCreate(
            ['email' => 'admin@takoyakinusantara.com'],
            [
                'name' => 'Administrator Takoyaki',
                'password' => Hash::make('PasswordAdmin123'),
            ]
        );

        // Admin Operasional/Manager (Opsional)
        User::updateOrCreate(
            ['email' => 'manager@takoyakinusantara.com'],
            [
                'name' => 'Manager Operasional',
                'password' => Hash::make('ManagerTakoyaki123'),
            ]
        );
    }
}