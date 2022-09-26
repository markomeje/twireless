<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = [
            ['phone' => $faker->phoneNumber(), 'email' => 'admin@admin.io', 'role' => 'admin', 'password' => Hash::make('1234'), 'verified' => true, 'status' => 'active'],
            ['phone' => $faker->phoneNumber(), 'email' => 'customer@customer.io', 'role' => 'customer', 'password' => Hash::make('1234'), 'verified' => true, 'status' => 'active'],
        ];

        User::truncate();
        User::factory()->count(312)->create();
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
