<?php

namespace Database\Factories;
use App\Models\{Payment, User, Currency};
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
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
            'price' => $faker->numberBetween(1000, 9500),
            'speed' => $faker->numberBetween(5, 15),
            'bandwidth' => 'Unlimited',
            'size' => $faker->numberBetween(50, 250),
            'type' => $faker->randomElement(Plan::$types),
            'connections' => rand(1, User::count()),
            'monthly' => $faker->boolean(60),
            'duration' => 30,
            'active' => true,
        ];
    }
}
