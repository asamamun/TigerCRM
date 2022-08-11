<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CapitalController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderTrackController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

//admin group
Route::middleware(['admin', 'auth'])->group(function () {

    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);

    // supplier
    Route::resource("/supplier", SupplierController::class);

    // category
    Route::resource("/category", CategoryController::class);

    // subcategory
    Route::resource("/subcategory", SubcategoryController::class);

    // product
    Route::resource("/product", ProductController::class);

    // brand
    Route::resource("/brand", BrandController::class);

    // account
    Route::resource("/account", AccountController::class);

    // transfer
    Route::resource("/transfer", TransferController::class);

    // expense
    Route::resource("/expense", ExpenseController::class);

    // capital
    Route::resource("/capital", CapitalController::class);

    // customer
    Route::resource("/customer", CustomerController::class);

    // profile
    Route::resource("profile", ProfileController::class);

    // user
    Route::resource("user", UserController::class);

    // sale
    Route::resource("sale", SaleController::class);

    // purchase
    Route::resource("purchase", PurchaseController::class);

    // carousel
    Route::resource("carousel", CarouselController::class);



});

//user group
Route::middleware(['user', 'auth'])->group(function () {


});

//customer group
Route::middleware(['customer', 'auth'])->group(function () {
    //customer dashboard
    Route::get('customerdashboard', [CustomerDashboardController::class, 'index']);

    //purchase history
    Route::get('purchasehistory', [PurchaseHistoryController::class, 'index']);

    // order track
    Route::resource("ordertrack", OrderTrackController::class);
});


require __DIR__ . '/auth.php';
