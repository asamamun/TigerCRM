<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CapitalController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerauthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\OrderController;
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
use App\Http\Controllers\WishlistController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{slug}', [HomeController::class, 'category']);
Route::get('/subcategory/{slug}', [HomeController::class, 'subcategory']);
Route::get('/brand/{slug}', [HomeController::class, 'brand']);
Route::get('/shop', [ShopController::class, 'index']);
// Route::get('/product/{slug}', [ShopController::class, 'product']);
Route::get('/item/{slug}', [ShopController::class, 'show']);;
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/favourite', [WishlistController::class, 'favourite']);


Route::get('customerregister', [CustomerauthController::class, 'register'])->name('customerregister');
Route::post('customerregister', [CustomerauthController::class, 'store'])->name('customerregistersave');
Route::get('customerlogin', [CustomerauthController::class, 'login'])->name('customerlogin');
Route::post('customerlogin', [CustomerauthController::class, 'check'])->name('checkcustomerlogin');

//admin group
Route::middleware(['admin', 'auth'])->group(function () {

    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);

    // supplier
    Route::resource("/supplier", SupplierController::class);
    Route::get('export_supplier_pdf', [SupplierController::class, 'export_supplier_pdf']);

    // category
    Route::resource("/cat", CategoryController::class);
    // Route::get('createslug', [CategoryController::class, 'createslug']);
    Route::get('export_category_pdf', [CategoryController::class, 'export_category_pdf']);

    // subcategory
    Route::resource("/subcat", SubcategoryController::class);
    // Route::get('createsubslug', [SubcategoryController::class, 'createslug']);
    Route::get('export_subcategory_pdf', [SubcategoryController::class, 'export_subcategory_pdf']);

    // product
    Route::resource("/product", ProductController::class);
    Route::get('export_product_pdf', [ProductController::class, 'export_product_pdf']);
    Route::post("product_delete", [ProductController::class, 'delete']);
    Route::post("imgdel", [ProductController::class, 'imgDel']);

    // brand
    Route::resource("/brand", BrandController::class);
    Route::get('export_brand_pdf', [BrandController::class, 'export_brand_pdf']);

    // account
    Route::resource("/account", AccountController::class);
    Route::get('export_account_pdf', [AccountController::class, 'export_account_pdf']);

    // transfer
    Route::resource("/transfer", TransferController::class);
    Route::get('export_transfer_pdf', [TransferController::class, 'export_transfer_pdf']);

    // expense
    Route::resource("/expense", ExpenseController::class);
    Route::get('export_expense_pdf', [ExpenseController::class, 'export_expense_pdf']);

    // capital
    Route::resource("/capital", CapitalController::class);
    Route::get('export_capital_pdf', [CapitalController::class, 'export_capital_pdf']);

    // customer
    Route::resource("/customer", CustomerController::class);
    Route::get('export_customer_pdf', [CustomerController::class, 'export_customer_pdf']);
    
    // profile
    Route::resource("profile", ProfileController::class);

    // user
    Route::resource("user", UserController::class);
    Route::get('export_user_pdf', [UserController::class, 'export_user_pdf']);

    // sale
    Route::resource("sale", SaleController::class);

    Route::get('search', [SaleController::class, 'search']);
    Route::post('addtocart', [SaleController::class, 'addtocart']);
    Route::get('customersearch', [SaleController::class, 'customersearch']);
    Route::post('customerdetails', [SaleController::class, 'customerdetails']);
    Route::post('placeorder', [SaleController::class, 'placeorder']);

    // purchase
    Route::resource("purchase", PurchaseController::class);

    Route::get('psearch', [PurchaseController::class, 'psearch']);
    Route::post('addcart', [PurchaseController::class, 'addcart']);
    Route::get('suppliersearch', [PurchaseController::class, 'suppliersearch']);
    Route::post('supplierdetails', [PurchaseController::class, 'supplierdetails']);
    Route::post('orderplace', [PurchaseController::class, 'orderplace']);

    // carousel
    Route::resource("carousel", CarouselController::class);

    // invoice
    Route::resource("invoice", InvoiceController::class);
    Route::get('invoice/details/{id}', [InvoiceController::class, 'invoicedetails']);
    Route::get('invoice/print/{id}', [InvoiceController::class, 'print']);
    Route::get('invoice/pdf/{id}', [InvoiceController::class, 'pdf']);

    // order
    Route::resource("order", OrderController::class);
    Route::get('order/details/{id}', [OrderController::class, 'orderdetails']);
    Route::get('order/print/{id}', [OrderController::class, 'print']);
    Route::get('order/pdf/{id}', [OrderController::class, 'pdf']);

    //search
    // Route::get('/search', [ProductController::class, 'search']);

    Route::get('getsubcategories/{cid}', [SubcategoryController::class, 'get_subcategories']);

    //lead
    Route::get('purchaselead', [LeadController::class, 'purchaselead']);
    Route::get('salelead', [LeadController::class, 'salelead']);


});

//user group
Route::middleware(['user', 'auth'])->group(function () {


});

//customer group

Route::middleware(['customer'])->group(function () {
    //customer dashboard
    Route::get('customerdashboard', [CustomerDashboardController::class, 'index'])->name('customerdashboard');

    //purchase history
    Route::get('purchasehistory', [PurchaseHistoryController::class, 'index']);

    //add to cart
    Route::get("cart", [ShopController::class, 'cart']);
    Route::get('add-to-cart/{id}', [ShopController::class, 'addToCart']);
    Route::get('removecart/{id}', [ShopController::class, 'removeFromCart']);
    // Route::patch("update-cart", [ShopController::class, 'update']);
    // Route::delete("remove-from-cart", [ShopController::class, 'remove']);

    // order track
    Route::resource("ordertrack", OrderTrackController::class);

    // profile
    Route::resource("customerprofile", CustomerProfileController::class);




    Route::resource("wishlist", WishlistController::class);
    Route::post("wishlist_delete", [WishlistController::class, 'delete']);

    Route::post('customerlogout', [CustomerauthController::class, 'logout'])->name('customerlogout');
});


require __DIR__ . '/auth.php';
