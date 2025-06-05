<?php

namespace App\Http\Controllers\user\faq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function index(){
        return view('project.faq.main');
    }
}
