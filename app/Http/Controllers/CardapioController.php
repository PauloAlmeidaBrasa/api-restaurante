<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;

class CardapioController extends Controller
{
    public function __construct()
    { }
    public function getCardapios(Request $request) {

        $limit = $request->input('limit');
        $offset = $request->input('offset');
        if (!isset($limit)) { 
            return response()->json(['message' => 'Parameter limit is missing'], 500); 
        }
        if (!isset($offset)) { 
            return response()->json(['message' => 'Parameter offset is missing'], 500); 
        }

        $menus = Cardapio::All();
        return response()->json($menus);
    }
    public function getCardapio(Request $request) {

        $id = $request->input('id');
        //dd($request->input());

        if (!isset($id)) { 
            return response()->json(['message' => 'Parameter id cardapio is missing'], 500); 
        }

        $menu = Cardapio::findOrFail($id);
        return response()->json($menu);
    }
}
