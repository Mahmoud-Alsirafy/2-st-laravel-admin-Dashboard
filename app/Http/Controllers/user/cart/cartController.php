<?php

namespace App\Http\Controllers\user\cart;

use App\Models\users\Cart;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\users\cartRequest;

class cartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')->where('user_id', Auth::id())->get();
        $products = $carts->pluck('product')->unique('id')->values();
        // return $products;
        return view('project.cart.view',compact('products'));
    }

    public function store(cartRequest $request)
    {
        // dd($request->all());

        try {
            DB::beginTransaction();


            Cart::create([
                'product_id' => $request->product_id,
                'Quantity' => $request->Quantity,
                'user_id' => Auth::id(),

            ]);
            DB::commit();
            toastr()->success("Success Added to cart");
            return to_route("cart.index");
        } catch (\Throwable $e) {
            DB::rollBack();


            toastr()->error("Something went wrong");
            return to_route("details.show", ['detail' => $request->product_id]);
        }
    }

    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        toastr()->success("Success Deleted from cart");
        return to_route("cart.index");
    }
}
