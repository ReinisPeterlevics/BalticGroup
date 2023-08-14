<header>
    <nav>
        <a href="{{route('home')}}"><div class="logo">LOGO</div></a>
        <a href="{{route('about')}}">About us</a>
        <div class="cart">CART</div>
    </nav>
</header>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Travel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid ms-4 me-4">
                <a class="navbar-brand" href="{{route('home')}}">LOGO</a>
                <div class="navbar-collapse justify-content-end">
                    <ul class="navbar-nav me-3 me-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active me-2" aria-current="page" href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

