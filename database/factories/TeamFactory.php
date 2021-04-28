<?php

namespace Database\Factories;

use App\Models\{Session, Team};
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'points' => $this->faker->randomNumber(),
            'money_left' => $this->faker->randomNumber(),
            'video' => $this->faker->randomNumber(),
            'picture' => $this->faker->randomNumber(),
            'description' => $this->faker->text(),
            'session_id' => Session::factory()

            //'remember_token' => Str::random(10),
        ];
    }
}
