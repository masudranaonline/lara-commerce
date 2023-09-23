<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('admin.home');
});
Route::get('/customer', function () {
    return view('admin.customer.index');
});
Route::get('/customer_add', function () {
    return view('admin.customer.create');
});
Route::get('/customer_edit', function () {
    return view('admin.customer.edit');
});
Route::get('/customer_details', function () {
    return view('admin.customer.details');
});



Route::get('/product', function () {
    return view('admin.product.index');
});

Route::get('/product_create', function () {
    return view('admin.product.create');
});

Route::get('/product_edit', function () {
    return view('admin.product.edit');
});

Route::get('/product_details', function () {
    return view('admin.product.details');
});

Route::get('/order', function () {
    return view('admin.order.index');
});
Route::get('/order_edit', function () {
    return view('admin.order.edit');
});
Route::get('/order_details', function () {
    return view('admin.order.details');
});


Route::get('/vendor', function () {
    return view('admin.vendor.index');
});
Route::get('/vendor_add', function () {
    return view('admin.vendor.create');
});
Route::get('/vendor_edit', function () {
    return view('admin.vendor.edit');
});

Route::get('/category', function () {
    return view('admin.category.index');
});
Route::get('/category_add', function () {
    return view('admin.category.create');
});
Route::get('/category_details', function () {
    return view('admin.category.details');
});
Route::get('/category_edit', function () {
    return view('admin.category.edit');
});

Route::get('/cart', function () {
    return view('admin.cart.index');
});
Route::get('/cart_details', function () {
    return view('admin.cart.details');
});
Route::get('/cart_edit', function () {
    return view('admin.cart.edit');
});

Route::get('/payment', function () {
    return view('admin.payment.index');
});
Route::get('/payment_add', function () {
    return view('admin.payment.create');
});




// Route::get('/', function () {
//     return view('frontend.home');
// });

// Route::get('/cart', function () {
//     return view('frontend.cart');
// });

// Route::get('/product_list', function () {
//     return view('frontend.product_list');
// });
// Route::get('/checkout', function () {
//     return view('frontend.checkout');
// });
// Route::get('/details', function () {
//     return view('frontend.details');
// });
// Route::get('/invoice', function () {
//     return view('frontend.invoice');
// });
// Route::get('/login', function () {
//     return view('frontend.login');
// });

