<?php

namespace App\Http\Controllers\dash;

use App\Models\users\Offer;
use App\Models\users\Offer_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;


class offerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offer = Offer::with("offer_image")->get();
        return view('dashboard.offer.view', compact("offer"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.offer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    { {
            try {
                DB::beginTransaction();


                $products = $request->except("image");

                $image = $request->only("image");

                $data = Offer::create($request->toArray());

                Offer_image::saveImage($data->id, $image);


                DB::commit();
                return to_route("offer.index");
                toastr()->success("Success Added Offer");
            } catch (\Throwable $th) {
                DB::rollBack();
                return to_route("offer.create");
                toastr()->error("Something Wrong!");
            }
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pro = Offer::find($id);
        return view("dashboard.offer.edit", compact("pro"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pro = Offer::where("id", $id)->get();
        return view("dashboard.offer.info", compact("pro"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile("image")) {
            Offer_image::deleteImage($id);
            Offer_image::where("offer_id", $id)->delete();
            $products = $request->except("image", "_method", "_token");
            $image = $request->only("image");
            Offer::where("id", $id)->update($products);
            Offer_image::saveImage($id, $image["image"]);
            return to_route("offer.index");
            toastr()->success("Success Update Offer");
        } else {
            $data = $request->except("_method", "_token");
            Offer::where("id", $id)->update($data);
            return to_route("offer.index");
            toastr()->error("Something Wrong!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Offer_image::deleteImage($id);
      Offer::where("id", $id)->delete();
      return to_route("offer.index");
      toastr()->warning("Success Delete Offer");
    }
}
