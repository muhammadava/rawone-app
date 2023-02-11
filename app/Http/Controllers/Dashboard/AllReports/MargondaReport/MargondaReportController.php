<?php

namespace App\Http\Controllers\Dashboard\AllReports\MargondaReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MargondaReportController extends Controller {
    public function index() {
        return view( 'dashboard.allReports.margondaReport.margondaReport' );
    }
}
