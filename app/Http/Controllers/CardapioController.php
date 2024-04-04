<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function __construct()
    { }
    public function getCardapios(Request $request) {
        $params = $request->all();
        $validateData = $this->validParameters($request);
        if (!$validateData['success']) {
            // Return error response if validation fails
            return response()->json(['message' => $validateData['message']], 500);
        }

        $menus = ["cardapio1"];

        // Return the list of menus as JSON response
        return response()->json($menus);
    }

    private function validParameters(Request $request)
    {
        // Check if 'offset' and 'limit' parameters are present in the request
        if (!$request->has('offset')) {
            return ['success' => false, 'message' => 'Parameter "offset" is missing'];
        }

        if (!$request->has('limit')) {
            return ['success' => false, 'message' => 'Parameter "limit" is missing'];
        }

        // If both parameters are present, return success
        return ['success' => true];
    }
}
