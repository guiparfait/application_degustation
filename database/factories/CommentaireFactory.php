<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->swiftBicNumber(),
            'degustation_id' => $this->faker->biasedNumberBetween(1,200),
            'user_id' => $this->faker->biasedNumberBetween(1,100),
            'libelle' => $this->faker->text()
        ];
    }
}
