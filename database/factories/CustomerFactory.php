<?php

namespace Database\Factories;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{Customer, User, State};

class CustomerFactory extends Factory
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
            'contact_name' => $faker->name(),
            'user_id' => rand(1, User::count()),
            'company_name' => $faker->company(),
            'state_id' => rand(1, State::count()),
            'address' => $faker->address(),
            'designation' => $faker->randomElement(Customer::$designations),
            'status' => 'active',
        ];
    }

}
