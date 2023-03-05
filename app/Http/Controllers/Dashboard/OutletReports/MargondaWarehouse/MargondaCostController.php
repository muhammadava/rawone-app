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
        // Mendapatkan waktu saat ini
        $now = now();

        // Membuat variabel untuk menampung data yang akan ditampilkan
        $data = collect([]);

        // Looping untuk setiap bulan
        for ($i = 0; $i < 12; $i++) {

            // Menambahkan 1 tahun ke waktu saat ini
            $date = $now->addYear();

            // Menambahkan 1 bulan ke waktu saat ini
            $date = $date->addMonth();

            // Mendapatkan awal dan akhir dari bulan tersebut
            $startOfMonth = $date->startOfMonth();
            $endOfMonth = $date->endOfMonth();

            // Mendapatkan data dari database berdasarkan rentang tanggal
            $dataOfMonth = ExtraMargonda::whereBetween('created_at', [$startOfMonth, $endOfMonth])->get();

            // Menambahkan data ke dalam variabel data
            $sales = $data->concat($dataOfMonth);
            
            // Jika hari saat ini adalah hari minggu
            if ($now->dayOfWeek === 0) {
                // Menambahkan syntax "hr" ke variabel data
                $sales->push('hr');
            }
        }
        
        // Membuat pagination dengan 10 data per halaman
        $sales = DB::table('extra_margonda')
                ->join('gs_margonda', 'gs_margonda.id', '=', 'extra_margonda.gs_id')
                ->join('utility_margonda', 'utility_margonda.id', '=', 'extra_margonda.utility_id')
                ->join('adm_margonda', 'adm_margonda.id', '=', 'extra_margonda.adm_id')
                ->join('etc_margonda', 'etc_margonda.id', '=', 'extra_margonda.etc_id')
                ->paginate(31);
        $totals = ExtraMargonda::sum('total');
        
        return view( 'dashboard.outletReports.margondaReport.margondaCost', ['sales' => $sales, 'totals' => $totals]);
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
