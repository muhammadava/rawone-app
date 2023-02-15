<?php

namespace App\Http\Controllers\Dashboard\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Auth;

use App\Models\WarehouseSale;

class WarehousesController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view( 'dashboard.warehouse.warehouses' );
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
            'date' => 'required|date_format:Y-m-d',
            'gross_sales' => 'nullable|numeric',
        ]);

        $totalSale = DB::table('warehouse_sales')
            ->select(DB::raw('SUM(simatupang + margonda + kelapa_gading + etc) as totalSale'))
            ->get();

        $warehousesale = new WarehouseSale;
        $warehousesale->date = $request->input( 'date' );
        $warehousesale->simatupang = $request->input( 'simatupang' );
        $warehousesale->margonda = $request->input( 'margonda' );
        $warehousesale->kelapa_gading = $request->input( 'kelapa_gading' );
        $warehousesale->etc = $request->input( 'etc' );
        $warehousesale->information = $request->input( 'information' );
        $warehousesale->gross_sales = $totalSale[0]->totalSale;
        $warehousesale->percent = $this->calculateTotalPercent();
        $warehousesale->save();

        return redirect()->back();
    }

    public function calculateTotalPercent() {
        $totalPercent = DB::table('warehouse_sales')->sum( 'gross_sales' );
        return $totalPercent;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
