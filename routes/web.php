<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class, 'index']);
Route::get('/next', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
