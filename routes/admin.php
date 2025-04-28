<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dash\adminController;
use App\Http\Controllers\dash\productController;

Route::resource("admin",adminController::class);
Route::resource("product",productController::class);
