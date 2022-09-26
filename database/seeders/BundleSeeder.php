<?php

namespace Database\Seeders;
use App\Models\State;
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
        $bundles = ['Big Data', 'Mini Data', 'Mega Data', 'Super Data'];
        Bundle::truncate();
        foreach ($bundles as $state) {
            Bundle::create([
                'name' => $state
            ]);
        }
    }
}
