<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "insurance_type_id" => 1,
            "plan_name_en" => $this->faker->name(),
            "plan_name_sw" => $this->faker->name(),
        ];
    }
}
