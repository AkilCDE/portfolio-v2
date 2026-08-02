<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index']);
Route::post('/message', [PortfolioController::class, 'store'])->name('message.store');
