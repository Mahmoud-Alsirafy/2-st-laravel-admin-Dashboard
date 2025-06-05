<?php

namespace App\Http\Controllers\user\single;

use App\Http\Controllers\Controller;

class singleController extends Controller
{
    public function index (){
        return view('project.single.view');
    }
}
