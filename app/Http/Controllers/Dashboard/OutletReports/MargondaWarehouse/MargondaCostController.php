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
        $sales = DB::table('extra_margonda')   
                ->join('gs_margonda', 'extra_margonda.gs_id', '=', 'gs_margonda.id')
                ->join('utility_margonda', 'extra_margonda.utility_id', '=', 'utility_margonda.id')
                ->join('adm_margonda', 'extra_margonda.adm_id', '=', 'adm_margonda.id')
                ->join('etc_margonda', 'extra_margonda.etc_id', '=', 'etc_margonda.id')
                ->where('extra_margonda.extramargonda_date', '>=', date('Y-m-d', strtotime('1 January')))
                ->where('extra_margonda.extramargonda_date', '<=', date('Y-m-d', strtotime('31 December')))
                ->orderBy('extra_margonda.extramargonda_date', 'asc')
                ->paginate(31);

        // Menambahkan tag "hr" pada setiap hari Minggu
        foreach ($sales as $sale => $data) {
            if (date('N', strtotime($data->extramargonda_date)) == 7) {
                $data->tag = "<hr>";
            } else {
                $data->tag = "";
            }
        }

        $totals = ExtraMargonda::sum('total');
        
        return view( 'dashboard.outletReports.margondaReport.margondaCost', compact('sales', 'totals'));
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
