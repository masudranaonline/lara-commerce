<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductlistController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminCartController;

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



Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/products', [ProductlistController::class, 'index']);
Route::get('/products/show/{id}', [ProductlistController::class, 'show']);



// Route::get('/cart', function () {
//     return view('admin.cart.index');
// });
// Route::get('/cart_details', function () {
//     return view('admin.cart.details');
// });
// Route::get('/cart_edit', function () {
//     return view('admin.cart.edit');
// });



Route::group(['prefix' => 'admin-panel',], function(){
    Route::get('/', [AdminController::class, 'index']);

    Route::group(['prefix' => 'customer'], function(){
        Route::get('/', [CustomerController::class, 'index']);
        Route::get('create', [CustomerController::class, 'create']);
        Route::post('store', [CustomerController::class, 'store']);
        Route::get('edit/{id}', [CustomerController::class, 'edit']);
        Route::post('update/{id}', [CustomerController::class, 'update']);
        Route::get('show/{id}', [CustomerController::class, 'show']);
        Route::post('destroy/{id}', [CustomerController::class, 'destroy']);
    });

    // Route::resource('customer', 'CustomerController');


    Route::group(['prefix' => 'vendor'], function(){
        Route::get('/', [VendorController::class, 'index']);
        Route::get('create', [VendorController::class, 'create']);
        Route::post('store', [VendorController::class, 'store']);
        Route::get('edit/{id}', [VendorController::class, 'edit']);
        Route::post('update/{id}', [VendorController::class, 'update']);
        Route::get('show/{id}', [VendorController::class, 'show']);
        Route::post('destroy/{id}', [VendorController::class, 'destroy']);
    });


    Route::group(['prefix' => 'product'], function(){
        Route::get('/', [ProductController::class, 'index']);
        Route::get('create', [ProductController::class, 'create']);
        Route::post('store', [ProductController::class, 'store']);
        Route::get('edit/{id}', [ProductController::class, 'edit']);
        Route::post('update/{id}', [ProductController::class, 'update']);
        Route::get('show/{id}', [ProductController::class, 'show']);
        Route::post('destroy/{id}', [ProductController::class, 'destroy']);
    });

    Route::group(['prefix' => 'category'], function(){
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('create', [CategoryController::class, 'create']);
        Route::post('store', [CategoryController::class, 'store']);
        Route::get('edit/{id}', [CategoryController::class, 'edit']);
        Route::post('update/{id}', [CategoryController::class, 'update']);
        Route::get('show/{id}', [CategoryController::class, 'show']);
        Route::post('destroy/{id}', [CategoryController::class, 'destroy']);
    });


    Route::group(['prefix' => 'order'], function(){
        Route::get('/', [OrderController::class, 'index']);
        Route::post('store', [OrderController::class, 'store']);
        Route::get('edit/{id}', [OrderController::class, 'edit']);
        Route::post('update/{id}', [OrderController::class, 'update']);
        Route::get('show/{id}', [OrderController::class, 'show']);
        Route::post('destroy/{id}', [OrderController::class, 'destroy']);
    });

    Route::group(['prefix' => 'refund'], function(){
        Route::get('/', [RefundController::class, 'index']);
        Route::get('create', [RefundController::class, 'create']);
        Route::post('store', [RefundController::class, 'store']);
        Route::get('edit/{id}', [RefundController::class, 'edit']);
        Route::post('update/{id}', [RefundController::class, 'update']);
        Route::get('show/{id}', [RefundController::class, 'show']);
        Route::post('destroy/{id}', [RefundController::class, 'destroy']);
    });

    Route::group(['prefix' => 'payment'], function(){
        Route::get('/', [PaymentController::class, 'index']);
        Route::get('create', [PaymentController::class, 'create']);
        Route::post('store', [PaymentController::class, 'store']);
        Route::get('edit/{id}', [PaymentController::class, 'edit']);
        Route::post('update/{id}', [PaymentController::class, 'update']);
        Route::get('show/{id}', [PaymentController::class, 'show']);
        Route::post('destroy/{id}', [PaymentController::class, 'destroy']);
    });

});

