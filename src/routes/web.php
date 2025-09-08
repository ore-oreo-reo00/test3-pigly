<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightController;

Route::get('/', [WeightController::class, 'register']);
Route::get('/login', [WeightController::class, 'login']);
