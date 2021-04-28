<?php

namespace Database\Factories;

use App\Models\{Challenge, Session};
use Illuminate\Database\Eloquent\Factories\Factory;

class ChallengeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Challenge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'value' => $this->faker->numberBetween(0,1200),
            'created_at' => now(),
            'updated_at' => now(),
            'session_id' => Session::factory()
        ];
    }
}
