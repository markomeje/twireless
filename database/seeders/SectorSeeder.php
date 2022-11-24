<?php

namespace Database\Seeders;
use App\Models\Sector;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Hash;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Sectors = [
            'Flfm sector 1 - 19',
            'Flfm sector 2 - 20',

            'Solid FM sector 1- 7',
            'Solid FM sector 2- 8',
            'Solid FM sector 3 - 9',
            'Universal hotel' ,
            'Universal hotel 1 - 12',
            'Universal hotel 3 - 14',

            'Grand riviera 1 - 152',
            'Grand riviera 2 - 153',
            'Mic Abakpa',
            'Mic Abakpa 1 - 202',

            'Base Mod - 2',
            'Base NH - 3',
            'Base Nl - 4',
        ];

        Sector::truncate();
        foreach ($Sectors as $sector) {
            Sector::create([
                'name' => $sector
            ]);
        }
    }
}
