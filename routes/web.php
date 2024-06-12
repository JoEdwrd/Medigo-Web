<?php

use App\Http\Controllers\TermsPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LogoutProfileController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\OldPasswordCheckController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPromotionController;
use App\Http\Controllers\NewPasswordConfirmController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WebhookController;



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
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

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

Route::get('/promotions', [PromotionController::class, 'index']);
Route::get('/promoDetail', [PromotionController::class, 'show']);


//admin
Route::get('/dashboard', function () {
    return view('AdminPage.home');
});
//Product
Route::resource('/dashboard/products',DashboardProductController::class);
Route::get('/dashboard/products/{product:slug}',[DashboardProductController::class,"show"]);
//Promotion
Route::resource('/dashboard/promotions', DashboardPromotionController::class);
//User
Route::resource("/dashboard/users", DashboardUserController::class);
//Category
Route::resource('/dashboard/categories', DashboardCategoryController::class);
Route::get('/dashboard/categories/{category:slug}',[DashboardCategoryController::class,"show"]);
//Transactions
Route::resource('/dashboard/transactions', DashboardTransactionController::class);
// Payment

Route::get('/get-snap-token', [PaymentController::class, 'getSnapToken']);
Route::post('/midtrans/webhook', [WebhookController::class, 'handleWebhook']);


