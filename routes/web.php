<?php

// use App\Http\Controllers\TermsPage;

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FaqController;
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
use App\Http\Controllers\DashboardPrescriptionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TransactionController;
// use App\Models\Transaction;

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

Route::post('/check', [LoginController::class, 'check'])->name('check');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register2', [RegisterController::class, 'store'])->name('register2');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//=========================================== user =====================================================
Route::group(['middleware' => ['auth', 'userOnly']], function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('LandingPage.LandingIndex');
    Route::get('/addTransaction/{cartId}', [TransactionController::class, 'addTransaction']);
    Route::get('/history', [HistoryController::class, 'index'])->name('history-index');

    Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/category/{category:slug}', [ProductController::class, 'showByCategory'])->name('category.show');



    Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
    Route::post('/upload.prescription',[CartController::class, 'store'])->name('upload.prescription');

    // profile
    Route::get('/profile', [UserProfileController::class, 'index']);
    Route::get('/changePassOld', [UserProfileController::class, 'checkPassPage'])->name('oldPassPage');
    Route::post('/newPass', [UserProfileController::class, 'newPassPage']);
    Route::post('/changePassword', [UserProfileController::class, 'changePassword']);
    Route::get('/logoutPage', [UserProfileController::class, 'logoutPage']);
    Route::put('/updateProfile', [UserProfileController::class, 'updateProfile']);

    Route::get('/faq', [PageController::class, 'faq']);
    Route::get('/termsandconditions', [PageController::class,'termsandconditions']);
    Route::get('/aboutus', [PageController::class,"aboutus"]);

    Route::get('/orderdetail/{order}', [OrderDetailController::class, 'index']);
    Route::post('/order/cancel/{transaction_id}', [OrderDetailController::class, 'cancel'])->name('order.cancel');

    Route::get('/promotions', [PromotionController::class, 'index']);
    Route::get('/promotions/{promotion:slug}', [PromotionController::class, 'show']);

    // Routes for managing the cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{productId}', [CartController::class, 'addProduct'])->name('cart.add');
    Route::delete('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::delete('/cart/removeAll', [CartController::class, 'removeAllItems'])->name('cart.removeAll');
    Route::post('cart/changeQty/{productId}', [CartController::class, 'changeQty'])->name('cart.changeQty');

    Route::post('/cart/addPromo', [CartController::class, 'addPromo'])->name('cart.promo.add');
    Route::post('/cart/removePromo', [CartController::class, 'removePromo'])->name('cart.promo.remove');
});


//=========================================== admin =====================================================
Route::group(['middleware' => ['admin']], function () {
    // Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [AdminDashboardController::class,"index"]);
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


    Route::put('/dashboard/transactions/{transaction:slug}/edit', [DashboardTransactionController::class, "update"]);

    //prescription
    Route::get('/dashboard/prescriptions', [DashboardPrescriptionController::class, 'index'])->name('admin.prescriptions.updateIndex');
    Route::get('dashboard/prescriptions/{slug}/edit', [DashboardPrescriptionController::class, 'edit']);
    Route::put('dashboard/prescriptions/{slug}/update', [DashboardPrescriptionController::class, 'update'])->name('admin.prescriptions.updateStatus');
    Route::get('/dashboard/prescriptions/{slug}', [DashboardPrescriptionController::class, 'show']);
});



