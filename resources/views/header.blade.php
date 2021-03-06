
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/products">Home </a>
                </li>
                <li class="nav-item">
                    @auth
                        <a class="nav-link" href="products/create">Create new product</a>
                    @endauth
                    @guest
                        <a class="nav-link" href="products/create">please login in</a>
                    @endguest
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">view card</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
