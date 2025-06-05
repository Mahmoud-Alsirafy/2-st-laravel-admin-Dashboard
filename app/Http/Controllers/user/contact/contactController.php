<?php

namespace App\Http\Controllers\user\contact;

use App\Http\Controllers\Controller;

class contactController extends Controller
{
    public function index(){
        return view('project.contact.main');
    }
}
