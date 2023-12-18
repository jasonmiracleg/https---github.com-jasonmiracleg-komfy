<?php

use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\VariantController;
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

Route::get('/admin_order', [ProductController::class, 'data']);

Route::get('/admin_category', [CategoryController::class, 'index']);

Route::get('/delete_category/{category_id}', [CategoryController::class, 'delete']);

Route::post('/create_category', [CategoryController::class, 'create']);

Route::get('/admin_variant', [VariantController::class, 'index']);

Route::get('/delete_variant/{variant_id}', [VariantController::class, 'delete']);

Route::post('/create_variant', [VariantController::class, 'create']);

Route::post('/cart', [ProductController::class, 'cart']);

Route::post('/checkout', [ProductController::class, 'checkout']);

Route::post('/check_cart', [ProductController::class, 'show_cart']);

Route::get('/delete_order/{order_id}', [ProductController::class, 'delete_order']);

Route::get('/verify_is_paid/{bill_id}', [BillController::class, 'verify_paid']);

Route::get('/verify_is_cash/{bill_id}', [BillController::class, 'verify_cash']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
