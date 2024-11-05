<?php

use App\Http\Controllers\CashFundController;
use App\Http\Controllers\CashFundInformationController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\FinancialStatementController;
use App\Http\Controllers\MemberCashController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProfileController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/financial', [FinancialController::class, 'index'])->name('financial.index');
    Route::post('/financial', [FinancialController::class, 'storeFinancial'])->name('financial.store');
    Route::put('/financial/{financial}', [FinancialController::class, 'update'])->name('financial.update');
    Route::delete('/financial/{id}', [FinancialController::class, 'destroy'])->name('financial.destroy');
    Route::get('/financial/{financial}/statements', [FinancialController::class, 'showStatements'])->name('financial.showStatements');
    Route::post('/financial/{financial}/statements', [FinancialController::class, 'storeStatement'])->name('financial.statement.store');
    Route::put('/financial/statements/{statement}', [FinancialStatementController::class, 'update'])->name('financial.statement.update');
    Route::delete('/financial/statements/{statement}', [FinancialStatementController::class, 'destroy'])->name('financial.statement.destroy');
    Route::resource('cashfunds', CashFundController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('cashfunds.informations', CashFundInformationController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('cashfund_informations.member_cash', MemberCashController::class)->only(['index', 'store', 'update']);
    Route::post('/cashfunds/{cashFund}/member_cash', [MemberCashController::class, 'store'])->name('cashfund_informations.member_cash.store');
    Route::put('/cashfund_informations/{cashFundInformation}/member_cash/{member}', [MemberCashController::class, 'updateName'])->name('cashfund_informations.member_cash.update');
    Route::delete('/cashfund_informations/{cashFundInformation}/member_cash/{member}', [MemberCashController::class, 'destroy'])->name('cashfund_informations.member_cash.destroy');
});

require __DIR__ . '/auth.php';
