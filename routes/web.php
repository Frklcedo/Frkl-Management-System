<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreditorController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => to_route('profiles.index'));

Route::resource('profiles', ProfileController::class);
Route::resource('profiles.debts', DebtController::class)
    ->scoped(['debt' => 'profile'])
    ->only(['create']);

Route::resource('creditors', CreditorController::class);

Route::resource('auth', AuthController::class)->only(['create', 'store', 'destroy']);
