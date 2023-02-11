<?php

namespace App\Http\Controllers\Dashboard\AllReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller {
    public function index() {
        return view( 'dashboard.allReports.reports' );
    }
}
