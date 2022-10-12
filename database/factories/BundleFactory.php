<?php

namespace Database\Factories;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class BundleFactory extends Factory
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
            'price' => $faker->numberBetween(10000, 45000),
            'size' => $faker->numberBetween(50, 300),
            'duration' => $faker->numberBetween(14, 30),
        ];
    }

}
