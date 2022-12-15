<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('term_and_condition')->truncate();
        DB::table("term_and_condition")->insert([
            [
                "insurance_type_id"     => 1,
                "plan_id"               => 1,
                "product_id"            => 1,
                "term_name_en"          => 'T1 Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type',
                "term_name_sw"          => 'T1 Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
            ],
            [
                "insurance_type_id"     => 1,
                "plan_id"               => 2,
                "product_id"            => 2,
                "term_name_en"          => 'T2 Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type',
                "term_name_sw"          => 'T2 Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
            ],
            [
                "insurance_type_id"     => 2,
                "plan_id"               => 4,
                "product_id"            => 1,
                "term_name_en"          => 'T3 Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type',
                "term_name_sw"          => 'T3 Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
            ],
        ]);
    }
}
