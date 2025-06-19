<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\StandBuilder;
use App\Models\Country;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Standbuilder>
 */
class StandbuilderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = StandBuilder::class;

    public function definition(): array
    {

        $title = $this->faker->company;


        return [
            'username' => Str::slug($title) . Str::random(4),
            'title' => $title,
            'description' => $this->faker->paragraphs(3, true),
            'founded_year' => $this->faker->year,
            'country_id' => Country::factory(),
            'city_id' => City::factory(),
            'website' => $this->faker->optional()->url(),
            'email' => $this->faker->unique()->companyEmail,
            'phone' => $this->faker->optional()->phoneNumber,
            'logo' => $this->faker->optional()->imageUrl(300, 300, 'business', true, 'Logo'),
            'cover_image' => $this->faker->optional()->imageUrl(1200, 400, 'architecture', true, 'Cover'),
            'services' => $this->faker->randomElements([
                'design', 'construction', 'management', 'logistics'
            ], rand(1, 3)),
            'services_continents' => $this->faker->randomElements([
                'Asia', 'Europe', 'North America', 'South America', 'Africa', 'Australia'
            ], rand(1, 3)),
            'priorty' => (string) rand(0, 10),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'author_id' => User::factory(),
        ];
    }
}
