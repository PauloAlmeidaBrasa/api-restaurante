<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cardapio;

class CardapioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prato = new Cardapio();

        $prato->nome = 'Nome do Cardapio 1';
/*         $prato->descricao = 'Descrição do Cardapio';
        $prato->preco = 10.99;
        $prato->cardapio_id = 1; */
        $prato->save();

        //
    }
}
