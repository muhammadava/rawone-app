<?php

namespace App\Http\Controllers\Dashboard\DailyShopping\MargondaDaily;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Str;
use App\Models\Market;
use App\Models\MarketDetail;
use App\Models\Outlet;
use App\Models\OutletDetail;
use App\Models\Warehouse;
use App\Models\WarehouseDetail;

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
        $join_markets = DB::table('market_details')
                ->join('markets', 'markets.id', '=', 'market_details.markets_id')
                ->get();
        $join_outlets = DB::table('outlet_details')
                ->join('outlets', 'outlets.id', '=', 'outlet_details.outlets_id')
                ->get();
        $join_warehouses = DB::table('warehouse_details')
                ->join('warehouses', 'warehouses.id', '=', 'warehouse_details.warehouses_id')
                ->get();

        return view( 'dashboard.dailyShopping.margondaDaily.margonda', compact( 'markets', 'outlets', 'warehouses', 'join_markets', 'join_outlets', 'join_warehouses' ) );
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
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        
        $join_markets = new MarketDetail;
        $join_markets->user_id = Auth::user()->id;
        $join_markets->markets_id = $request->input( 'name' );
        $join_markets->price = $request->input( 'price' );
        $join_markets->save();

        $join_outlets = new OutletDetail;
        $join_outlets->user_id = Auth::user()->id;
        $join_outlets->outlets_id = $request->input( 'name' );
        $join_outlets->price = $request->input( 'price' );
        $join_outlets->save(); 

        $join_warehouses = new WarehouseDetail;
        $join_warehouses->user_id = Auth::user()->id;
        $join_warehouses->warehouses_id = $request->input( 'name' );
        $join_warehouses->price = $request->input( 'price' );
        $join_warehouses->save();

        return redirect::back();
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
