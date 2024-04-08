<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $number = 1;
        return [
            'nome' => 'Prato '.$number ++,
            'descricao' => fake()->text(),
            'preco' => 10.99,
            'cardapio_id' => fake()->numberBetween(1, 3)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        /* return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]); */
    }
}
