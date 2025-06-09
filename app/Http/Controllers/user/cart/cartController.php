<?php

namespace App\Http\Controllers\user\cart;

use App\Models\users\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\users\cartRequest;

class cartController extends Controller
{
    public function index (){
        return view('project.cart.view');
    }

    public function store(cartRequest $request)
{
    // dd($request->all());

    try {
        DB::beginTransaction();


        cart::create($request->only(['product_id', 'Quantity']));

        DB::commit();
        toastr()->success("Success Added to cart");
        return to_route("cart.index");

    } catch (\Throwable $e) {
        DB::rollBack();


        toastr()->error("Something went wrong");
        return to_route("details.show", ['detail' => $request->product_id]);
    }
}
}
