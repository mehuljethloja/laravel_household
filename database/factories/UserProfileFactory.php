<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_profile_id' => 1,
            'user_name' => $this->faker->userName(),
            'user_email_id' => $this->faker->unique()->safeEmail(),
            'user_mobile_number' => $this->faker->biasedNumberBetween(13,13),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'region' => $this->faker->city(),
            'country' => $this->faker->country(),
            'pincode' => $this->faker->biasedNumberBetween(6,6),
        ];
    }
}
