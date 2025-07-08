<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ComputerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('api.v1.apprentices.index');

Route::get('computers', [ComputerController::class, 'index'])->name('api.v1.computers.index');
Route::post('computers', [ComputerController::class, 'store'])->name('api.v1.computers.store');
Route::get('computers/{computer}', [ComputerController::class, 'store'])->name('api.v1.computers.show');