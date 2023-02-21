<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//CEP
Route::get('/cep/{cep}', [CepController::class, 'show']);

//Pacientes
Route::get('pacientes', [PacienteController::class, 'index']);
Route::get('pacientes/{id}', [PacienteController::class, 'show']);
Route::post('pacientes', [PacienteController::class, 'store']);
Route::put('pacientes/{id}', [PacienteController::class, 'update']);
Route::delete('pacientes/{id}', [PacienteController::class, 'destroy']);
Route::post('/pacientes/import', [PacienteController::class, 'import']);
