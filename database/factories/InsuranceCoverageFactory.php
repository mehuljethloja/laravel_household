<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InsuranceCoverageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'insurance_type_id' => 1,
            'plan_id' => 1,
            'product_id' => 1,
            'coverage_heading_en' => $this->faker->name(),
            'coverage_data_en' => $this->faker->name(),
            'coverage_heading_sw' => $this->faker->name(),
            'coverage_data_sw' => $this->faker->name(),
        ];
    }
}
