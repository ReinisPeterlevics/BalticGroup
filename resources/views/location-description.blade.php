<?php

$addToCart = App\Helpers\CartHelper::getCartItems()

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Magebit Travel - {{$location[0]->name}}</title>
        <link href="{{asset('/css/app.css')}}" rel="stylesheet" >
        <link href="{{asset('/css/location-description.css')}}" rel="stylesheet" >
        <link href="{{asset('/css/cart.css')}}" rel="stylesheet">
        <script src="{{asset('/js/location-description.js')}}"></script>
        <script src="{{asset('/js/cart.js')}}"></script>
</head>
<body onload="rangeInputHandler()">
    <div class="app">
        <div class="app-container">
            @include('header')
            @include('cart')
            <div class="row content">
                <div class="description-container">
                    <div class="destination-photo">
                        <img class="destination-image" src="{{$location[0]->image}}" alt="destination">
                    </div>
                    <form action="{{route('add-to-cart', ['id'=>$location[0]->location_id])}}" method="POST">
                        @csrf
                        <div class="description">
                            <div class="description-header">
                                <h2>{{$location[0]->name}}</h2>
                            </div>
                            <div class="description-item">
                                <div class="description-item-header">
                                    <p>You will go to</p>
                                </div>
                                <div class="description-item-body">
                                    <p>{{$location[0]->countryname}}</p>
                                </div>
                            </div>
                            <div class="description-item">
                                <div class="description-item-header">
                                    <p>You will travel</p>
                                </div>
                                <div class="description-item-body">
                                    <p>From {{date_format(date_create($location[0]->departure_date),"F j l")}} till {{date_format(date_create($location[0]->return_date),"F j l")}} </p>
                                </div>
                            </div>
                            <div class="description-item">
                                <div class="description-item-header">
                                    <p>At destination you will be</p>
                                </div>
                                <div class="description-item-body">
                                    <p>From {{date_format(date_create($location[0]->start_date),"d.m.Y")}} till {{date_format(date_create($location[0]->end_date),"d.m.Y")}} staying for {{$location[0]->duration}} nights</p>
                                </div>
                            </div>
                            <div class="description-item">
                                <div class="description-item-header">
                                    <p>Hotel</p>
                                </div>
                                <div class="description-item-body">
                                    <p>{{$location[0]->hotel}} &starf;&starf;&starf;&starf;&starf;</p>
                                </div>
                            </div>
                            <div class="description-item">
                                <div class="description-item-header">
                                    <p>More about the place</p>
                                </div>
                                <div class="description-item-body">
                                    <p>{{$location[0]->description}}</p>
                                </div>
                            </div>
                            <div class="half-item">
                                <div class="description-item">
                                    <div class="description-item-header">
                                        <p>Price per person</p>
                                    </div>
                                    <div class="description-item-body">
                                        <p>{{$location[0]->price}} EUR</p>
                                    </div>
                                </div>
                                <div class="description-item">
                                    <div class="description-item-header">
                                        <p>Available slots</p>
                                    </div>
                                    <div class="description-item-body">
                                        <p>{{$location[0]->spots_left}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="range-picker">
                                <input type="range" id="person-count" name="persons" min="1" max="{{$location[0]->spots_left}}" step="1" value="1" onchange="rangeInputHandler()">
                                <label for="persons" id="person-label">1</label>
                                <input type="number" id="person-cost" name="person-cost" value="{{$location[0]->price}}" hidden>
                            </div>
                            <div class="total-cost">
                                <p id="total-cost-p">Price in total: 0 EUR</p>
                            </div>
                            <div class="description-buttons">
                                <input class="back-button add-to-cart-button" type="button" name="back" value="Back" onclick="window.location.href='javascript:history.back()'">
                                <input class="add-to-cart-button" type="submit" name="add-to-cart" value="Add to Cart">
                            </div>
                        </div>
                    </form>
                    <div class="description-buttons-media">
                        <input class="back-button add-to-cart-button" type="button" name="back" value="Back" onclick="window.location.href='javascript:history.back()'">
                        <input class="add-to-cart-button" type="submit" name="add-to-cart" value="Add to Cart">
                    </div>
                </div>
            </div>
            @include('footer')
        </div>
    </div>
</body>
</html>
