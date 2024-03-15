<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::get('/users',[UserController::class,'index']);
Route::post('/users',[UserController::class,'store']);
Route::get('/users/{id}',[UserController::class,'show']);
Route::patch('/users/{id}',[UserController::class,'update']);
Route::delete('/users/{id}', [UserController::class,'destroy']);


Route::get('/', function () {
    return response()->json([
        'sucess' => true
    ]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
