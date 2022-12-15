<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('plan')->truncate();

        DB::table("plan")->insert([
            [
                "insurance_type_id" => 1,
                "plan_name_en" => 'Combined-Coverage',
                "plan_name_sw" => 'Combined-Coverage',
            ],
            [
                "insurance_type_id" => 1,
                "plan_name_en" => 'Building Only',
                "plan_name_sw" => 'Building Only',
            ],
            [
                "insurance_type_id" => 1,
                "plan_name_en" => 'Content Only',
                "plan_name_sw" => 'Content Only',
            ],
            [
                "insurance_type_id" => 2,
                "plan_name_en" => 'Premium Coverage',
                "plan_name_sw" => 'Premium Coverage',
            ],
        ]);
    }
}
