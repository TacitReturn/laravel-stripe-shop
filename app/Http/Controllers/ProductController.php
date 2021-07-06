<?php


namespace App\Http\Controllers;
use App\Models\Product;

class ProductController
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function update()
    {

    }
}
