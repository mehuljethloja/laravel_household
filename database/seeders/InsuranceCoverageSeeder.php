<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InsuranceCoverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\InsuranceCoverage::factory(2)->create();
    }
}
