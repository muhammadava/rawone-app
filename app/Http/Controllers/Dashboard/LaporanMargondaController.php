<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ExtraMargonda;

class LaporanMargondaController extends Controller {
    public function index() {
        $sales = ExtraMargonda::all();
        return view( 'dashboard.outletReports.margondaReport.margonda', compact( 'sales' ) );
    }
}
