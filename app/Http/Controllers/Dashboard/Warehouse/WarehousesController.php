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

    public function calculateTotalGrossSales() {
        $total = DB::table('warehouse_sales')->sum('simatupang', 'margonda', 'kelapa_gading', 'etc');
        return $total;
    }   

    public function calculateTotalPercent() {
        $total = DB::table('warehouse_sales')->sum('simatupang', 'margonda', 'kelapa_gading', 'etc', 'percent');
        return $total;
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
        ]);

        $extramargonda = new WarehouseSale;
        $extramargonda->date = $request->input( 'date' );
        $extramargonda->simatupang = $request->input( 'simatupang' );
        $extramargonda->margonda = $request->input( 'margonda' );
        $extramargonda->kelapa_gading = $request->input( 'kelapa_gading' );
        $extramargonda->etc = $request->input( 'etc' );
        $extramargonda->information = $request->input( 'information' );
        $extramargonda->gross_sales = $this->calculateTotalGrossSales();
        $extramargonda->percent = $this->calculateTotalPercent();
        $extramargonda->save();

        return redirect()->back();
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
