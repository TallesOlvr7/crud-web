<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public  function store(CreateProductRequest $request):JsonResponse
    {
        $productRequest = $request->validated();
        $product = Product::create($productRequest);

        return response()->json($product);
    }

    public function all():JsonResponse
    {
        $products = Product::all();
        return response()->json($products);
    }
}
