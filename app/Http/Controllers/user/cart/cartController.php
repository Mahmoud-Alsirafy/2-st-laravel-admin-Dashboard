<?php

namespace App\Http\Controllers\user\cart;

use App\Http\Controllers\Controller;

class cartController extends Controller
{
    public function index (){
        return view('project.cart.view');
    }
}
