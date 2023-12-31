<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deletecontroller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function deleteuser() {
        return view('admin.delete');
    }
}
