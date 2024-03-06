<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Console\Commands\makeApi;
use App\Http\Controllers\MakeApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('make-api', [MakeApiController::class, 'makeApi']);


// Route::get('data',[MakeApiController::class,'data']);

