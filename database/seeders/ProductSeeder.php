<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->truncate();

        DB::table("product")->insert([
            [
                "insurance_type_id"     => 1,
                "plan_id"               => 1,
                "product_name_en"       => "Tembo",
                "product_name_sw"       => "Tembo SW",

                "premium_without_vat"   => "95000",
                "vat_percentage"        => "18",
                "vat_amount"            => "5000",
                "gross_premium"         => "10000",
                "building_compensation" => "10000000",
                "content_compensation"  => "5000000",
                "currency"              => "USD",
            ],
            [
                "insurance_type_id"     => 2,
                "plan_id"               => 1,
                "product_name_en"       => "Kifaru",
                "product_name_sw"       => "Kifaru SW",

                "premium_without_vat"   => "45000",
                "vat_percentage"        => "18",
                "vat_amount"            => "2000",
                "gross_premium"         => "47000",
                "building_compensation" => "7000000",
                "content_compensation"  => "2000000",
                "currency"              => "USD",
            ],
        ]);
    }
}
