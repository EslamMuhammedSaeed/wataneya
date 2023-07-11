<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //
    public function index(){
        return view('contact_us');
    }
    public function send(Request $request){
        // dd($request);
        Mail::to(env('MAIL_USERNAME'))
            ->send(new ContactUs($request->name,$request->message,$request->email,$request->phone));
        return back();
    }
}
