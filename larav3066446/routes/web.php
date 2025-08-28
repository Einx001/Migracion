<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('category/create', [CategoryController::class, 'create']);
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');