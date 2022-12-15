<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsuranceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('insurance_type')->truncate();
        DB::table("insurance_type")->insert([
            [
                "insurance_type_name_en" => 'Household Basic',
                "insurance_type_name_sw" => 'Household Basic',
            ],
            [
                "insurance_type_name_en" => 'Household Premium',
                "insurance_type_name_sw" => 'Household Premium',
            ],
        ]);
    }
}
