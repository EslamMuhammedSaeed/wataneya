<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Impact;
use App\Models\ImpactNumber;
use App\Models\Story;
use App\Models\Vacancy;
use App\Models\WhoWeArePage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function who_we_are(){
        $sections = WhoWeArePage::get();
        return view('cms.who_we_are',compact(['sections']));
    }
    public function vacancies(){
        $vacancies = Vacancy::get();
        return view('cms.vacancies',compact(['vacancies']));
    }
    public function certificates(){
        $certificates = Certificate::get();
        return view('cms.certificates',compact(['certificates']));
    }

    public function impact(){
        $impact_main = Impact::where('section','main')->get();
        // dd($impact_main);
        $title = $this->language('title');
        $content = $this->language('content');
        $image_src = $this->language('image');
        $impact_main_output = array();
        $stories = Story::get();


        $impact_numbers = ImpactNumber::get();
        foreach($impact_main as $impact_main_item){
            if(!array_key_exists($impact_main_item->$title, $impact_main_output)){
                $impact_main_output[$impact_main_item->$title] = array();
                array_push($impact_main_output[$impact_main_item->$title],$impact_main_item);
            }else{
                array_push($impact_main_output[$impact_main_item->$title],$impact_main_item);
            }


        }
        // dd($impact_main_output);
        return view('cms.impact',compact(['impact_main_output','impact_numbers','stories']));
    }

    public function language($attr)
    {
        return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
    }
                
}
