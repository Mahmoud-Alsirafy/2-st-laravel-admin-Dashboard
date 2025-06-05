<?php

namespace App\Http\Controllers\user\gird;

use App\Http\Controllers\Controller;


class gridController extends Controller
{
    public function index(){
        return view('project.grids.view');
    }
}
