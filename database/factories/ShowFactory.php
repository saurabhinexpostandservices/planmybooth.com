<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Show;
use App\Models\Country;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Show>
 */
class ShowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Show::class;


    public function definition(): array
    {
        $title = $this->faker->unique()->words(3, true);

        return [
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->text(150),
            'markup_schema' => [
                '@type' => 'Event',
                'name' => $title,
                'description' => $this->faker->sentence,
            ],
            'slug' => Str::slug($title) . '-' . Str::random(4),
            'logo' => $this->faker->imageUrl(300, 300, 'business', true, 'Logo'),
            'title' => $title,
            'content' => $this->faker->text(200),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'country_id' => Country::factory(),
            'city_id' => City::factory(),
            'start_date' => $this->faker->dateTimeBetween('+1 week', '+3 months'),
            'end_date' => $this->faker->dateTimeBetween('+3 months', '+6 months'),
            'industry' => $this->faker->randomElement(['Technology', 'Healthcare', 'Automotive', 'Fashion']),
            'website' => $this->faker->optional()->url(),
            'author_id' => User::factory(),
        ];
    }
}
