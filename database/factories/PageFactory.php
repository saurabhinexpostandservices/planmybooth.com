<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page;
use App\Models\Country;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Page::class;

    public function definition(): array
    {
        $title = $this->faker->unique()->sentence(3);

        return [
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->text(150),
            'markup_schema' => [
                '@type' => 'WebPage',
                'name' => $title,
                'description' => $this->faker->sentence,
            ],
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'featured_image' => $this->faker->optional()->imageUrl(800, 600, 'business'),
            'title' => $title,
            'content' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'type' => $this->faker->randomElement(['country', 'city']),
            'country_id' => Country::factory(),
            'city_id' => City::factory(),
            'author_id' => User::factory(),
        ];
    }
}
