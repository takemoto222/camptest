<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



Route::get('/index', [TestController::class, 'index']);
Route::post('/index', [TestController::class, 'index']);
