<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->call([
            CitySeeder::class,
            InsuranceTypeSeeder::class,
            PlanSeeder::class,
            ProductSeeder::class,
            TermConditionSeeder::class,
        ]);
    }
}
