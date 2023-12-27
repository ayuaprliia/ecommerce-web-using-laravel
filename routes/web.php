<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\OrderController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

route::get(' /redirect', [HomeController::class, 'redirect']);


route::get(' /', [HomeController::class, 'index']);

route::get(' /products', [HomeController::class, 'products']);

route::get(' /single/{id}', [HomeController::class, 'single']);

route::get(' /contact', [HomeController::class, 'contact']);

route::get(' /shoulder', [HomeController::class, 'shoulder']);

route::get(' /tote', [HomeController::class, 'tote']);

route::get(' /sling', [HomeController::class, 'sling']);

route::post(' /add_cart/{id}', [HomeController::class, 'add_cart']);

route::get(' /cart', [HomeController::class, 'cart']);

Route::post('/update-cart', [CartController::class, 'updateCart'])->name('update-cart');

route::get(' /remove_cart/{id}', [HomeController::class, 'remove_cart']);

Route::post('/add_to_cart/{id}', [HomeController::class, 'addToCart'])->name('addToCart');

route::get(' /order}', [HomeController::class, 'checkout']);

route::get(' /get-order-details}', [HomeController::class, 'get-order-details']);

route::get(' /stripe/{totalprice}', [HomeController::class, 'stripe']);

route::post('stripe', [HomeController::class, 'stripePost'])->name('stripe.post');

Route::post('/payment', [OrderController::class, 'create']);

Route::post('/add_order', [HomeController::class, 'add_order']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search']);

//ADMIN

route::get(' /view_category', [AdminController::class, 'view_category']);

route::post(' /add_category', [AdminController::class, 'add_category']);

route::get(' /delete_category/{id}', [AdminController::class, 'delete_category']);

route::get(' /view_product', [AdminController::class, 'view_product']);

route::post(' /add_product', [AdminController::class, 'add_product']);

route::get(' /show_product', [AdminController::class, 'show_product']);

route::get(' /delete_product/{id}', [AdminController::class, 'delete_product']);

route::get(' /update_product/{id}', [AdminController::class, 'update_product']);

route::post(' /update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

route::get(' /update_category/{id}', [AdminController::class, 'update_category']);

route::post(' /update_category_confirm/{id}', [AdminController::class, 'update_category_confirm']);

route::get('/search_product', [AdminController::class, 'search_product']);

route::get('/search_category', [AdminController::class, 'search_category']);