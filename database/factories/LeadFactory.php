<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'show_id' => rand(1, 100),
            'city_id' => rand(1, 100),
            'stand_size' => rand(1, 10000),
            'stand_size_measurement_unit' => $this->faker->randomElement(['msq', 'fsq']),
            'services' =>  $this->faker->randomElement(['design_and_construction','construction','other']),
            'price_range' => [
                'min' => rand(10, 4000),
                'max' => rand(4050, 20000),
                'currency' => $this->faker->randomElement(['inr', 'usd', 'euro']),
            ],
            'design_attachments' => $this->faker->optional()->randomElements(
                ['attachment1.pdf', 'attachment2.jpg', 'attachment3.png', 'attachment4.docx'],
                rand(1, 3)
            ),
            'employee_onsite_avilable' => $this->faker->sentence,
            'author_id' => rand(1, 100)
        ];
    }
}
