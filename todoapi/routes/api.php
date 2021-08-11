<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::apiResource('/list', TodoController::class);
