<?php

namespace App\Http\Controllers\Users;

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
use App\Notifications\ConsultationRepliedByUser;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class RepliesController extends Controller
{
    public function index($id)
    {
        $data= Consultation::find($id);
        $replies= ConsultationReply::where('consultation_id', $id)->get();
        $user=Auth::user();
        // dd($replies);
        return view('users.consultation_chat', compact('data','id','user','replies'));
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
    public function store(Request $request,$id)
    {
        $consultation = Consultation::find($id);

        $saved_path = "";
        // dd($request);
        if($request->file('attachment')){
            $path = 'public/replies/'.Carbon::now()->format('d-m-Y');
            $file_name = str_replace(' ', '_', Auth::user()->name.'_reply');
            $saved_path =  env('APP_URL').'/storage/replies/'.Carbon::now()->format('d-m-Y').'/'.$file_name.'.'.$request->attachment->getClientOriginalExtension();
            $request->file('attachment')->storeAs($path, $file_name.'.'.$request->attachment->getClientOriginalExtension());

        }
        $reply = ConsultationReply::create([
            'consultation_id' => $consultation->id,
            'content' => $request->content,
            'owner' => '1',
            'user_id' => Auth::user()->id,
            'status' =>'approved',
            'attachment' => $saved_path,
        ]);
        $consultation->consultant->user->notify(new ConsultationRepliedByUser($consultation));

        return redirect()->back()->with('msg', __('site.sent successfully'));
        //$consultationid= Consultation::get()->id;
        //dd($consultation);

    }

}
