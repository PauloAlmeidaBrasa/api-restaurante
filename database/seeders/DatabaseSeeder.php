<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PratoTableSeeder;
use Database\Seeders\CardapioTableSeeder;
use App\Models\Cardapio;
use App\Models\Prato;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CardapioTableSeeder::class);
        //$this->call(PratoTableSeeder::class);
        Cardapio::factory(3)->create();
        Prato::factory(15)->create();
        // \App\Models\User::factory(10)->create();file:///home/paulor/Projetos/restaurante-orchestration/docker-compose.yaml
            

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
