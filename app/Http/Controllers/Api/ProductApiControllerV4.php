<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductApiControllerV4 extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|gt:0',
        ]);

        $product = Product::create($validated);

        return response()->json([
            'message' => 'Product created',
            'product' => $product,
        ], 201);
    }
}
