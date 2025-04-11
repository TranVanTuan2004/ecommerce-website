<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;




use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');



//Route brand
Route::get('dashboard/brand', [BrandController::class, 'index'])->name('brand.index');
Route::get('dashboard/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('dashboard/brand', [BrandController::class, 'store'])->name('brand.store');

Route::get('dashboard/brand/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
Route::put('dashboard/brand/{id}', [BrandController::class, 'update'])->name('brand.update');
Route::delete('dashboard/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');


//Route user
Route::resource('users', UserController::class);

//Route auth
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


