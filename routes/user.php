<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;


Route::resource('user', UserController::class);
