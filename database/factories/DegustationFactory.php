<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class DegustationFactory extends Factory
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
            'categorie_id' => $this->faker->biasedNumberBetween(1,10),
            'user_id' => $this->faker->biasedNumberBetween(1,100),
            'arome' => $this->faker->paragraph(2),
            'saveur' => $this->faker->paragraph(2),
            'apparence' => $this->faker->paragraph(2),
            'impression_generale' => $this->faker->text(),
            'sensation' => $this->faker->paragraph(2),
            'note_arome' => $this->faker->biasedNumberBetween(1,10),
            'note_saveur' => $this->faker->biasedNumberBetween(1,10),
            'note_apparence' => $this->faker->biasedNumberBetween(1,10),
            'note_sensation' => $this->faker->biasedNumberBetween(1,10),
            'note_impression_generale' => $this->faker->biasedNumberBetween(1,10),
            'photo' => 'images/bg5.jpg',
            'acetaldehyde' => $this->faker->biasedNumberBetween(0,1),
            'alcoholic' => $this->faker->biasedNumberBetween(0,1),
            'astringent' => $this->faker->biasedNumberBetween(0,1),
            'diacetyl' => $this->faker->biasedNumberBetween(0,1),
            'dms' => $this->faker->biasedNumberBetween(0,1),
            'estery' => $this->faker->biasedNumberBetween(0,1),
            'grassy' => $this->faker->biasedNumberBetween(0,1),
            'light_Struck' => $this->faker->biasedNumberBetween(0,1),
            'metallic' => $this->faker->biasedNumberBetween(0,1),
            'musty' => $this->faker->biasedNumberBetween(0,1),
            'oxidized' => $this->faker->biasedNumberBetween(0,1),
            'phenolic' => $this->faker->biasedNumberBetween(0,1),
            'solvent' => $this->faker->biasedNumberBetween(0,1),
            'sour_acidic' => $this->faker->biasedNumberBetween(0,1),
            'sulfur' => $this->faker->biasedNumberBetween(0,1),
            'vegetal' => $this->faker->biasedNumberBetween(0,1),
            'yeasty' => $this->faker->biasedNumberBetween(0,1),
            'stylistic_accuracy' => $this->faker->biasedNumberBetween(0,1),
            'technical_merit' => $this->faker->biasedNumberBetween(0,1),
            'intangibles' => $this->faker->biasedNumberBetween(0,1),
            'created_at' => now()
        ];
    }
}
