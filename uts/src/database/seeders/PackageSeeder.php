<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function run()
    {
        $packages = [
            [
                'name' => 'Basic',
                'duration_days' => 30,
                'price' => 300000,
                'is_active' => true,
            ],
            [
                'name' => 'Standard',
                'duration_days' => 90,
                'price' => 800000,
                'is_active' => true,
            ],
            [
                'name' => 'Premium',
                'duration_days' => 365,
                'price' => 2500000,
                'is_active' => true,
            ],
        ];

        foreach ($packages as $package) {
            Package::firstOrCreate(
                ['name' => $package['name']],
                $package
            );
        }
    }
}