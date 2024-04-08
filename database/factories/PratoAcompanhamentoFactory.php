<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PratoAcompanhamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

         /**
     * The name of the database table to seed.
     *
     * @var string
     */
    protected $table = 'prato_acompanhamento';

    public function definition()
    {
        return [
            'prato_id' => 1,
            'acompanhamento_id' => 1
        ];
    }
}
