<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DetailProdukController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/salam', function () {
    return 'Assalamualaikum';
});

Route::get('/hallo', function () {
    return view('hallo');
});

Route::get('/hallo2', function () {
    return view('hallo.halloworld');
});

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'store']);

Route::group(['middleware'=>['auth','role:admin-manager']],function(){
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/tables', [DashboardController::class, 'index']);

//ini adalah kategori
Route::get('/kategori', [KategoriController::class, 'index']);

//ini adalah pesanan
Route::get('/pesanan', [PesananController::class, 'index']);

//ini adalah produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/update', [ProdukController::class, 'update']);
Route::get('/produk/view/{id}', [ProdukController::class, 'view']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
