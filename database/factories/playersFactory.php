<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\players>
 */
class PlayersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'age' => rand(19,35),
            'name' => $this->faker->word(),
            'club' => $this->faker->word(),
            'country' => $this->faker->word(),
            'position' => $this->faker->word(),
        ];
    }
}
