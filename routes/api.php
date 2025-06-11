<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/recipes/categories/{id}', [RecipeController::class, 'index']);

Route::get('/recipes/search', [RecipeController::class, 'search']);

Route::get('/recipes/{id}', [RecipeController::class, 'show']);
