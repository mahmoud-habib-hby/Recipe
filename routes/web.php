<?php

use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\FavouriteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('recipes', RecipesController::class);
Route::resource('favourites', FavouriteController::class);
