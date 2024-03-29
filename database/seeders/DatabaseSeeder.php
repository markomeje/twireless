<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            StateSeeder::class,
            CustomerSeeder::class,
            PackageSeeder::class,
            BundleSeeder::class,
            SectorSeeder::class,
            SubscriptionSeeder::class,
        ]);
    }
}
