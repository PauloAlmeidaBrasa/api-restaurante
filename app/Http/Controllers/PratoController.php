<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prato;

class PratoController extends Controller
{
    public function getPratos(Request $request) {

        $limit = $request->input('limit');
        $offset = $request->input('offset');
        if (!isset($limit)) { 
            return response()->json(['message' => 'Parameter limit is missing'], 500); 
        }
        if (!isset($offset)) { 
            return response()->json(['message' => 'Parameter offset is missing'], 500); 
        }

        $pratos = Prato::All();
        return response()->json($pratos);
    }
    
    public function getByCardapioId($cardapioId)
    {
        $pratos = Prato::where('cardapio_id', $cardapioId)->get();

        return response()->json($pratos);
    }
}
