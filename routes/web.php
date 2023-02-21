<?php

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Slide;
use App\Models\Klien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KlienLoginController;
use App\Http\Controllers\KlienRegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SlideController;


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

// semua tampilan
Route::get('/', function () {
    return view('home', [
        'products' => Product::latest()->filter(request(['search', 'category']))->get(),
        'slides' => Slide::all()
    ]);
});

Route::get('/products', function () {
    return view('products', [
        'products' => Product::latest()->filter(request(['search', 'category']))
        ->paginate(9)->withQueryString()
    ]);
});

Route::get('/products/{product:slug}', function (Product $product) {
    return view('product', [
        'product' => $product
    ]);
});
 
Route::get('/profile', function () {
    return view('profile');
});

// klien 
Route::get('/klien/klienLogin', [KlienLoginController::class, 'index']);
Route::post('/klien/klienLogin', [KlienLoginController::class, 'authenticate']);
Route::post('/klien/klienLogout', [KlienLoginController::class, 'logout']);

Route::get('/klien/klienRegister', [KlienRegisterController::class, 'index'])->middleware('guest');
Route::post('/klien/klienRegister', [KlienRegisterController::class, 'store']);


Route::get('/cart', [CartController::class, 'index'])->middleware('klien')->name('cart.index');
//Route::post('/cart/add', 'CartController@add')->name('cart.add');
Route::post('/cart', [CartController::class, 'store'])->middleware('klien')->name('cart.store');



// admin 
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');})->middleware('auth');

Route::get('/dashboard/products/checkSlug', [ProductController::class, 'checkSlug'])
    ->middleware('auth');
    
Route::resource('/dashboard/products', ProductController::class)
    ->middleware('auth');
    
Route::get('/dashboard/categories/checkSlug', [CategoryController::class, 'checkSlug'])
    ->middleware('auth');

Route::resource('/dashboard/categories', CategoryController::class)->except('show')
    ->middleware('auth');
    
Route::resource('/dashboard/slides', SlideController::class)->except('show')
    ->middleware('auth');