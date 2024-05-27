<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\TermsPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LogoutProfileController;
use App\Http\Controllers\NewPasswordConfirmController;
use App\Http\Controllers\OldPasswordCheckController;
use App\Http\Controllers\UserProfileController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('LandingPage.LandingIndex');
Route::get('/history', [HistoryController::class, 'index']);

Route::get('/product', [ProductController::class, 'show']);
Route::get('/products', [ProductController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/check', [LoginController::class, 'check'])->name('check');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register2', [RegisterController::class, 'store'])->name('register2');

Route::get('/termsandconditions', [TermsPage::class,'show']);

Route::get('/cart', [CartController::class, 'index']);

// profile
Route::get('/profile', [UserProfileController::class, 'index']);
Route::get('/changePassOld', [OldPasswordCheckController::class, 'index']);
Route::get('/newPass', [NewPasswordConfirmController::class, 'index']);
Route::get('/logout', [LogoutProfileController::class, 'index']);

Route::get('/faq', [FaqController::class, 'index']);