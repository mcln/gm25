<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('', [HomeController::class, 'index']);
});