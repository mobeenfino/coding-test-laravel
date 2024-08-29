<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
