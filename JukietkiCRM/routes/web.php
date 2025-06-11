<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

// main path
Route::get('/', function () {return view('main');})->name('main');

// resources
Route::resource('clients', ClientController::class);
Route::resource('orders', OrderController::class);
Route::resource('expenses', ExpenseController::class);

