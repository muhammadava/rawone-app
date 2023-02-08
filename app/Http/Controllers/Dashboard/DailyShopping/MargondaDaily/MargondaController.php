<?php

namespace App\Http\Controllers\Dashboard\DailyShopping\MargondaDaily;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
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
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $collection = collect([
            ['id' => 1, 'name' => 'timun', 'timun', 'wortel'],
        ]);
        $collection->implode( 'name',', ' );
        $markets = $collection;
        $markets->price = $request->price;

        $collection = collect([
            ['id' => 1, 'name' => 'roti_tawar', 'es_batu', 'freshmilk'],
        ]);
        $collection->implode( 'name',', ' );
        $outlets = $collection;
        $outlets[ 'price' ] = $request->price[ 'price' ];

        $collection = collect([
            ['id' => 1, 'name' => 'kuah_rawon', 'dengkul', 'daging'],
        ]);
        $collection->implode( 'name',', ' );
        $warehouses = $collection;
        $warehouses[ 'price' ] = $request->price[ 'price' ];

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
