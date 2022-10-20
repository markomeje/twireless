<?php

namespace Database\Seeders;
use App\Models\Bundle;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Hash;

class BundleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bundles = [
            ['size' => 75, 'price' => 15000],
            ['size' => 100, 'price' => 20000],
            ['size' => 125, 'price' => 25000],
            ['size' => 250, 'price' => 50000],
        ];

        Bundle::truncate();
        foreach ($bundles as $bundle) {
            Bundle::create([
                'size' => $bundle['size'],
                'price' => $bundle['price'],
            ]);
        }
    }
}
