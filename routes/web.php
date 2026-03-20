<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function() {
    return "<h1>About page</h1>";
});

Route::get('/info', function() {
    return view('info');
});
Route::get('/all', [ProductController::class, 'all']);
