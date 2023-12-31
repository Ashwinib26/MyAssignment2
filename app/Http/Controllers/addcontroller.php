<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addcontroller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function adduser() {
        return view('admin.add');
    }
}
