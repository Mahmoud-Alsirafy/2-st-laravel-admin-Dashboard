<?php

namespace App\Http\Controllers\user\details;

use App\Http\Controllers\Controller;


class detailsController extends Controller
{
    public function index(){
        return view('project.details.view');
    }
}
