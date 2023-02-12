<?php

namespace App\Http\Controllers\Dashboard\AllReports\MargondaReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use PDF;

class MargondaReportController extends Controller {
    public function index() {
        $join_markets = DB::table('market_details')
                ->join('markets', 'markets.id', '=', 'market_details.markets_id')
                ->get();
        $join_outlets = DB::table('outlet_details')
                ->join('outlets', 'outlets.id', '=', 'outlet_details.outlets_id')
                ->get();
        $join_warehouses = DB::table('warehouse_details')
                ->join('warehouses', 'warehouses.id', '=', 'warehouse_details.warehouses_id')
                ->get();
        return view( 'dashboard.allReports.margondaReport.margondaReport', compact( 'join_markets', 'join_outlets', 'join_warehouses' ) );
    }

    public function cetakPDF() {
        // Cara ke 1 untuk menampilkan semua join data 
        $join_tables = DB::table('reports')
                ->join('markets', 'markets.id', '=', 'reports.markets_id')
                ->join('outlets', 'outlets.id', '=', 'reports.outlets_id')
                ->join('warehouses', 'warehouses.id', '=', 'reports.warehouses_id')
                ->join('market_details', 'market_details.markets_id', '=', 'reports.id')
                ->join('outlet_details', 'outlet_details.outlets_id', '=', 'reports.id')
                ->join('warehouse_details', 'warehouse_details.warehouses_id', '=', 'reports.id')
                ->get();

        // Cara ke 2
        // $join_tables = DB::table('markets')
                // ->join('markets', 'markets.id', '=', 'markets.id')
                // ->get();
        // $join_tables = DB::table('outlets')
                // ->join('outlets', 'outlets.id', '=', 'outlets.id')
                // ->get();
        // $join_tables = DB::table('warehouses')
                // ->join('warehouses', 'warehouses.id', '=', 'warehouses.id')
                // ->get();
        // $join_tables = DB::table('market_details')
                // ->join('market_details', 'market_details.markets_id', '=', 'market_details.markets_id')
                // ->get();
        // $join_tables = DB::table('outlet_details')
                // ->join('outlet_details', 'outlet_details.outlets_id', '=', 'outlet_details.outlets_id')
                // ->get();
        // $join_tables = DB::table('warehouse_details')
                // ->join('warehouse_details', 'warehouse_details.warehouses_id', '=', 'warehouse_details.warehouses_id')
                // ->get();

        // Cara ke 3
        // $tables = DB::table('market_details')
                // ->join('markets', 'markets.id', '=', 'market_details.markets_id')
                // ->get();
        // $tables = DB::table('outlet_details')
                // ->join('outlets', 'outlets.id', '=', 'outlet_details.outlets_id')
                // ->get();
        // $tables = DB::table('warehouse_details')
                // ->join('warehouses', 'warehouses.id', '=', 'warehouse_details.warehouses_id')
                // ->get();

        // Cara ke 4
        // $tables = MarketDetail::all();
        // $tables = OutletDetail::all();
        // $tables = WarehouseDetail::all();

        $pdf = PDF::loadview( 'dashboard.allReports.margondaReport.viewMargonda', compact( 'join_tables' ) )->setpaper( 'A4', 'potrait' );
        return $pdf->stream( 'laporan-harian-margonda.pdf' );
    }
}
