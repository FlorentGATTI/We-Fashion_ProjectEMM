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
@include('navbar')
<div class="pt-4">
    <div class="card mb-3 container pt-4" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="dropdown pb-2">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-warning">Acheter</button>
                </div>
            </div>
            <p>Aspernatur dolores incidunt iaculis molestias corrupti laudantium penatibus maecenas, vitae, integer occaecat magni saepe odio, nulla tempus exercitation! Ullamcorper corporis gravida rutrum! Maecenas quas, inceptos elementum felis lacinia? Sed nonummy, mauris, debitis? Aspernatur quod labore numquam, aliqua consectetur debitis! Quisque sapien. Adipiscing! Est tortor dictum provident. Eaque tenetur, neque voluptatum quo gravida veritatis anim, architecto duis sagittis? Mi, sapien phasellus, senectus venenatis incidunt, malesuada! Incidunt asperiores lectus elit erat in dignissimos assumenda, soluta odio, wisi mus quo minim. Illum, libero fuga facilis lacus quod, condimentum, mollit magnis, perspiciatis qui gravida ipsa sit tempus cursus, reprehenderit lacinia distinctio do occaecati consectetur.</p>
        </div>
    </div>
</div>


@include('footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>