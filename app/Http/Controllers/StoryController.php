<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function newstory() {
        return view('addstory');
    }
}
