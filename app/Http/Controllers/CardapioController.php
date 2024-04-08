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

        $menus = Cardapio::find(1);   
    /*     DB::enableQueryLog();

        dd(DB::getQueryLog()); */

        return response()->json('$menus');
    }
}
