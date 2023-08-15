<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
        <link href="css/app.css" rel="stylesheet" >
        <link href="css/location.css" rel="stylesheet" >
    </head>
    <body>
        @include('header')
        <div class="loc container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Mountain</h5>
                            <p class="card-text">Mountain from Wikipedia</p>
                            <button href="{{route('about')}}" class="search-button">More</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        @include('footer')
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
    </body>
</html>


