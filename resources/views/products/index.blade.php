@extends ('products.layout')

    @section ('content')

        <div class="row">
            @foreach ($all_posts as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="products/{{ $product->id }}"><img class="card-img-top" src="../storage/{{ $product->image_path }}" alt="{{ $product['title'] }}"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="products/{{ $product->id }}">Item One</a>
                            </h4>

                            <h5>{{ $product->price }} $</h5>
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>--}}
                        </div>
                        <div class="card-footer">
                            @auth
                                <div class="edit btn col-3 bg-dark">
                                    <a href="products/{{ $product->id }}/edit"> edit</a>
                                </div>
                                <div class="delete btn col-3 bg-danger">
                                    <a href="products/{{ $product->id }}/delete"> delete</a>
                                </div>
                                <div class="add-to-the-cart btn col-3 bg-success">
                                    <a href="products/cards/{{ $product->id }}/create"> add</a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
        @endforeach

        </div>
    @endsection
