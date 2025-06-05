<?php

namespace App\Http\Controllers\user\about;

use App\Http\Controllers\Controller;

class aboutController extends Controller
{
    public function index (){
        return view('project.about.main');
    }
}
