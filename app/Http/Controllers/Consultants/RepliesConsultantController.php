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
use App\Notifications\ConsultationReplied;
use App\Notifications\ConsultationRepliedByConsultant;
use App\Traits\ZoomJWT;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Notification;

class RepliesConsultantController extends Controller
{
    use ZoomJWT;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;
    public function index($id)
    {
        // $data= Consultation::find($id);
        // $reply= ConsultationReply::where('consultation_id', $data->id)->get();
        // $user=Auth::user();
        // return view('consultants.consultation_admin_chat', compact('data','id','user','reply'));
        $data= Consultation::find($id);
        $replies= ConsultationReply::where('consultation_id', $id)->get();
        $user=Auth::user();
        // dd($replies);
        return view('consultants.consultation_admin_chat', compact('data','id','user','replies'));
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
        //$consultationid= Consultation::get()->id;
        // $user=Auth::user();
        // $consultant= Consultant::where('user_id', $user->id)->first();
        // $consultation = new ConsultationReply;
        // $consultation->consultation_id = $request->id;
        // $consultation->content = $request->content;
        // $consultation->attachment = $request->attachment;
        // $consultation->status = 'submitted';
        // $consultation->user_id = Auth::user()->id;
        // $consultation->consultant_id = $consultant->id;
        // $consultation->owner = '0';
        // $consultation->save();
        // return redirect()->back();
        // $consultation = Consultation::find($id);

        // dd($request);

        $consultation = Consultation::find($id);

        $saved_path = "";
        if($request->file('attachment')){
            $path = 'public/replies/'.Carbon::now()->format('d-m-Y');
            $file_name = str_replace(' ', '_', Auth::user()->name.'_reply');
            $saved_path =  env('APP_URL').'/storage/replies/'.Carbon::now()->format('d-m-Y').'/'.$file_name.'.'.$request->attachment->getClientOriginalExtension();
            $request->file('attachment')->storeAs($path, $file_name.'.'.$request->attachment->getClientOriginalExtension());

        }
        $reply = ConsultationReply::create([
            'consultation_id' => $consultation->id,
            'content' => $request->content,
            'owner' => '0',
            'consultant_id' => Auth::user()->consultant->id,
            'status' =>'submitted',
            'attachment' => $saved_path,
        ]);

        

        $path = 'users/me/meetings';


        if($request->start_time){
            $response = $this->zoomPost($path, [
                'topic' => $consultation->category->name,
                'type' => self::MEETING_TYPE_SCHEDULE,
                'start_time' => $this->toZoomTimeFormat($request->start_time),
                'duration' => 30,
                'agenda' => 'nothing',
                'settings' => [
                    'host_video' => false,
                    'participant_video' => false,
                    'waiting_room' => true,
                ]
            ]);
            $data = json_decode($response->body());
            $meeting_link = $data->start_url;
            $reply->meeting_url = $meeting_link; 
            $reply->meeting_time = $request->start_time;
            $reply->save();
        }
        
        // return back();

        $users = User::whereHas('role',function($q){
            $q->whereHas('permissions',function($q2){
                $q2->where('key','browse_consultations');
            });
        })->get();
        Notification::send($users, new ConsultationRepliedByConsultant($consultation));

        return redirect()->back()->with('msg', __('site.sent successfully'));
        //dd($consultation);

    }
}
