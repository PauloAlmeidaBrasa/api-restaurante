<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $menus = ["cardapio1"];

        return response()->json($menus);
    }
    
    private function validParameters($params)
    {
        if (!isset($params['offset'])) {
            return ['success' => false, 'message' => $params];
        }
        if (!isset($params['limit'])) {
            return ['success' => false, 'message' => 'Parameter limit is missing'];
        }

        return ['success' => true];
    }
}
