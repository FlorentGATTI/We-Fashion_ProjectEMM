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

<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">
                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">We Fashion</span>
                </div>
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <form action="{{ route('login') }}" method="POST" style="width: 23rem;">
                        @csrf
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Se connecter</h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            <label class="form-label" for="email">Adresse e-mail</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required autocomplete="current-password" />
                            <label class="form-label" for="password">Mot de passe</label>
                        </div>
                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>