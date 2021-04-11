@extends ('products.layout')

    @section ('content')
        @auth
            <h1>{{ \Illuminate\Support\Facades\Auth::User()->name }}</h1>
            <h2><a href="products/create">Create new product</a></h2>


        @endauth
        @guest
            <h1>please login in</h1>
        @endguest

        @foreach ($all_posts as $product)
            <h1><a href="products/{{ $product->id }}"> {{ $product->title }} </a></h1>
            <div class="picture">
                <img src="../storage/{{ $product->image_path }}" alt="{{ $product->title}}">
            </div>
            @auth
                <div class="edit">
                    <a href="products/{{ $product->id }}/edit"> edit product</a>
                </div>
                <div class="delete">
                    <a href="products/{{ $product->id }}/delete"> delete product</a>
                </div>
                <div class="add-to-the-cart">
                    <a href="products/{{ $product->id }}/addCard"> add to the card</a>
                </div>
            @endauth
            <hr>

        @endforeach
    @endsection
