<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\UserConsultation;
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
use TCG\Voyager\Alert\Components\TitleComponent;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataRestored;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;

class SearchController extends Controller
{
    public function index()

    {
        $data = ConsultationCategory::all();
        $cfaq = CommonQuestion::simplePaginate(5);
        return view('users.consultation_faq', ['data' => $data], ['cfaq' => $cfaq]);
    }


    public function search()
    {

        $search_text = $_GET['search'];
        $requestFaq1 = CommonQuestion::where('title', 'LIKE', '%' . $search_text . '%')->get();
        $requestFaq = CommonQuestion::where('content', 'LIKE', '%' . $search_text . '%')->get();
        $data1 = Consultation::wherehas('category', function ($query) use ($search_text) {
            $query->where('name', $search_text);
        })->get();
        return view('users.consultation_faq_search', compact('requestFaq1', 'requestFaq', 'data1'));

        //->with('consultationCategory')->simplePaginate(5)
    }
}
