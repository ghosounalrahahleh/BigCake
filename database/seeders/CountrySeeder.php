<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            "name" => "jordan",
            "shipping_company" => "LOCAL",
        ]);

        Country::create([
            "name" => "america",
            "shipping_company" => "ARAMEX",
        ]);
        
        Country::create([
            "name" => "italy",
            "shipping_company" => "ARAMEX",
        ]);

        Country::create([
            "name" => "south_africa",
            "shipping_company" => "DHL",
        ]);

        Country::create([
            "name" => "japan",
            "shipping_company" => "DHL",
        ]);
    }
}
