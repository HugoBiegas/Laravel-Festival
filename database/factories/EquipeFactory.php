<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'identiteResponsable' => $this->faker->lastName(),
            'adressePostale' => $this->faker->address(),
            'nombrePersonnes' => $this->faker->numberBetween($min = 1, $max = 20),
            'nomPays' => $this->faker->country(),
            'hebergement' => 'O',
            'stand' => 1,
        ];
    }
}