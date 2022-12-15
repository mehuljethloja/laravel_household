<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TermConditionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "insurance_type_id"     => 1,
            "plan_id"               => 1,
            "product_id"            => 1,
            "term_name_en"          => $this->faker->name(),
            "term_name_sw"          => $this->faker->name(),
        ];
    }
}
