<?php

use App\Livewire\Auth\Forgot;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Home\Cart;
use App\Livewire\Home\Categories;
use App\Livewire\Home\Checkout;
use App\Livewire\Home\MyOrderDetail;
use App\Livewire\Home\MyOrders;
use App\Livewire\Home\ProductDetail;
use App\Livewire\Home\Products;
use App\Livewire\HomePage;
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
    return view('welcome');
});


// Route::get('/', HomePage::class);
// Route::get('/categories', Categories::class);
// Route::get('/products', Products::class);
// Route::get('/cart', Cart::class);
// Route::get('/checkout', Checkout::class);
// Route::get('/products/{slug}', ProductDetail::class);

// Route::get('/my-orders', MyOrders::class);
// Route::get('/my-orders/{orders}', MyOrderDetail::class);

// Route::get('/login', Login::class);
// Route::get('/register', Register::class);
// Route::get('/forgot', Forgot::class);
// Route::get('/reset-password', ResetPassword::class);