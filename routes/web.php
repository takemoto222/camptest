<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


//練習
//Route::get('/', [TestController::class, 'index']);

Route::get('test/{id}', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'create']);
Route::post('/update', [TestController::class, 'update']);
//練習


//後
//新規会員登録
Route::get('/sineup', [TestController::class, 'sineup']);
//マイページ編集
Route::get('/mypage_edit', [TestController::class, 'mypage_edit']);
