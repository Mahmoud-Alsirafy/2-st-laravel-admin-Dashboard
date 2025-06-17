<?php

namespace App\Http\Controllers\user\offer;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\users\Offer;

class offerDetailsController extends Controller
{
    public function index()
    {
        return view('project.offer.view');
    }

    public function show(string $id )
    {
        $product = Offer::with('offer_image')->findOrFail($id);
        return view('project.offer.view', compact('product'));
    }
}
