<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::get('/users', [UserController::class,'index']);
Route::post('/users', [UserController::class,'store']);


Route::get('/', function () {
    return response()->json([
        'sucess' => true
    ]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
