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

        <!-- Page Content -->
        <main>
            <form method="POST" class="container needs-validation" action="{{ route('products.store') }}" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="mb-3 pt-4">
                    <label for="name" class="form-label">Nom<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description') }}</textarea>
                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                </div>
                <div class="mb-3">
                    <label for="short_description" class="form-label">Brève description<span class="text-danger">*</span></label>
                    <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" required>{{ old('short_description') }}</textarea>
                    <div class="invalid-feedback">{{ $errors->first('short_description') }}</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prix<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">{{ config('app.currency') }}</span>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
                    </div>
                    <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Catégorie<span class="text-danger">*</span></label>
                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                        <option value="">Sélectionnez une catégorie</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">{{ $errors->first('category_id') }}</div>
                </div>
                <div class="mb-3">
                    <label for="size" class="form-label">Taille<span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <select class="form-select @error('size') is-invalid @enderror" id="size" name="size" required>
                            <option value="" selected disabled hidden>Sélectionnez une taille</option>
                            <option value="XS" {{ old('size') === 'XS' ? 'selected' : '' }}>XS</option>
                            <option value="S" {{ old('size') === 'S' ? 'selected' : '' }}>S</option>
                            <option value="M" {{ old('size') === 'M' ? 'selected' : '' }}>M</option>
                            <option value="L" {{ old('size') === 'L' ? 'selected' : '' }}>L</option>
                            <option value="XL" {{ old('size') === 'XL' ? 'selected' : '' }}>XL</option>
                        </select>
                        <div class="invalid-feedback">{{ $errors->first('size') }}</div>
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">Etat<span class="text-danger">*</span></label>
                        <select class="form-control @error('state') is-invalid @enderror" id="state" name="state" required>
                            <option value="">Choisir l'état</option>
                            <option value="standard" {{ old('state') == 'standard' ? 'selected' : '' }}>Standard</option>
                            <option value="en solde" {{ old('state') == 'en solde' ? 'selected' : '' }}>En solde</option>
                        </select>
                        <div class="invalid-feedback">{{ $errors->first('state') }}</div>
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
                                <input type="radio" name="is_published" value="1" checked> Oui
                            </label>
                            <label>
                                <input type="radio" name="is_published" value="0"> Non
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="reference">Référence :<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="reference" name="reference" required>
                    </div>
                    <div class="mb-3 text-end pt-3 pb-5">
                        <button type="submit" class="btn btn-primary btn-no-hover">Enregistrer</button>
                    </div>
                </div>
            </form>
        </main>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>