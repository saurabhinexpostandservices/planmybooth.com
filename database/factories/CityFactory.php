<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\Country;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = City::class;

    public function definition(): array
    {
        
        return [
            'country_id' => Country::factory(),
            'author_id' => User::factory(),
            'name' => $this->faker->city,
        ];
    }
}
