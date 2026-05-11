<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

Route::get('/', function () {
    return view('welcome');
});

// URL-nya sekarang pakai /panel-utama, bukan /dashboard
Route::get('/panel-utama', [WarehouseController::class, 'tampilData']);