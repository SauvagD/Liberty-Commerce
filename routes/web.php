<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/', [App\Http\Controllers\AuthController::class, 'home'])->name('home');

Route::get('/catalog', [App\Http\Controllers\AuthController::class, 'catalog'])->name('catalog');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
//Route::post('/add/{id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add');
Route::post('/panier/add/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('cart_add');
Route::post('/panier/direct/{id}', [App\Http\Controllers\CartController::class, 'direct'])->name('cart_direct');
Route::get('/panier', [App\Http\Controllers\CartController::class, 'index'])->name('cart_index');
Route::get('/admin', [App\Http\Controllers\productController::class, 'auth'])->name('admin');
Route::post('/store', [App\Http\Controllers\productController::class, 'store'])->name('store');
Route::get('/product/{product}', [App\Http\Controllers\productController::class, 'product'])->name('product.maj');
Route::get('/quantity', [App\Http\Controllers\HomeController::class, 'show'])->name('quantity');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/quantité/{id}', [App\Http\Controllers\EditController::class, 'quantité'])->name('quantité');
