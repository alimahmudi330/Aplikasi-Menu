<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudsController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('auth/login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

// Menampilkan daftar buku (Read)
Route::get(
    '/menu',
    'App\Http\Controllers\MenuController@index'
)->name('menu.index');
// Menampilkan form tambah buku
Route::get(
    '/menu/create',
    'App\Http\Controllers\MenuController@create'
)->name('menu.create');
// Menyimpan buku baru ke database (Create)
Route::post(
    '/menu',
    'App\Http\Controllers\MenuController@store'
)->name('menu.store');
// Menampilkan form edit buku
Route::get(
    '/menu/{id_menu}/edit',
    'App\Http\Controllers\MenuController@edit'
)->name('menu.edit');
// Menyimpan perubahan pada buku (Update)
Route::put(
    '/menu/{id_menu}',
    'App\Http\Controllers\MenuController@update'
)->name('menu.update');
Route::get(
    '/menu/{id_menu}',
    'App\Http\Controllers\MenuController@destroy'
)->name('menu.destroy');



//pny Ali

Route::get('/cruds', [App\Http\Controllers\CrudsController::class, 'index'])->name('cruds');
Route::get('/customer/menu', [CustomerController::class, 'showMenu'])->name('customer.menu');
Route::get('/customer/cart', [CustomerController::class, 'showCart'])->name('customer.cart');
