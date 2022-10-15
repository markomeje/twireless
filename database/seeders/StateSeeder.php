<?php

namespace Database\Seeders;
use App\Models\State;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Hash;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = ['Enugu', 'Port Harcourt', 'Anambra', 'Lagos'];

        State::truncate();
        foreach ($states as $state) {
            State::create([
                'name' => $state
            ]);
        }
    }
}
