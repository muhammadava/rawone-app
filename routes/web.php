<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\DailyShopping\MargondaDaily\MargondaController;
use App\Http\Controllers\Dashboard\DailyShopping\SimatupangDaily\SimatupangController;
use App\Http\Controllers\Dashboard\DailyShopping\WarehouseDaily\WarehouseController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.content.dashboardHome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/dashboard')->group(function () {
        Route::get( '/margonda', [MargondaController::class, 'index'] )->name( 'margonda' );
        Route::get( '/simatupang', [SimatupangController::class, 'index'] )->name( 'simatupang' );
        Route::get( '/gudang', [WarehouseController::class, 'index'] )->name( 'gudang' );
    });

});

require __DIR__.'/auth.php';
