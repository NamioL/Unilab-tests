@extends ('products.layout')
    @section ('content')
        <section>
            <h1><a href="/products">Products: </a> {{ $product['title'] }}</h1>
            <div class="picture">
                <img src="{{ $product['image_url'] }}" alt="{{ $product['title'] }}">
            </div>
        </section>
        <section>
            <h1>list items: </h1>
            @foreach ($list_items as $key => $product)
                    <article>
                        <h1><a href="{{ $key }}"> {{ $product['title'] }} </a></h1>
                        <div class="picture">
                            <img src="{{ $product['image_url'] }}" alt="{{ $product['title']}}">
                        </div>
                    </article>
            @endforeach
        </section>