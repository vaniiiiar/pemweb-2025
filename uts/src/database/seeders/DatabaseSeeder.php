<?php

namespace Database\Seeders;

use App\Policies\RolePolicy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            PackageSeeder::class,
            UserSeeder::class,
            MembershipSeeder::class,
            TransactionsSeeder::class,
            FooterSeeder::class,
            LogoSeeder::class,
            PageConfigSeeder::class,
            SeoSeeder::class,
        ]);
    }
}