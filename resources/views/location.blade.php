<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="css/app.css" rel="stylesheet" >
        <link href="css/location.css" rel="stylesheet" >
        <link href="css/location-description.css" rel="stylesheet" >
    </head>
    <body>
    <div class="app">
        <div class="app-container">
            @include('header')
            <div class="row content">
                @foreach($locations as $location)
                <div class="loc">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{$location['name']}}</h5>
                                    <p class="card-text">{{$location['description']}}</p>
                                    <a href="{{route('about')}}" class="search-button">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @include('footer')
        </div>
        </div>
    </body>
</html>


