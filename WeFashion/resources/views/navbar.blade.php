<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <h1>
        <a style="text-decoration: none; color:#66EB9A;text-transform:uppercase;" href="{{ url('/') }}">
        We Fashion
        </a>    
        </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.filter', ['state' => 'en solde']) }}">Soldes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.filter', ['category_id' => 1]) }}">Homme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.filter', ['category_id' => 2]) }}">Femme</a>
                </li>
            </ul>
        </div>
    </div>
</nav>