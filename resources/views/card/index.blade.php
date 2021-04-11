<div id="card-wrapper">
    <h1>Card List</h1>

    @foreach( $cards as $card)
        <article>
            <h1>Card item Name: {{ $card->title }}</h1>
            <h1>Card item description: {{ $card->description }}</h1>
            <hr/>
        </article>
    @endforeach
</div>
