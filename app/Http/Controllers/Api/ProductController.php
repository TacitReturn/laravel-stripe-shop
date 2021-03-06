<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // return all products

        return Product::with('categories:id,name')
            ->get();
    }

    public function show(Product $product)
    {
        $product->load('categories:id, name');

        return $product;
    }
}
