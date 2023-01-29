<?php

namespace App\Http\Controllers\Dashboard\DailyShopping\MargondaDaily;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Market;
use App\Models\Outlet;
use App\Models\Warehouse;

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
        return view( 'dashboard.dailyShopping.margondaDaily.margonda', compact( 'markets', 'outlets', 'warehouses' ));
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
        $data = $request->all();
        $market = new Market;
        $market->name = $data[ 'name' ];
        $market->price = $data[ 'price' ];
        $market->qty = $data[ 'qty' ];
        $market->save();
        
        $outlet = new Outlet;
        $outlet->name = $data[ 'name' ];
        $outlet->price = $data[ 'price' ];
        $outlet->qty = $data[ 'qty' ];
        $outlet->save();

        $warehouse = new Warehouse;
        $warehouse->name = $data[ 'name' ];
        $warehouse->price = $data[ 'price' ];
        $warehouse->qty = $data[ 'qty' ];
        $warehouse->save();

        return redirect()->route('dashboard.dailyShopping.margondaDaily.margonda')->with( 'sukses', 'Data berhasil di tambahkan.' );
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
