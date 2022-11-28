<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscription::truncate();
        Subscription::factory()->count(124)->create();
    }

}
