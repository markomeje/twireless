<?php

namespace Database\Seeders;
use App\Models\State;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Hash;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            ['name' => 'Unlimited Fixed Wireless Internet Package', 'type' => 'fixed'],
            ['name' => 'Quota Package', 'type' => 'quota'],
            ['name' => 'Event Package', 'type' => 'event'],
            ['name' => 'Unlimited Dedicated Speed Package', 'type' => 'dedicated'],
        ]

        Package::truncate();
        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
