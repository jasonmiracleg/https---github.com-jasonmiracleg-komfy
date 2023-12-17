<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VariantController;
use App\Livewire\Show;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::get('/home', [ProductController::class, 'index']);

Route::get('/show/{variant_id}/{product_id}', [ProductController::class, 'show']);

Route::post('/cart', [ProductController::class, 'cart']);

Route::post('/checkout', [ProductController::class, 'checkout']);

Route::post('/check_cart', [ProductController::class, 'show_cart']);

Route::get('/delete_order/{order_id}', [ProductController::class, 'delete_order']);

Route::get('/verify_is_paid/{bill_id}', [BillController::class, 'verify_paid']);

Route::get('/verify_is_cash/{bill_id}', [BillController::class, 'verify_cash']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
