<?php
use App\Http\Controllers\Api\FavouriteController;
use App\Http\Controllers\Api\RecipeController;
use Illuminate\Support\Facades\Route;



Route::apiResource('favourites', FavouriteController::class);
Route::apiResource('Recipe', RecipeController::class);
