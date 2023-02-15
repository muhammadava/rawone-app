<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\DailyShopping\MargondaDaily\MargondaController;
use App\Http\Controllers\Dashboard\DailyShopping\SimatupangDaily\SimatupangController;
use App\Http\Controllers\Dashboard\DailyShopping\WarehouseDaily\WarehouseController;

use App\Http\Controllers\Dashboard\Warehouse\WarehousesController;

use App\Http\Controllers\Dashboard\AllReports\ReportsController;
use App\Http\Controllers\Dashboard\AllReports\MargondaReport\MargondaReportController;

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
        Route::resource( '/harian-margonda', MargondaController::class );
        Route::post( '/margonda', [MargondaController::class, 'store'] )->name( 'margonda.store' );
        Route::resource( '/harian-simatupang', SimatupangController::class );
        Route::resource( '/harian-gudang', WarehouseController::class );

        /* Route laporan gudang */
        Route::resource( '/laporan-belanja-gudang', WarehousesController::class );
        Route::get( '/laporan-belanja-gudang/buat-laporan-belanja-gudang/{id}', function( $id ) {
            $validator = Validator::make(['id' => $id], [
                'id' => 'required|exists:warehouse_sales,id'
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }
    
            return view('dashboard.warehouses.sales.create', ['id' => $id]);
        });
        Route::post( 'create', [WarehousesController::class, 'store'] )->name( 'warehouse.store' );
        
        /* Route seluruh laporan */
        Route::get( '/semua-laporan', [ReportsController::class, 'index'] )->name( 'allreports' );

        Route::get( '/semua-laporan/laporan-margonda', [MargondaReportController::class, 'index'] )->name( 'margondareport' );
        Route::get( '/semua-laporan/laporan-margonda/view-pdf-margonda', [MargondaReportController::class, 'cetakPDF'] )->name( 'viewPDFMargonda' );
    });
});

require __DIR__.'/auth.php';
