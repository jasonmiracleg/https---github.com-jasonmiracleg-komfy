<?php

use App\Http\Controllers\TestimonyController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::resource('testimony', TestimonyController::class);
Route::put('/testimony/{testimony}/accept', [TestimonyController::class, 'accept'])->name('testimony.accept');
Route::put('/testimony/{testimony}/reject', [TestimonyController::class, 'reject'])->name('testimony.reject');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
