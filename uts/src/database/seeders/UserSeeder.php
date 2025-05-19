<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin user
        if (!User::where('email', 'admin@gymzone.com')->exists()) {
            $admin = User::create([
                'name' => 'Admin GymZone',
                'phone' => '081234567890',
                 'address' => 'Jl. Anggrek No. 1',
                'email' => 'admin@gymzone.com',
                'password' => Hash::make('password123'),
            ]);

            $admin->assignRole('super_admin');
        }

        // Sample member users
        $members = [
            [
                'name' => 'John Doe',
                'phone' => '081234567891',
                'address' => 'Jl. GymZone No. 123',
                'email' => 'john@example.com',
                'password' => Hash::make('member123'),
            ],
            [
                'name' => 'Jane Smith',
                'phone' => '081234567892',
                 'address' => 'Jl. Anggrek No. 1',
                'email' => 'jane@example.com',
                'password' => Hash::make('member123'),
            ],
        ];

        foreach ($members as $memberData) {
            if (!User::where('email', $memberData['email'])->exists()) {
                User::create($memberData);
            }
        }
    }
}
