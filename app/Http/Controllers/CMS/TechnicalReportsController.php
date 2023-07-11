<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\TechnicalReport;
use Illuminate\Http\Request;

class TechnicalReportsController extends Controller
{
    //
    public function index()
    {
        $reports = TechnicalReport::get();
        return view('cms.technical_reports.index',compact(['reports']));
    }
}
