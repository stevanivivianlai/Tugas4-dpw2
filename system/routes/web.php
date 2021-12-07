<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('template', function () {
    return view('admin.template');
});

Route::get('login', [AuthController::class, 'showLogin']);

Route::get('register', function () {
    return view('register');
});

Route::get('admin/profile', [HomeController::class, 'showProfile']);


Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk/create', [ProdukController::class, 'store']);



Route::get('admin/beranda', [HomeController::class, 'showBeranda']);

Route::get('admin/kategori', [HomeController::class, 'showKategori']);

Route::get('/brand', [indexController::class, 'showbrand']);

Route::get('/shoes', [indexController::class, 'showshoes']);

Route::get('/search', [indexController::class, 'showsearch']);

Route::get('/keranjang', [indexController::class, 'showkeranjang']);

Route::get('/kategori', [indexController::class, 'showkategori']);

Route::get('/detail', [indexController::class, 'showdetail']);

Route::get('admin/produk/{produk}', [ProdukController::class, 'show']);
Route::get('admin/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('admin/produk/update/{produk}', [ProdukController::class, 'update']);
Route::delete('admin/produk/{produk}', [ProdukController::class, 'destroy']);