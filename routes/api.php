<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/products', [ProductsController::class,'products']);
    Route::get('/products/{id}', [ProductsController::class,'product']);






    Route::get('/logout', [authController::class,'logout']);
    Route::get('/me', [authController::class,'me']);

});
Route::post('/login', [authController::class,'login']);
