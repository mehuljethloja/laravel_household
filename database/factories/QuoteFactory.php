<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'activity_id' => $this->faker->biasedNumberBetween(1,100),
            'user_id' => 1,
            'insurance_type_id' => rand(1,2),
            'plan_id' => rand(1,4)
        ];
    }
}
