<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Subscription;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Subscription::class;

    public function definition(): array
    {
        $start = $this->faker->dateTimeBetween('-6 months', 'now');
        $end = (clone $start)->modify('+1 year');

        return [
            'subscriber_id' => User::factory(),
            'type' => $this->faker->randomElement(['gold', 'silver', 'platinum']),
            'start_date' => $start,
            'end_date' => $end,
            'meta_data' => [
                'notes' => $this->faker->sentence,
                'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
                'auto_renew' => $this->faker->boolean,
            ],
        ];
    }
}
