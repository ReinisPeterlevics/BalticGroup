<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Magebit Travel - Locations</title>
        <link href="/css/app.css" rel="stylesheet" >
        <link href="/css/location.css" rel="stylesheet" >
        <link href="/css/location-description.css" rel="stylesheet" >
        <link href="/css/cart.css" rel="stylesheet">
        <script src="/js/cart.js"></script>
    </head>
    <body>
    <div class="app">
        <div class="app-container">
        @include('header')
        @include('cart')
        @if(!empty(Session::get('cartIsVisible')) && Session::get('cartIsVisible') == true)
            <script>
                showCart();
            </script>
        @endif
            <div class="row content">
                <div class="row">
                    @foreach($locations as $location)
                    <div class="loc">
                        <div class="card">
                            <a href="{{route('location-description', ['id' => $location->location_id])}}">
                                <div class="card-img-top">
                                    <img src="{{$location->image}}" alt="destination">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$location->name}}</h5>
                                    <p class="card-subtitle">{{$location->countryname}} in {{$location->seasonname}}</p>
                                    <p class="sub">For {{$location->price}} € per person</p>
                                    <p class="card-text">{{$location->description}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="back-to-search">
                    <input class="back-button add-to-cart-button" type="button" name="back" value="Back" onclick="window.location.href='javascript:history.back()'">
                </div>
            </div>
        @include('footer')
        </div>
    </div>
</body>
</html>


