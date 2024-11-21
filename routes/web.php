<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\Kapalwajibcontroller;
use App\Http\Controllers\WajibRetribusiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriRetribusiController;
use App\Http\Controllers\RekeningController;

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
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/login', [LoginController::class, 'login'])->name('auth.login');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::controller(KategoriRetribusiController::class)->prefix('kategori-retribusi')->name('kategori-retribusi.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

Route::controller(WajibRetribusiController::class)->prefix('wajib-retribusi')->name('wajib-retribusi.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', action: 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

Route::controller(RekeningController::class)->prefix('rekening')->name('rekening.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', action: 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

Route::controller(KapalController::class)->prefix('kapal')->name('kapal.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', action: 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

Route::controller(Kapalwajibcontroller::class)->prefix('Kapalwajib')->name('Kapalwajib.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', action: 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});