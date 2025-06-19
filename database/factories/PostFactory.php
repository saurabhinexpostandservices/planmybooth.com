<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;

    public function definition(): array
    {
         $title = $this->faker->sentence(3);

        return [
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->text(150),
            'markup_schema' => [
                '@type' => 'WebPage',
                'name' => $title,
                'description' => $this->faker->sentence,
            ],
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'featured_image' => $this->faker->optional()->imageUrl(800, 600),
            'title' => $title,
            'content' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'author_id' => User::factory(),
        ];
    }
}
