<?php

namespace App\Http\Controllers;

use App\Models\Product;

class Products extends Controller
{
    protected function find($id) 
    {
            return Product::where('id', $id)->firstOrFail();
    }

    protected function index() 
    {
        return view('products.index', [ 'all_posts' => Product::get()]);
    }

    protected function show($id)
    {
        return view('products.product', ['product' => $this->find($id)]);
    }

    protected function create() 
    {
        return view('products.create');
    }

    protected function store() 
    {
        request()->validate([
            'title'=> 'required | max:255',
            'description'=> 'required'
        ]);
        $product = new Product();
        $product->title = request()->title;
        $product->description = request()->description;
        $product->save();
        return redirect('/products');
    }

    protected function edit($id) 
    {
        return view('products.edit', ['product' => $this->find($id)]);
    }

    protected function update($id) 
    {
        request()->validate([
            'title'=> 'required | max:255',
            'description'=> 'required'
        ]);
        $product = $this->find($id);
        $product->title = request()->title;
        $product->description = request()->description;
        $product->save();
        return redirect('/products');
    }

    protected function delete($id) 
    {
        $product = $this->find($id);
        $product->delete();
        return redirect('/products');
    }
}
