<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PratoTableSeeder;
use Database\Seeders\CardapioTableSeeder;
use App\Models\Cardapio;
use App\Models\Prato;
use App\Models\Acompanhamento;
use App\Models\PratoAcompanhamento;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cardapio::factory(3)->create();
        Prato::factory(15)->create();
        Acompanhamento::factory(45)->create();
        PratoAcompanhamento::factory(2)->create();
  
    }
}
