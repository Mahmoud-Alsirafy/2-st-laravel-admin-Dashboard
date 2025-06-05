<?php

namespace App\Http\Controllers\user\gridsidebar;

use App\Http\Controllers\Controller;


class gridsidebarController extends Controller
{
    public function index(){
        return view('project.grid_sidebar.view');
    }
}
