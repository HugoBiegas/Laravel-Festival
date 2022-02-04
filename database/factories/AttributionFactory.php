<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'equipe_id' => $this->faker->$this->faker->numberBetween($min = 1, $max = 10),
            'etablissement_id' => $this->faker->$this->faker->numberBetween($min = 1, $max = 4),
            'nombreChambres' => $this->faker->$this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}
