<?php

use App\Http\Controllers\TermsPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LogoutProfileController;
use App\Http\Controllers\DashboardProductController;

use App\Http\Controllers\OldPasswordCheckController;
use App\Http\Controllers\DashboardPromotionController;
use App\Http\Controllers\NewPasswordConfirmController;



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

// profile, kemungkinan besar dimodif 
Route::get('/profile', [UserProfileController::class, 'index']);
Route::get('/changePassOld', [OldPasswordCheckController::class, 'index']);
Route::get('/newPass', [NewPasswordConfirmController::class, 'index']);
Route::get('/logout', [LogoutProfileController::class, 'index']);

Route::get('/faq', [FaqController::class, 'index']);
Route::get('/orderdetail', [OrderDetailController::class, 'index']);



//admin
Route::get('/dashboard', function () {
    return view('AdminPage.home');
});
// Route::get('/dashboard/products/{product:slug}',[DashboardProductController::class,"show"]);

Route::resource('/dashboard/products',DashboardProductController::class);
Route::resource('/dashboard/promotions', DashboardPromotionController::class);

// USERS
Route::resource('/dashboard/users', DashboardUserController::class)->name('index', 'userDashboard');
Route::get('/dashboard/users/{user:id}', [DashboardUserController::class,"show"]);
Route::delete('/dashboard/users/{user:id}/delete', [DashboardUserController::class,"destroy"]);