<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $board = Board::get();
        return view('cms.board.index',compact(['board']));
    }
    public function show($id)
    {
        $board_member = Board::find($id);
        return view('cms.board.show',compact(['board_member']));
    }

}