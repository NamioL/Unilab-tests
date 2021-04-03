<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\createProductValidator;
use Illuminate\Http\Request;

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

    protected function store(createProductValidator $request) 
    {
        $name = $request->file('upload_img');
        $path = $request->file('upload_img')->store('/images');
        $product = new Product();
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->image_name = $name;
        $product->image_path = $path;
        $product->save();
        return redirect('/products');
    }

    protected function edit($id) 
    {
        return view('products.edit', ['product' => $this->find($id)]);
    }

    protected function update(createProductValidator $request ,$id) 
    {
        $product = $this->find($id);
        $product->title = $request['title'];
        $product->description = $request['description'];
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
