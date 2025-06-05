<?php

namespace App\Http\Controllers\user\error;

use App\Http\Controllers\Controller;

class errorController extends Controller
{
    public function index()
    {
        return view('project.404.404');
    }
}
