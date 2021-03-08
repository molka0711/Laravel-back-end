<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backcontroller extends Controller
{
    public function index(){
        return view ('login');
    }
}
