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
        $countries=array("Alemani","Brazil","Espana","Japon","USA","Italia","Francia","Argentina");
        $clubs=array("Barcelona", "Real Madrid", "Manchester", "PSG");
        return [
            'age' => rand(19,25),
            'name' => $this->faker->word(). ' ' . $this->faker->word(),
            'club' => $clubs[array_rand($clubs,1)],
            'country' => $countries[array_rand($countries,1)],
            'position' => $this->faker->word(),
        ];
    }
}
