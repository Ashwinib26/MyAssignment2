<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editcontroller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function edituser() {
        return view('admin.edit');
    }
}
