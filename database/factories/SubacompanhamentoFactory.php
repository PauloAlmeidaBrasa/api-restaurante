<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subacompanhamento>
 */
class SubacompanhamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $table = 'subacompanhamento';

    public function definition()
    {
        static $number = 1;
        return [
            'nome' => 'subacompanhamento '.$number ++,
            'descricao' => fake()->text(),
            'preco' => 10.99
        ];
    }
}
