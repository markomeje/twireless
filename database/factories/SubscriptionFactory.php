<?php

namespace Database\Factories;
use App\Models\{Customer, Sector, Package};
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'customer_id' => rand(1, Customer::count()),
            'sector_id' => rand(1, Sector::count()),
            'plan_id' => $faker->randomElement(Package::all()->pluck('id')->toArray()),
            'plan' => 'package',
            'antenna' => $faker->randomNumber($nbDigits = 9),
            'router' => $faker->ipv4(),
            'polewire_length' => $faker->randomNumber($nbDigits = 5),
            'coordinate' => rand(12000, 90888),
            'status' => 'initialized',
        ];
    }
}
