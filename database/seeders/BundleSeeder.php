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
        Bundle::truncate();
        Bundle::factory()->count(143)->create();
    }
}
