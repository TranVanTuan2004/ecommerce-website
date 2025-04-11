<?php


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




