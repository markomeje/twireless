<?php

namespace Database\Seeders;
use App\Models\Package;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
            ['name' => 'Home Package', 'devices' => '1 - 4', 'speed' => 7, 'price' => 15000, 'setup_fee' => 85000, 'duration' => 30, 'period' => 'monthly'],
            ['name' => 'Business Mini', 'devices' => '4 - 8', 'speed' => 15, 'price' => 31000, 'setup_fee' => 85000, 'duration' => 30, 'period' => 'monthly'],
            ['name' => 'Business Pro', 'devices' => '9 - 12', 'speed' => 20, 'price' => 50000, 'setup_fee' => 85000, 'duration' => 30, 'period' => 'monthly'],
            ['name' => 'Jumbo Package', 'devices' => '1 - 5', 'speed' => 10, 'price' => 25000, 'setup_fee' => 40000, 'duration' => 30, 'period' => 'monthly'],
        ];

        Package::truncate();
        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
