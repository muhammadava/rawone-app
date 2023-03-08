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
        // Hitung waktu 1 tahun kemudian
        $start_date = Carbon::now();
        $end_date = Carbon::now()->addYear();

        $sales = DB::table('extra_margonda')    
                // ->join('gs_margonda', 'gs_margonda.id', '=', 'extra_margonda.gs_id')
                // ->join('utility_margonda', 'utility_margonda.id', '=', 'extra_margonda.utility_id')
                // ->join('adm_margonda', 'adm_margonda.id', '=', 'extra_margonda.adm_id')
                // ->join('etc_margonda', 'etc_margonda.id', '=', 'extra_margonda.etc_id')
                ->whereBetween('extra_margonda.extramargonda_date', [$start_date, $end_date])
                ->orderBy('extra_margonda.extramargonda_date', 'desc');

        $sales = $sales->paginate(31);

        // Looping data untuk menambahkan tag "hr" pada hari Minggu
        foreach ($sales as $sale =>$data) {
            $date = Carbon::parse($data->extramargonda_date);
            if ($date->dayOfWeek === Carbon::SUNDAY) {
                $data->tag = 'hr';
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
