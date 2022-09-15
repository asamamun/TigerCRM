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
use App\Http\Controllers\StaffController;
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
// Route::post('/send_user_email', [ContactController::class, 'send_user_email']);
// Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

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
    Route::get('brnd/trashed', [BrandController::class, 'trashed']);
    Route::post('brnd/trashed/{id}/restore', [BrandController::class, 'trashedRestore'])->name('brnd.trashed.restore');
    Route::post('brnd/trashed/{id}/force_delete', [BrandController::class, 'trashedDelete'])->name('brnd.trashed.destroy');
    Route::resource("/brnd", BrandController::class);
    Route::get('export_brand_pdf', [BrandController::class, 'export_brand_pdf']);

    // account
    Route::get('account/trashed', [AccountController::class, 'trashed']);
    Route::post('account/trashed/{id}/restore', [AccountController::class, 'trashedRestore'])->name('account.trashed.restore');
    Route::post('account/trashed/{id}/force_delete', [AccountController::class, 'trashedDelete'])->name('account.trashed.destroy');
    Route::resource("/account", AccountController::class);
    Route::get('export_account_pdf', [AccountController::class, 'export_account_pdf']);

    // transfer
    Route::get('transfer/trashed', [TransferController::class, 'trashed']);
    Route::post('transfer/trashed/{id}/restore', [TransferController::class, 'trashedRestore'])->name('transfer.trashed.restore');
    Route::post('transfer/trashed/{id}/force_delete', [TransferController::class, 'trashedDelete'])->name('transfer.trashed.destroy');
    Route::resource("/transfer", TransferController::class);
    Route::get('export_transfer_pdf', [TransferController::class, 'export_transfer_pdf']);
    Route::get('export_transferlist_pdf', [TransferController::class, 'export_transferlist_pdf']);

    // expense
    Route::get('expense/trashed', [ExpenseController::class, 'trashed']);
    Route::post('expense/trashed/{id}/restore', [ExpenseController::class, 'trashedRestore'])->name('expense.trashed.restore');
    Route::post('expense/trashed/{id}/force_delete', [ExpenseController::class, 'trashedDelete'])->name('expense.trashed.destroy');
    Route::resource("/expense", ExpenseController::class);
    Route::get('export_expense_pdf', [ExpenseController::class, 'export_expense_pdf']);
    Route::get('export_expenselist_pdf', [ExpenseController::class, 'export_expenselist_pdf']);

    // capital
    Route::get('capital/trashed', [CapitalController::class, 'trashed']);
    Route::post('capital/trashed/{id}/restore', [CapitalController::class, 'trashedRestore'])->name('capital.trashed.restore');
    Route::post('capital/trashed/{id}/force_delete', [CapitalController::class, 'trashedDelete'])->name('capital.trashed.destroy');
    Route::resource("/capital", CapitalController::class);
    Route::get('export_capital_pdf', [CapitalController::class, 'export_capital_pdf']);
    Route::get('export_capitallist_pdf', [CapitalController::class, 'export_capitallist_pdf']);

    // customer
    Route::resource("/customer", CustomerController::class);
    Route::get('export_customer_pdf', [CustomerController::class, 'export_customer_pdf']);
    Route::post('newcustomer', [CustomerController::class, 'newcustomer']);
    
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
    Route::post('updatecarouselstatus', [CarouselController::class, 'updatecarouselstatus']);

    // invoice
    Route::resource("invoice", InvoiceController::class);
    Route::get('invoice/details/{id}', [InvoiceController::class, 'invoicedetails']);
    Route::get('invoice/print/{id}', [InvoiceController::class, 'print']);
    Route::get('invoice/pdf/{id}', [InvoiceController::class, 'pdf']);
    Route::get('export_invoice_pdf', [InvoiceController::class, 'export_invoice_pdf']);

    // order
    Route::resource("order", OrderController::class);
    Route::get('order/details/{id}', [OrderController::class, 'orderdetails']);
    Route::get('order/print/{id}', [OrderController::class, 'print']);
    Route::get('order/pdf/{id}', [OrderController::class, 'pdf']);
    Route::get('export_order_pdf', [OrderController::class, 'export_order_pdf']);

    //search
    // Route::get('/search', [ProductController::class, 'search']);

    Route::get('getsubcategories/{cid}', [SubcategoryController::class, 'get_subcategories']);

    //lead
    Route::get('purchaselead', [LeadController::class, 'purchaselead']);
    Route::get('export_purchase_lead_pdf', [LeadController::class, 'export_purchase_lead_pdf']);
    Route::get('salelead', [LeadController::class, 'salelead']);
    Route::get('export_sale_lead_pdf', [LeadController::class, 'export_sale_lead_pdf']);

    // staff
    Route::get('staff/trashed', [StaffController::class, 'trashed']);
    Route::post('staff/trashed/{id}/restore', [StaffController::class, 'trashedRestore'])->name('staff.trashed.restore');
    Route::post('staff/trashed/{id}/force_delete', [StaffController::class, 'trashedDelete'])->name('staff.trashed.destroy');
    Route::resource("staff", StaffController::class);
    Route::get('export_stafflist_pdf', [StaffController::class, 'export_stafflist_pdf']);

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
    Route::post('codplaceorder', [ShopController::class, 'placeorder']);

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
