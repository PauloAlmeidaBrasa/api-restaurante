<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcompanhamentoSubacompanhamento>
 */
class AcompanhamentoSubacompanhamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subacompanhamento_id' => fake()->numberBetween(1, 15),
            'acompanhamento_id' => fake()->numberBetween(1, 45)
        ];
    }
}
