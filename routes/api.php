<?php
use App\Http\Controllers\Api\FavouriteController;
use Illuminate\Support\Facades\Route;



Route::apiResource('favourites', FavouriteController::class);
