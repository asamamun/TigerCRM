<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CapitalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SupplierController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::middleware('auth')->group(function(){
    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);

    //customer dashboard
    Route::get('customerdashboard', [CustomerDashboardController::class, 'index']);

    //purchase history
    Route::get('purchasehistory', [PurchaseHistoryController::class, 'index']);
    
    // supplier
    Route::resource("/supplier",SupplierController::class);

    // category
    Route::resource("/category",CategoryController::class);

    // subcategory
    Route::resource("/subcategory",SubcategoryController::class);

    // product
    Route::resource("/product",ProductController::class);

    // brand
    Route::resource("/brand",BrandController::class);

    // account
    Route::resource("/account",AccountController::class);

    // expense
    Route::resource("/expense",ExpenseController::class);

    // capital
    Route::resource("/capital",CapitalController::class);

    // customer
    Route::resource("/customer",CustomerController::class);

    // profile
    Route::resource("profile",ProfileController::class);


    
//     Route::get('/profile', [ProfileController::class,'index'])->name("profile");
// Route::post('/profile', [ProfileController::class,'update'])->name("updateprofile");
});


require __DIR__.'/auth.php';
