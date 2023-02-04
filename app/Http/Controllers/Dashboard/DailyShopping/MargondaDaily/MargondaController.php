<?php

namespace App\Http\Controllers\Dashboard\DailyShopping\MargondaDaily;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function store(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $market = new Market;
        $market->name = $request->name;
        $market->price = $request->price;
        $market->save();

        $id = DB::table( 'outlets' )->select( 'id' )->first();
        $id = $id->id;

        foreach( $item as $key => $items ) {
            $outlet[ 'name' ] = implode(',', $request->input( name[ $key ]) );
            $outlet[ 'price' ] = implode(',', $request->input( price[ $key ]) );

            Outlet::create( $outlet );
        }

        $id = DB::table( 'warehouses' )->select( 'id' )->first();
        $id = $id->id;

        foreach( $item as $key => $items ) {
            $warehouse[ 'name' ] = implode(',', $request->input( name[ $key ]) );
            $warehouse[ 'price' ] = implode(',', $request->input( price[ $key ]) );

            Warehouse::create( $warehouse );
        }

        return redirect()->route('dashboard.dailyShopping.margondaDaily.margonda')->with('success', 'Post created successfully.');
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
