<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Continent;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Continent>
 */
class ContinentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Continent::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'asia',
                'africa',
                'north america',
                'south america',
                'antarctica',
                'europe',
                'australia',
            ]),
            'author_id' => User::factory(),
        ];
    }
}
