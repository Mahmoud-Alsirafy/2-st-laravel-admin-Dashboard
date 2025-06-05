<?php

namespace App\Http\Controllers\user\list;

use App\Http\Controllers\Controller;


class listController extends Controller
{
    public function index(){
        return view('project.list.view');
    }
}
