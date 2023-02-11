<?php

namespace App\Http\Controllers\Dashboard\AllReports\MargondaReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use PDF;

use App\Models\Market;
use App\Models\MarketDetail;
use App\Models\Outlet;
use App\Models\OutletDetail;
use App\Models\Warehouse;
use App\Models\WarehouseDetail;

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
        // $join_tables = DB::table('markets')
                // ->join('markets', 'markets.id', '=', 'markets.id')
                // ->join('outlets', 'outlets.id', '=', 'outlets.id')
                // ->join('warehouses', 'warehouses.id', '=', 'warehouses.id')
                // ->join('market_details', 'market_details.markets_id', '=', 'market_details.markets_id')
                // ->join('outlet_details', 'outlet_details.outlets_id', '=', 'outlet_details.outlets_id')
                // ->join('warehouse_details', 'warehouse_details.warehouses_id', '=', 'warehouse_details.warehouses_id')
                // ->get();

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

        // $allTables = [
        //     Market::all();
        //     MarketDetail::all();
        //     Outlet::all();
        //     OutletDetail::all();
        //     Warehouse::all();
        //     WarehouseDetail::all();
        // ];

        $pdf = PDF::loadview( 'dashboard.allReports.margondaReport.viewMargonda', compact( 'join_tables' ) )->setpaper( 'A4', 'potrait' );
        return $pdf->stream( 'laporan-harian-margonda.pdf' );
    }
}
