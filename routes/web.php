<?php

use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\BookkeepingController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnershipController as AdminPartnershipController;
use App\Http\Controllers\Admin\TestimonyController as AdminTestimonyController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\Admin\ProductPictureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\VariantController;
use App\Livewire\Show;
use App\Http\Controllers\TestimonyController;
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

Route::get('/about_us', function () {
    return view('user.about_us');
});

Route::get('/product', [ProductController::class, 'index'])->name('produk');

Route::get('/show/{variant_id}/{product_id}', [ProductController::class, 'show']);

Route::get('/update_product/{product_id}', [AdminProductController::class, 'show']);

Route::get('/delete_product/{product_id}', [AdminProductController::class, 'delete']);

Route::post('/edit_product', [AdminProductController::class, 'edit_product']);

Route::get('/create_product', [AdminProductController::class, 'create_product']);

Route::post('/add', [AdminProductController::class, 'add'])->name('product.add');

Route::get('/admin_product', [AdminProductController::class, 'index'])->name('product.admin');

Route::get('/admin_order', [AdminProductController::class, 'data'])->name('order.admin');

Route::get('/create_new_var', [VariantController::class, 'create_var']);

Route::get('/admin_category', [CategoryController::class, 'index'])->name('category.admin');

Route::get('/delete_category/{category_id}', [CategoryController::class, 'delete']);

Route::post('/create_category', [CategoryController::class, 'create']);

Route::get('/admin_variant', [VariantController::class, 'index'])->name('variant.admin');

Route::get('/delete_variant/{variant_id}', [VariantController::class, 'delete']);

Route::get('/update_variant/{variant_id}', [VariantController::class, 'update']);

Route::post('/update_admin_variant', [VariantController::class, 'update_variant']);

Route::get('/delete_single_image/{image_id}', [ProductPictureController::class, 'delete']);

Route::post('/create_variant', [VariantController::class, 'create']);

Route::post('/cart', [ProductController::class, 'cart']);

Route::post('/checkout', [ProductController::class, 'checkout']);

Route::post('/check_cart', [ProductController::class, 'show_cart']);

Route::get('/delete_order/{order_id}', [ProductController::class, 'delete_order']);

Route::get('/verify_is_paid/{bill_id}', [BillController::class, 'verify_paid']);

Route::get('/verify_is_cash/{bill_id}', [BillController::class, 'verify_cash']);

Auth::routes();

Route::resource('testimony', TestimonyController::class);
Route::resource('partnership', PartnershipController::class);

Route::put('/testimony/{testimony}/accept', [TestimonyController::class, 'accept'])->name('testimony.accept');
Route::put('/testimony/{testimony}/reject', [TestimonyController::class, 'reject'])->name('testimony.reject');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/testimony', [AdminTestimonyController::class, 'index'])->name('testimony');
    Route::get('/partnership', [AdminPartnershipController::class, 'index'])->name('partnership');
    Route::resource('bookkeeping', BookkeepingController::class);
});
