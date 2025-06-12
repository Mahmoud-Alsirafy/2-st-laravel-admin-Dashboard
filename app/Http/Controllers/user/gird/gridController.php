<?php

namespace App\Http\Controllers\user\gird;

use App\Models\Product;
use App\Http\Controllers\Controller;


class gridController extends Controller
{
    public function index(){
    $product = Product::with("image")->get();

        return view('project.grids.view',compact('product'));
    }
}
