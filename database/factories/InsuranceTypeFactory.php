<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InsuranceTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "insurance_type_name_en" => $this->faker->name(),
            "insurance_type_name_sw" => $this->faker->name(),
        ];
    }
}
