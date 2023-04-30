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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/5f692740b2.js" crossorigin="anonymous"></script>
</head>
@include('navbar')
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ optional($product)->image }}" alt="{{ optional($product)->name }}">
        </div>
        <div class="col-lg-6">
            @if($product)
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>{{ $product->short_description }}</p>
            <p>{{ $product->category_id == 1 ? 'Homme' : 'Femme' }}</p>
            <p>{{ $product->state }}</p>
            @endif
            <form>
                <div class="form-group pb-4">
                    <label for="size">Taille</label>
                    <select class="form-control" id="size">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>
                <p>{{ $product->price }}€</p>
                <button type="submit" class="btn btn-primary">Acheter</button>
            </form>
        </div>
    </div>
</div>
@include('footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>