<?php

namespace App\Http\Controllers\user\mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mailController extends Controller
{
   public function index()
    {
        return view('project.body.main');
    }
}
