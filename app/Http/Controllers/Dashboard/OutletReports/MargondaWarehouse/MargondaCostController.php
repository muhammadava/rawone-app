<?php

namespace App\Http\Controllers\Dashboard\OutletReports\MargondaWarehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ExtraMargonda;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class MargondaCostController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $now = Carbon::now();
        $oneYearLater = $now->copy()->addYear();

        $sales = ExtraMargonda::whereBetween('created_at', [$now, $oneYearLater])
                ->orderBy('created_at', 'desc')
                ->paginate(31);

        $totals = ExtraMargonda::sum('total');
        
        return view( 'dashboard.outletReports.margondaReport.margondaCost', ['sales' => $sales, 'totals' => $totals]);
    }

    /**
     * Show the form for creating a new 
     * resource.
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
