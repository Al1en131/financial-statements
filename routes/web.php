<?php

use App\Http\Controllers\FinancialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/financial', [FinancialController::class, 'index'])->name('financial.index');
    Route::post('/financial', [FinancialController::class, 'storeFinancial'])->name('financial.store');
    Route::get('/financial/{financial}/statements', [FinancialController::class, 'showStatements'])->name('financial.showStatements');
    Route::post('/financial/{financial}/statements', [FinancialController::class, 'storeStatement'])->name('financial.statement.store');
});

require __DIR__ . '/auth.php';
