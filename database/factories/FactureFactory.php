<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facture>
 */
class FactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'montant' => fake()->randomFloat(2, 10, 200),
            'volume' => fake()->randomFloat(2, 0, 10),
            'statut' => fake()->randomElement(['Payée', 'Non payée'])
        ];
    }
}
