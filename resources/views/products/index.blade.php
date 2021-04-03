@extends ('products.layout')

    @section ('content')
    
    <h2><a href="products/create">Create new product</a></h2>
        @foreach ($all_posts as $product)
            <h1><a href="products/{{ $product->id }}"> {{ $product->title }} </a></h1>
            <div class="picture">
                <img src="../storage/{{ $product->image_path }}" alt="{{ $product->title}}">
            </div>
            <div class="edit">
                <a href="products/{{ $product->id }}/edit"> edit product</a>
            </div>
            <div class="delete">
                <a href="products/{{ $product->id }}/delete"> delete product</a>
            </div>
        @endforeach
    @endsection
