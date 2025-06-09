<?php

namespace App\Http\Controllers\user\details;

use App\Models\Product;
use App\Http\Controllers\Controller;


class detailsController extends Controller
{
    public function index()
    {
        return view('project.details.view');
    }

    public function show(string $id )
    {
        $product = Product::with('image')->findOrFail($id);
        return view('project.details.view', compact('product'));
    }
}
