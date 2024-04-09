<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PratoController extends Controller
{
    
    public function getByCardapioId($cardapioId)
    {
        $pratos = Prato::where('cardapio_id', $cardapioId)->get();

        return response()->json($pratos);
    }
}
