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
                <div class="row">
                    @foreach($locations as $location)
                    <div class="loc">
                        <div class="card">
                            <a href="{{route('location-description', ['id' => $location->location_id])}}">
                                <div class="card-img-top">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$location->name}}</h5>
                                    <p class="card-subtitle">{{$location->countryname}} in {{$location->seasonname}}</p>
                                    <p class="sub">{{$location->hotel}}</p>
                                    <p class="card-text">{{$location->description}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @include('footer')
        </div>
    </div>
</body>
</html>


