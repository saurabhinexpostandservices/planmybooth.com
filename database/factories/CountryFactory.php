<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;
use App\Models\Continent;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Country::class;
    public function definition(): array
    {
        return [
            'continent_id' => Continent::factory(),
            'author_id' => User::factory(),
            'name' => $this->faker->country,
        ];
    }
}
