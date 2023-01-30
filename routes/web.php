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
        Route::resource( '/margonda', MargondaController::class );
        Route::post( '/margonda', [MargondaController::class, 'store'] )->name( 'margonda.store' );

        Route::resource( '/simatupang', SimatupangController::class );

        Route::resource( '/gudang', WarehouseController::class );
    });
});

require __DIR__.'/auth.php';
