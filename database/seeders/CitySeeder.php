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

        DB::table('city')->truncate();
        DB::table("city")->insert([
            [
                "city_name_en" => 'Mumbai',
                "city_name_sw" => 'Mumbai Sw',
            ],
            [
                "city_name_en" => 'Delhi',
                "city_name_sw" => 'Delhi Sw',
            ],
            [
                "city_name_en" => 'Chennai',
                "city_name_sw" => 'Chennai Sw',
            ],
            [
                "city_name_en" => 'Ahmedabad',
                "city_name_sw" => 'Ahmedabad Sw',
            ],
            [
                "city_name_en" => 'Bengaluru',
                "city_name_sw" => 'Bengaluru Sw',
            ],
        ]);
    }
}
