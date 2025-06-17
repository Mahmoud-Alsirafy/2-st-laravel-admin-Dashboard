<?php

namespace App\Http\Controllers\user\cart;

use App\Models\users\Cart;
use App\Models\users\Offer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\users\cartRequest;

class cartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product.image', 'offer.offer_image')->where('user_id', Auth::id())->get();

        return view('project.cart.view', compact('carts'));
    }

    public function store(cartRequest $request)
    {

        $type = $request->type;

        if ($type == 'product') {

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
        }elseif($type == 'offer'){
            try {
                DB::beginTransaction();


                cart::create([
                    'offer_id' => $request->product_id,
                    'Quantity' => $request->Quantity,
                    'user_id' => Auth::id(),

                ]);
                DB::commit();
                toastr()->success("Success Added to cart");
                return to_route("cart.index");
            } catch (\Throwable $e) {
                DB::rollBack();


                toastr()->error("Something went wrong");
                return to_route("offer_Details.show", ['detail' => $request->product_id]);
                // return to_route("details.show", ['detail' => $request->product_id]);


            }
        }else{
            return to_route("error.index");
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
