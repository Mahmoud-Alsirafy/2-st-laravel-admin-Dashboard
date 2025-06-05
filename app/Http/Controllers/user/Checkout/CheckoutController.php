<?php

namespace App\Http\Controllers\user\Checkout;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index (){
        return view('project.Checkout.view');
    }
}
