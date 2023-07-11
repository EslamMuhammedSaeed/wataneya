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
use Carbon\Carbon;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->orderBy('id','desc')->paginate(5);
        $tap = __('site.all consultations');
        return view('users.consultation_main', compact('tap','userconsultations'));
    }
    public function newConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'submitted')->orderBy('id','desc')->paginate(5);
        $tap = __('site.new consultations');
        //dd($userconsultations);
        return view('users.consultation_main', compact('tap','userconsultations'));
    }
    public function closedConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'closed')->orderBy('id','desc')->paginate(5);
        $tap = __('site.closed consultations');
        return view('users.consultation_main', compact('tap','userconsultations'));
    }
    public function assignedConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'assigned')->orderBy('id','desc')->paginate(5);
        $tap = __('site.assigned consultations');
        return view('users.consultation_main', compact('tap','userconsultations'));
    }
    public function rejectedConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'rejected')->orderBy('id','desc')->paginate(5);
        $tap = __('site.rejected consultations');
        return view('users.consultation_main', compact('tap','userconsultations'));
    }


    public function create()
    {
        $user=Auth::user();
        $phone="";
        $categories = ConsultationCategory::get();

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

        return view('users.consultation_request', compact('user', 'phone','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company_validated = $request->validate([
            'title' => ['required', 'string'],
            'category' => ['required', 'exists:consultation_categories,id'],
            'content' => ['required', 'string'],
            'attachment' => ['file'],
        ]);
        $saved_path = '';
        if($request->file('attachment')){
            $path = 'public/consultations/'.Carbon::now()->format('d-m-Y');
            $file_name = str_replace(' ', '_', Auth::user()->name);
            $saved_path =  env('APP_URL').'/storage/consultations/'.Carbon::now()->format('d-m-Y').'/'.$file_name.'.'.$request->attachment->getClientOriginalExtension();
            $request->file('attachment')->storeAs($path, $file_name.'.'.$request->attachment->getClientOriginalExtension());

        }
        $consultation = Consultation::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,
            'status' =>'submitted',
            'attachment' => $saved_path,
        ]);

        return redirect()->back()->with('msg', __('site.sent successfully'));
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
        return redirect()->back()->with('msg', __('site.consultation was closed successfully'));;
       }
}
