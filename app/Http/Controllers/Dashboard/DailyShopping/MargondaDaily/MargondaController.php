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
        $markets = Market::where('id');
        $outlets = Outlet::where('id');
        $warehouses = Warehouse::where('id');
        return view( 'dashboard.dailyShopping.margondaDaily.margonda', compact( 'markets', 'outlets', 'warehouses' ) );
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

        $markets = new Market;
        $markets->name = $request->name;
        $markets->price = $request->price;
        $markets->save();

        foreach( $id as $key => $items ) {
            $outlets = new Outlet;
            $outlets[ 'name' ] = $request->name[ $key ];
            $outlets[ 'price' ] = $request->price[ $key ];

            Outlet::create( $outlets );
        }

        foreach( $item as $key => $items ) {
            $warehouses = new Warehouse;
            $warehouses[ 'name' ] = $request->name[ $key ];
            $warehouses[ 'price' ] = $request->price[ $key ];

            Warehouse::create( $warehouses );
        }

        return redirect(route('dashboard.dailyShopping.margondaDaily.margonda'))->with('success', 'Post created successfully.');
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
