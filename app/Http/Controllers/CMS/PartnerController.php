<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    //
    public function index($slug)
    {
        $partner = Partner::where('slug',$slug)->first();
        // dd($page->page);
        return view('cms.partners.index',compact(['partner']));
    }
}
