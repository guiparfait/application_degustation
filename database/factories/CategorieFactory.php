<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelle'   => $this->faker->sentence(2),
            'arome'     => $this->faker->sentence(),
            'saveur'    => $this->faker->sentence(),
            'apparence' => $this->faker->sentence(),
            'sensation' => $this->faker->sentence(),
            'photo'     => 'images/b1.jpg',
            'created_at'=> now(),
        ];
    }
}
