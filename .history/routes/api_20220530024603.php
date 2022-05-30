<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

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

// Route::middleware('auth:sanctum')->post('/calculate', function (Request $request) {
//     return response('hello');
// });

//Route::post('/calculate', [CalculatorController::class, 'index']);
Route::post('/calculate', 'App\Http\Controllers\UserController@index');
