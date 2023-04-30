<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'We Fashion') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            <div class="container pt-4">
                <h1>Modifier un produit</h1>
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Prix :</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" min="0" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie :</label>
                        <select class="form-control" id="category" name="category_id" required>
                            <option value="">Sélectionnez une catégorie</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="short_description">Brève description :</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="3" required>{{ $product->short_description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="size">Taille :</label>
                        <select class="form-control" id="size" name="size" required>
                            <option value="">Sélectionnez une taille</option>
                            <option value="XS" {{ $product->size === 'XS' ? 'selected' : '' }}>XS</option>
                            <option value="S" {{ $product->size === 'S' ? 'selected' : '' }}>S</option>
                            <option value="M" {{ $product->size === 'M' ? 'selected' : '' }}>M</option>
                            <option value="L" {{ $product->size === 'L' ? 'selected' : '' }}>L</option>
                            <option value="XL" {{ $product->size === 'XL' ? 'selected' : '' }}>XL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">Etat :</label>
                        <select class="form-control" id="state" name="state" required>
                            <option value="">Choisir l'état</option>
                            <option value="standard" {{ $product->state === 'standard' ? 'selected' : '' }}>Standard</option>
                            <option value="en solde" {{ $product->state === 'en solde' ? 'selected' : '' }}>En solde</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" required>
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                    </div>
                    <div class="mb-3">
                        <label for="is_published">Publié :</label>
                        <div>
                            <label>
                                <input type="radio" name="is_published" value="1" {{ $product->is_published ? 'checked' : '' }}> Oui
                            </label>
                            <label>
                                <input type="radio" name="is_published" value="0" {{ !$product->is_published ? 'checked' : '' }}> Non
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="reference">Référence :<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('reference') is-invalid @enderror" id="reference" name="reference" value="{{ $product->reference }}" required>
                        <div class="invalid-feedback">{{ $errors->first('reference') }}</div>
                    </div>
                    <div class="mb-3 text-end pt-3 pb-5">
                        <button type="submit" class="btn btn-primary btn-no-hover btnupdate">Modifier</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>