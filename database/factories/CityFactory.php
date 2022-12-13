<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{

    protected $model = City::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            "city_name_en" => $name,
            "city_name_sw" => $name,
        ];
    }
}
