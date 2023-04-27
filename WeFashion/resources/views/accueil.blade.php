<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>We Fashion</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5f692740b2.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('navbar')
    <!-- Image card produit  -->

    <div class="container p-3">
        <span class="badge bg-light text-dark float-end">Il y a {{ $products->count() }} articles</span>
    </div>
    <div class="row container mx-auto pt-3">
        @foreach ($products as $product)
        <div class="col-sm-3 p-2">
            <a href="{{ route('products.show', $product->id) }}">
                <img class="w-100" src="{{ $product->image }}" alt="Description de l'image">
                <div class="card-body">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">{{ $product->price }} $</p>
                    <p class="card-text">{{ $product->size }}</p>
                    <p class="card-text">{{ $product->state }}</p>
                    <p class="card-text">{{ $product->category_id == 1 ? 'Homme' : 'Femme' }}</p>
                </div>
            </a>
            <!-- Afficher d'autres informations du produit ici -->
        </div>
        @endforeach
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>