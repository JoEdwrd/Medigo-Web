<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
>>>>>>> Stashed changes
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/history', [HistoryController::class, 'index']);

<<<<<<< Updated upstream
Route::get('/product', [ProductController::class, 'show']);
=======
Route::get('/product', [ProductController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/check', [LoginController::class, 'check'])->name('check');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register2', [RegisterController::class, 'store'])->name('register2');

Route::get('/termsandconditions', [TermsPage::class,'show']);

Route::get('/cart', [CartController::class, 'index']);
>>>>>>> Stashed changes
