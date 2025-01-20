<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ChildrenMemberController;
use App\Http\Controllers\WithdrawalController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('members', MemberController::class);
Route::apiResource('children-members', ChildrenMemberController::class);
Route::apiResource('withdrawals', WithdrawalController::class);
