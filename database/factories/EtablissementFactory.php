<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtablissementFactory extends Factory
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
            'adresseRue' => $this->faker->address(),
            'codePostal' => $this->faker->postcode(),
            'ville' => $this->faker->city(),
            'telephone' => $this->faker->e164PhoneNumber(),
            'adresseElectronique' => $this->faker->unique()->safeEmail(),
            'type' => 1,
            'civiliteResponsable' => 'M.',
            'nomResponsable' => $this->faker->lastName(),
            'prenomResponsable' => $this->faker->firstName(),
            'nombreChambresOffertes' => $this->faker->numberBetween($min = 1, $max = 100),
        ];
    }
}