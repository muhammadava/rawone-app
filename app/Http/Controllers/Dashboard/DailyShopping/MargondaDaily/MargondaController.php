<?php

namespace App\Http\Controllers\Dashboard\DailyShopping\MargondaDaily;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Auth;
use PDF;

use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\MarketDetail;
use App\Models\Outlet;
use App\Models\OutletDetail;
use App\Models\Warehouse;
use App\Models\WarehouseDetail;
use App\Models\Reports;

use App\Models\GsMargonda;
use App\Models\UtilityMargonda;
use App\Models\AdmMargonda;
use App\Models\EtcMargonda;

use App\Models\ExtraMargonda;

class MargondaController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $markets = Market::all();
        $outlets = Outlet::all();
        $warehouses = Warehouse::all();
        $gss = GsMargonda::all();
        $utilitys = UtilityMargonda::all();
        $adms = AdmMargonda::all();
        $etcs = EtcMargonda::all();

        $join_markets = DB::table('market_details')
                ->join('markets', 'markets.id', '=', 'market_details.markets_id')
                ->get();
        $join_outlets = DB::table('outlet_details')
                ->join('outlets', 'outlets.id', '=', 'outlet_details.outlets_id')
                ->get();
        $join_warehouses = DB::table('warehouse_details')
                ->join('warehouses', 'warehouses.id', '=', 'warehouse_details.warehouses_id')
                ->get();
            
        $totalMarket = MarketDetail::sum('market_price');
        $totalOutlet = OutletDetail::sum('outlet_price');
        $totalWarehouse = WarehouseDetail::sum('warehouse_price');

        return view( 'dashboard.dailyShopping.margondaDaily.margonda', compact( 'markets', 'outlets', 'warehouses', 'gss', 'utilitys', 'adms', 'etcs', 'join_markets', 'join_outlets', 'join_warehouses', 'totalMarket', 'totalOutlet', 'totalWarehouse' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $join_markets = new MarketDetail;
        $join_markets->markets_id = $request->input( 'market_name' );
        $join_markets->market_price = $request->input( 'market_price' );
        $join_markets->save();

        $join_outlets = new OutletDetail;
        $join_outlets->outlets_id = $request->input( 'outlet_name' );
        $join_outlets->outlet_price = $request->input( 'outlet_price' );
        $join_outlets->save();
    
        $join_warehouses = new WarehouseDetail;
        $join_warehouses->warehouses_id = $request->input( 'warehouse_name' );
        $join_warehouses->warehouse_price = $request->input( 'warehouse_price' );
        $join_warehouses->save();

        $join_tables = new Reports;
        $join_tables->markets_id = $request->input( 'market_name' );
        $join_tables->market_price = $request->input( 'market_price' );
        $join_tables->outlets_id = $request->input( 'outlet_name' );
        $join_tables->outlet_price = $request->input( 'outlet_price' );
        $join_tables->warehouses_id = $request->input( 'warehouse_name' );
        $join_tables->warehouse_price = $request->input( 'warehouse_price' );
        $join_tables->save();

        // Mengambil data field mtd yang terakhir kali di inputkan
        // Pake code ini bisa
        // $lastMtd = Example::orderBy('id', 'desc')->value('mtd');
        // Pake code ini pun juga bisa
        $lastMtd = ExtraMargonda::latest('id')->first()->mtd;
        $newTotal = $request->input( 'gas' ) + $request->input( 'parking' ) + $request->input( 'gs_price' ) + $request->input( 'utility_price' ) + $request->input( 'adm_price' ) + $request->input( 'etc_price' );

        $extradata = new ExtraMargonda;
        $extradata->date = $request->input( 'date' );
        $extradata->gas = $request->input( 'gas' );
        $extradata->parking = $request->input( 'parking' );
        $extradata->gs_id = $request->input( 'gs_name' );
        $extradata->gs_price = $request->input( 'gs_price' );
        $extradata->utility_id = $request->input( 'utility_name' );
        $extradata->utility_price = $request->input( 'utility_price' );
        $extradata->adm_id = $request->input( 'adm_name' );
        $extradata->adm_price = $request->input( 'adm_price' );
        $extradata->etc_id = $request->input( 'etc_name' );
        $extradata->etc_price = $request->input( 'etc_price' );
        $extradata->total = $request->input( 'gas' ) + $request->input( 'parking' ) + $request->input( 'gs_price' ) + $request->input( 'utility_price' ) + $request->input( 'adm_price' ) + $request->input( 'etc_price' );;
        $extradata->mtd = DB::table('extra_margonda')->sum('total');
        $extradata->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
