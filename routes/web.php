<?php

use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [QuoteController::class, 'index'])->name('random.quote');

Route::get('/quotes', [QuoteController::class, 'show'])->name('movie.quotes');

Route::get('login', [SessionsController::class, 'create'])->name('login.view')->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->name('login')->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->name('logout');

Route::get('/{locale}', [LanguageController::class, 'change'])->name('change.language');