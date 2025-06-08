<?php

namespace App\Http\Controllers\user;
use App\Models\Product;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
 public function index()
 {
    $product = Product::with("image")->get();
    // return $product;
    return view('project.layout.main',compact('product'));
 }
}
