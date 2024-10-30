<?php

use App\Http\Controllers\CashFundController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\MemberCashController;
use App\Http\Controllers\ProfileController;
use App\Models\MemberCash;
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
    Route::get('/cashfunds', [CashFundController::class, 'index'])->name('cashfunds.index');
    Route::get('/cashfunds/create', [CashFundController::class, 'create'])->name('cashfunds.create');
    Route::post('/cashfunds', [CashFundController::class, 'store'])->name('cashfunds.store');
    Route::get('/cashfunds/{id}', [CashFundController::class, 'show'])->name('cashfunds.show');
    Route::post('/member-cashes/{cashFundId}', [MemberCashController::class, 'store'])->name('membercash.store');
    Route::patch('/member-cashes/{id}/update-payment-status', [MemberCashController::class, 'updatePaymentStatus'])->name('membercash.updatePaymentStatus');
});

require __DIR__ . '/auth.php';
