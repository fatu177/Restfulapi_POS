<?php

namespace App\Http\Controllers;

use App\Http\Resources\productDetailResource;
use App\Http\Resources\productResource;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function products()
    {
        $products = Products::all();
        return productResource::collection($products);
    }
    public function product($id)
    {
        $product = products::findorfail($id);
        return new productDetailResource($product);
    }

}
