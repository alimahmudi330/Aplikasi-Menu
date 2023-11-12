<?php

use Illuminate\Support\Facades\Route;
/*
|------------------------------------------------------------
--------------
| Web Routes
|------------------------------------------------------------
--------------
|
| Here is where you can register web routes for your 
application. These
| routes are loaded by the RouteServiceProvider and all of 
them will
| be assigned to the "web" middleware group. Make something 
great!
|
*/















Route::get('/', function () {
    return view('welcome');
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
