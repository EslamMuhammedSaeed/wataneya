<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    //
    public function index()
    {
        $stories = Story::get();
        return view('cms.stories.index',compact(['stories']));
    }

    public function show($id)
    {
        $story = Story::find($id);
        return view('cms.stories.show',compact(['story']));
    }
}
