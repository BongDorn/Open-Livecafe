<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductController;


// routes/web.php

use App\Http\Controllers\SubscribeController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::post('/set-language', [LanguageController::class, 'setLanguage'])->name('set.language');
Route::post('/subscribe-request', [SubscribeController::class, 'subscribe'])->name('subscribe.request');
Route::get('/load-product-modal/{id}', [ProductController::class, 'loadProductModal']);
Route::get('/remove-cart-item/{id}', [CartController::class, 'removeCartItem']);


route::get('/payments', [AdminController::class, 'payments']);
route::get('/pos', [POSController::class, 'pos']);
Route::post('/admin/pos/add-to-cart', [POSController::class, 'addToCart'])->name('admin.pos.add_to_cart');
Route::post('/admin/pos/update-cart', [POSController::class, 'updateCart'])->name('admin.pos.update_cart');
Route::post('/admin/pos/remove-cart', [POSController::class, 'removeCart'])->name('admin.pos.remove_cart');
Route::post('/admin/pos/update-cart-total', [POSController::class, 'updateCartTotal'])->name('admin.pos.update_cart_total');



route::get('/', [HomeController::class, 'my_home']);

route::get('/home', [HomeController::class, 'index']);

route::get('/products', [AdminController::class, 'products']);
route::post('/upload_product', [ProductController::class, 'upload_product']);
//Route::post('/admin/products/store', [AdminController::class, 'store'])->name('admin.products.store');
//Route::put('/update/{id}', [AdminController::class, 'update']);
Route::get('/delete_product/{id}', [ProductController::class, 'deleteProduct'])->name('delete_product');
Route::post('/update_product/{id}', [ProductController::class, 'updateProduct'])->name('update_product');
Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);
Route::get('/show_cart', [HomeController::class, 'show_cart']);
route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);


route::get('/checkout', [HomeController::class, 'checkout']);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//route::get('/home', [HomeController::class, 'h']);
