<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
            InsuranceCoverage::class
        ]);

        // \App\Models\User::factory(10)->create();
        // \App\Models\City::factory(10)->create();
        // \App\Models\UserProfile::factory(1)->create();
        // \App\Models\Quote::factory(10)->create();
        // \App\Models\InsuranceCoverage::factory(2)->create();
    }
}
