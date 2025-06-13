<?php

namespace App\Http\Controllers\user;
use App\Models\Product;
use App\Models\users\Offer;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
 public function index()
 {
    $product = Product::with("image")->paginate(4);
    $offer = Offer::with("offer_image")->get();
    // return $product;
    return view('project.layout.main',compact(['product', 'offer']));
 }
}
