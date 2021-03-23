@extends ('products.layout')

    @section ('content')
        @foreach ($all_posts as $key => $product)
            <h1><a href="products/{{ $key }}"> {{ $product['title'] }} </a></h1>
            <div class="picture">
                <img src="{{ $product['image_url'] }}" alt="{{ $product['title']}}">
            </div>
        @endforeach
    @endsection
