<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Product;
use App\Http\Requests\createProductValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Products extends Controller
{
    protected function find($id)
    {
        return Product::where('id', $id)->firstOrFail();
    }

    protected function ifUserAuthor($id)
    {
        return Auth::id() == $this->find($id)->user_id;
    }

    protected function index()
    {
        return view('products.index', [ 'all_posts' =>  Product::with('card')->get()]);
    }

    protected function show($id)
    {
        return view('products.product', ['product' => $this->find($id)]);
    }

    protected function create()
    {
        if(Auth::User()) {
            return view('products.create');
        } else {
            abort(404);
        }
//        Auth::User() ? view( 'products.create' ) : abort(404);   not working why ????????
    }

    protected function store(createProductValidator $request)
    {
        $name = $request->file('upload_img');
        $path = $request->file('upload_img')->store('/images');
        $product = new Product();
        $product->title = $request['title'];
        $product->user_id = Auth::User()->id;
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->image_name = $name;
        $product->image_path = $path;
        $product->save();
        return redirect('/products');
    }

    protected function edit($id)
    {
        if($this->ifUserAuthor($id)) {
            return view('products.edit', ['product' => $this->find($id)]);
        } else {
            return redirect('/products');
        }
    }

    protected function update(createProductValidator $request ,$id)
    {
        $product = $this->find($id);
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->save();
        return redirect('/products');
    }

    protected  function  storeDelete($id)
    {
        $product = $this->find($id);
        $product->delete();
    }
    public function delete($id)
    {
        $this->ifUserAuthor($id) ? $this->storeDelete($id) : redirect('/products');
        return redirect('/products');
    }
}

