<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h1 class="text-uppercase">
            <a style="text-decoration: none; color:#66EB9A;" href="{{ url('/') }}">
                We Fashion
            </a>
        </h1> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
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