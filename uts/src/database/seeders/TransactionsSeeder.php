<?php

namespace Database\Seeders;

use App\Models\Transactions;
use App\Models\User;
use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::inRandomOrder()->take(5)->get();
        $packages = Package::inRandomOrder()->get();

        foreach ($users as $user) {
            foreach ($packages->random(2) as $package) {
                Transactions::create([
                    'user_id' => $user->id,
                    'package_id' => $package->id,
                    'transaction_date' => now()->subDays(rand(1, 30))->format('Y-m-d'),
                    'amount' => $package->price,
                    'payment_method' => collect(['cash', 'transfer', 'qris', 'other'])->random(),
                    'status' => collect(['pending', 'paid', 'failed'])->random(),
                    'notes' => Str::random(20),
                ]);
            }
        }
    }
}
