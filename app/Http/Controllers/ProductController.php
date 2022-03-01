<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $viewBag['products'] = Product::orderBy('id', 'desc')->get();

        return view('products.index', $viewBag);
    }


    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        $viewBag['product'] = $product;
        return view('products.show', $viewBag);
    }


    public function edit(Product $product)
    {
        $viewBag['product'] = $product;
        return view('products.edit', $viewBag);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
