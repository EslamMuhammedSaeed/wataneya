<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function show($id)
    {
        $service = Service::find($id);
        // dd($service->sub_services);

        return view('cms.services.index',compact(['service']));
    }
}
