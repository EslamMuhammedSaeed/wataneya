<?php

namespace App\Http\Controllers\Consultants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrganisationRequest;
use App\Http\Requests\StoreIndividualRequest;
use App\Models\Individual;
use App\Models\Organisation;
use App\Models\User;
use App\Models\Consultant;
use App\Models\Consultation;
use App\Models\ConsultationCategory;
use App\Models\CommonQuestion;
use App\Models\ConsultationReply;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class RepliesConsultantController extends Controller
{
    public function index($id)
    {
        $data= Consultation::find($id);
        $reply= ConsultationReply::where('consultation_id', $data->id)->get();
        $user=Auth::user();
        return view('consultants.consultation_admin_chat', compact('data','id','user','reply'));
    }

/*     public function reply($id)
    {
        $reply= ConsultationReply::find($id);
        $user=Auth::user();
        return view('users.consultation_chat', compact('id','user','reply'));
    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$consultationid= Consultation::get()->id;
        $user=Auth::user();
        $consultant= Consultant::where('user_id', $user->id)->first();
        $consultation = new ConsultationReply;
        $consultation->consultation_id = $request->id;
        $consultation->content = $request->content;
        $consultation->attachment = $request->attachment;
        $consultation->status = 'submitted';
        $consultation->user_id = Auth::user()->id;
        $consultation->consultant_id = $consultant->id;
        $consultation->owner = '0';
        $consultation->save();
        return redirect()->back();
        //dd($consultation);

    }
}
