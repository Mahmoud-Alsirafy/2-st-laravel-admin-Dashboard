<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dash\adminController;
use App\Http\Controllers\dash\productController;
use App\Http\Controllers\user\FeaturedController;

Route::resource("admin",adminController::class);
Route::resource("product",productController::class);
Route::resource('Featured',FeaturedController::class);
