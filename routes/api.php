<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'v1',
    'as' => 'api.',
], function () {
    Route::apiResource('pilotes', \App\Http\Controllers\Api\V1\PiloteController::class);

});

//Route::apiResource('v1/pilotes', \App\Http\Controllers\Api\V1\PiloteController::class);
Route::apiResource('circuits', \App\Http\Controllers\Api\V1\CircuitController::class);
Route::apiResource('calendars', \App\Http\Controllers\Api\V1\CalendarController::class);
