<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ChildrenMemberController;
use App\Http\Controllers\WithdrawalController;

// Default route for the welcome page
Route::get('/', function () {
    return view('welcome'); // Returns the 'welcome' view
});

// Member Routes
Route::prefix('members')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('members.index');
    Route::post('/', [MemberController::class, 'store'])->name('members.store');
    Route::get('/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
    Route::put('/{id}', [MemberController::class, 'update'])->name('members.update');
    Route::delete('/{id}', [MemberController::class, 'destroy'])->name('members.destroy');
});

// Children Member Routes
Route::prefix('children-members')->group(function () {
    Route::get('/', [ChildrenMemberController::class, 'index'])->name('children_members.index');
    Route::post('/', [ChildrenMemberController::class, 'store'])->name('children_members.store');
    Route::get('/{id}/edit', [ChildrenMemberController::class, 'edit'])->name('children_members.edit');
    Route::put('/{id}', [ChildrenMemberController::class, 'update'])->name('children_members.update');
    Route::delete('/{id}', [ChildrenMemberController::class, 'destroy'])->name('children_members.destroy');
});

// Withdrawal Routes
Route::prefix('withdrawals')->group(function () {
    Route::get('/', [WithdrawalController::class, 'index'])->name('withdrawals.index');
    Route::post('/', [WithdrawalController::class, 'store'])->name('withdrawals.store');
    Route::get('/{id}/edit', [WithdrawalController::class, 'edit'])->name('withdrawals.edit');
    Route::put('/{id}', [WithdrawalController::class, 'update'])->name('withdrawals.update');
    Route::delete('/{id}', [WithdrawalController::class, 'destroy'])->name('withdrawals.destroy');
});

