@extends ('products.layout')
    @section ('content')
        <section>
            <h1><a href="/products">Products: </a> {{ $product['title'] }}</h1>
            <div class="picture">
                <img src="{{ $product['image_url'] }}" alt="{{ $product['title'] }}">
            </div>
        </section>
    @endsection