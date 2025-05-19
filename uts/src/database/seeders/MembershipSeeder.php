<?php

// database/seeders/MembershipSeeder.php
namespace Database\Seeders;

use App\Models\Membership;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    public function run()
    {
        $users = User::where('email', '!=', 'admin@gymzone.com')->get();
        $statuses = ['active', 'inactive', 'expired'];

        foreach ($users as $user) {
            $startDate = Carbon::now()->subDays(rand(0, 60));
            
            Membership::create([
                'user_id' => $user->id,
                'package_id' => rand(1, 3),
                'start_date' => $startDate,
                'end_date' => $startDate->copy()->addDays(rand(30, 365)),
                'status' => $statuses[array_rand($statuses)],
            ]);
        }
    }
}