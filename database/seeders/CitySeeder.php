<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $name = $faker->name();
        DB::table("city")->insert([
            "city_name_en" => $name,
            "city_name_en" => $name,
        ]);
    }
}
