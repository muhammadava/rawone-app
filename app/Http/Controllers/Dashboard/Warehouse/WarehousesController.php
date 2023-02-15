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
        return view( 'dashboard.warehouses.sales.warehouseSales' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    public function calculateTotalPercent() {
        $totalPercent = DB::table('warehouse_sales')->sum( 'gross_sales' );
        return $totalPercent;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:warehouse_sales,id',
            'date' => 'required|date_format:Y-m-d',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $warehousesale = new WarehouseSale();
        $warehousesale->date = $request->input( 'date' );
        $warehousesale->simatupang = $request->input( 'simatupang' );
        $warehousesale->margonda = $request->input( 'margonda' );
        $warehousesale->kelapa_gading = $request->input( 'kelapa_gading' );
        $warehousesale->etc = $request->input( 'etc' );
        $warehousesale->information = $request->input( 'information' );
        $warehousesale->gross_sales = $request->input( 'simatupang' ) + $request->input( 'margonda' ) + $request->input( 'kelapa_gading' ) + $request->input( 'etc' );
        $warehousesale->percent = $this->calculateTotalPercent();
        $warehousesale->save();

        return redirect()->to_route( 'dashboard.warehouses.sales.warehouseSales' );
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
