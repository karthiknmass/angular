<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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
Route::get('contacts/{id?}',[ ContactController::class,'index']);
Route::delete('contacts/delete/{id}', [ContactController::class, 'destroy']);
Route::post('contacts/add', [ContactController::class, 'store']);
Route::put('contacts/update/{id}', [ContactController::class, 'update']);
Route::get('contacts/edit/{id}', [ContactController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
