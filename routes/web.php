<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/dbconn', function () {
    return view('dbConnect');
});

Route::get('/profile', [ProfileController::class, 'index']);
