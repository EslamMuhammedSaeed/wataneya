<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\UserConsultation;
use App\Http\Requests\StoreOrganisationRequest;
use App\Http\Requests\StoreIndividualRequest;
use App\Models\Individual;
use App\Models\Organisation;
use App\Models\User;
use App\Models\Consultant;
use App\Models\Consultation;
use App\Models\ConsultationCategory;
use App\Models\CommonQuestion;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->orderBy('id','desc')->simplePaginate(2);
        //dd($userconsultations);
        return view('users.consultation_main', compact('userconsultations'));
    }
    public function newConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'submitted')->orderBy('id','desc')->simplePaginate(2);
        //dd($userconsultations);
        return view('users.consultation_main', compact('userconsultations'));
    }
    public function closedConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'closed')->orderBy('id','desc')->simplePaginate(2);
        //dd($userconsultations);
        return view('users.consultation_main', compact('userconsultations'));
    }
    public function assignedConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'assigned')->orderBy('id','desc')->simplePaginate(2);
        //dd($userconsultations);
        return view('users.consultation_main', compact('userconsultations'));
    }
    public function rejectedConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'rejected')->orderBy('id','desc')->simplePaginate(2);
        //dd($userconsultations);
        return view('users.consultation_main', compact('userconsultations'));
    }


    public function create()
    {
        $user=Auth::user();
        $phone="";
        if ($user->individual) {
            $phone= $user->individual->phone;
        }
        else if($user->organisation)

        {
            $phone= $user->organisation->phone;
        }
        else if($user->Orphanage)
        {
            $phone= $user->Orphanage->mobile;
        }

        return view('users.consultation_request', compact('user', 'phone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consultation = new Consultation;
        $consultation->title = $request->title;
        $consultation->content = $request->content;
        $consultation->attachment = $request->attachment;
        $consultation->status = 'submitted';
        $consultation->user_id = Auth::user()->id;
        //dd($consultation);
        $consultation->save();
        return redirect()->back()->with('msg', 'تم إرسال طلب الاستشارة بنجاح');
    }

    public function status($id) {

        //$withdraw = new Consultation; '/consultation/main' ->with('message', 'Success', compact('withdraw'));
        //$withdraw = $request->input('status');
        $withdraw = Consultation::select('status')->where('id', $id)->first();
        Consultation::where('id' , $id)->update(['status'=>'closed']);

        //$withdraw -> status = 'closed';
        //$withdraw->save();
        //DB::update('update consultations set status ?', [$withdraw]);
        //dd($withdraw);
        return redirect()->back()->with('msg', 'تم سحب الاستشارة');;
       }
}
