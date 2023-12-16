<?php

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/show/{variant_id}/{product_id}', [ProductController::class, 'show']);

Route::post('/cart', [ProductController::class, 'cart']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
