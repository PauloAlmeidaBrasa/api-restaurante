<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardapioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/cardapios', function (Request $request) {
//   CardapioController::getCardapios();
// });
// Route::middleware('auth:sanctum')->group(function () {
//   Route::get('/cardapios', [CardapioController::class, 'getCardapios']);
// });
Route::get('/users', function () {
  return "Simple text to front";
  //response()->json(['message' => 'Hello from API!']);
});
Route::get('/cardapios',[CardapioController::class, 'getCardapios']);
// Route::get('/cardapios', function () {



//   var_dump('dfnfjasf');
//   die();
//   //return User::all();
// });