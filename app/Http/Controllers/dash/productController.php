<?php

namespace App\Http\Controllers\dash;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Exception;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with("image")->get();
        return view('dashboard.product.view', compact("product"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.add');
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

                $data = Product::create($request->toArray());

                Image::saveImage($data->id, $image);


                DB::commit();
                return to_route("product.index");
            } catch (\Throwable $th) {
                DB::rollBack();
                return to_route("product.create");
            }
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pro = Product::find($id);
        return view("dashboard.product.edit", compact("pro"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pro = Product::where("id", $id)->get();
        return view("dashboard.product.info", compact("pro"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile("image")) {
            Image::deleteImage($id);
            Image::where("product_id", $id)->delete();
            $products = $request->except("image", "_method", "_token");
            $image = $request->only("image");
            Product::where("id", $id)->update($products);
            Image::saveImage($id, $image["image"]);
            return to_route("product.index");
        } else {
            $data = $request->except("_method", "_token");
            Product::where("id", $id)->update($data);
            return to_route("product.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Image::deleteImage($id);
      Product::where("id", $id)->delete();
      return to_route("product.index");
    }
}
