<?php

namespace App\Http\Controllers\Dashboard\AllReports\MargondaReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use PDF;

use App\Models\MarketDetail;
use App\Models\OutletDetail;
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
        $join_markets = DB::table('market_details')
                ->join('markets', 'markets.id', '=', 'market_details.markets_id')
                ->get();
        $join_outlets = DB::table('outlet_details')
                ->join('outlets', 'outlets.id', '=', 'outlet_details.outlets_id')
                ->get();
        $join_warehouses = DB::table('warehouse_details')
                ->join('warehouses', 'warehouses.id', '=', 'warehouse_details.warehouses_id')
                ->get();
        $pdf = PDF::loadview( 'dashboard.allReports.margondaReport.viewMargonda', compact( 'join_markets', 'join_outlets', 'join_warehouses' ) )->setpaper( 'A4', 'potrait' );
        return $pdf->stream( 'laporan-harian-margonda.pdf' );
    }
}
