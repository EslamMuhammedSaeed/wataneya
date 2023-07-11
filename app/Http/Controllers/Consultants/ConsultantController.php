<?php

namespace App\Http\Controllers\Consultants;

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
use App\Notifications\ConsultationRejectedByConsultant;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class ConsultantController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->orderBy('id','desc')->paginate(5);
        $tap = __('site.all consultations');
        return view('consultants.consultation_admin', compact('tap','userconsultations'));
    }
    public function newConsultations()
    {
        $consultant=Auth::user()->consultant;
        $userconsultations = Consultation::where('consultant_id', Auth::user()->id)->where('status', 'assigned')->whereDoesntHave('replies', function($q) use($consultant){
            $q->where('owner', '0')->where('consultant_id', $consultant->id);
        })->orderBy('id','desc')->paginate(5);
        $tap = __('site.new consultations');
        //dd($userconsultations);
        return view('consultants.consultation_admin', compact('tap','userconsultations'));
    }
    public function closedConsultations()
    {
        $consultant=Auth::user()->consultant;
        $userconsultations = Consultation::where('consultant_id', Auth::user()->id)->where('status', 'closed')->orderBy('id','desc')->paginate(5);
        $tap = __('site.closed consultations');
        return view('consultants.consultation_admin', compact('tap','userconsultations'));
    }
    public function assignedConsultations()
    {
        $consultant=Auth::user()->consultant;
        // dd($consultant->id);
        $userconsultations = Consultation::where('consultant_id', Auth::user()->id)->where('status', 'assigned')->whereHas('replies', function($q) use($consultant){
            $q->where('owner', '0')->where('consultant_id', $consultant->id);
        })->orderBy('id','desc')->paginate(5);
        $tap = __('site.assigned consultations');
        return view('consultants.consultation_admin', compact('tap','userconsultations'));
    }
    // public function rejectedConsultations()
    // {
    //     $consultant=Auth::user()->consultant;
    //     $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'rejected')->orderBy('id','desc')->paginate(5);
    //     $tap = __('site.rejected consultations');
    //     return view('consultants.consultation_admin', compact('tap','userconsultations'));
    // }

    // public function index()
    // {
    //     $user=Auth::user();
    //     $userconsultations = Consultant::where('user_id',$user->id)->simplePaginate(10);
    //     //dd($userconsultations);
    //     return view('consultants.consultation_admin', compact('userconsultations'));
    //     //return view('consultants.layout.inc._sidebar_rtl', compact('userconsultations'));

    // }

    // public function newConsultations()
    // {
    //     $user=Auth::user();
    //     $consultant= Consultant::where('user_id', $user->id)->first();
    //     $userconsultations= Consultation::where('consultant_id', $consultant->id)->where('consultations.status','submitted')->simplePaginate(10);
    //     //dd($userconsultations);
    //     return view('consultants.consultation_admin', compact('userconsultations'));
    // }

    // public function closedConsultations()
    // {
    //     $user=Auth::user();
    //     $consultant= Consultant::where('user_id', $user->id)->first();
    //     $userconsultations= Consultation::where('consultant_id', $consultant->id)->where('consultations.status','closed')->simplePaginate(10);
    //             //dd($userconsultations);
    //     return view('consultants.consultation_admin', compact('userconsultations'));
    // }

    // public function assignedConsultations()
    // {
    //     $user=Auth::user();
    //     $consultant= Consultant::where('user_id', $user->id)->first();
    //     $userconsultations = Consultation::where('consultant_id', $consultant->id)->where('status', 'assigned')->whereHas('replies', function($q) use($consultant){
    //         $q->where('owner', '0')->where('consultant_id', $consultant->id);
    //     })->orderBy('id','desc')->simplePaginate(10);
    //     //dd($userconsultations);
    //     return view('consultants.consultation_admin', compact('userconsultations'));
    // }

/*     public function rejectedConsultations()
    {
        $user=Auth::user();
        $userconsultations = Consultation::where('user_id', $user->id)->where('status', 'rejected')->orderBy('id','desc')->simplePaginate(2);
        //dd($userconsultations);
        return view('consultants.consultation_admin', compact('userconsultations'));
    } */

    public function status($id) {

        $withdraw = Consultation::select('status')->where('id', $id)->first();
        Consultation::where('id' , $id)->update(['status'=>'closed']);
        return redirect()->back()->with('msg', 'تم سحب الاستشارة');;
       }

    public function reject($id) {

        $consultation = Consultation::where('id', $id)->first();
        $consultation->update([
            'status'=>'rejected'
        ]);
        $users = User::whereHas('role',function($q){
            $q->whereHas('permissions',function($q2){
                $q2->where('key','browse_consultations');
            });
        })->get();
        Notification::send($users, new ConsultationRejectedByConsultant($consultation));

        return redirect()->back()->with('msg', __('site.rejected successfully'));
    }
    public function close($id) {

        $consultation = Consultation::where('id', $id)->first();
        $consultation->update([
            'status'=>'closed'
        ]);
        return redirect()->back()->with('msg', __('site.closed successfully'));
    }
}
