<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Magebit Travel - {{$location[0]->name}}</title>
        <link href="{{asset('/css/app.css')}}" rel="stylesheet" >
        <link href="{{asset('/css/location-description.css')}}" rel="stylesheet" >
        <script src="{{asset('/js/location-description.js')}}"></script>
</head>
<body>
    <div class="app">
        <div class="app-container">
            @include('header')
            <div class="row content">
                <div class="description-container">
                    <div destination-photo>
                        <img class="destination-image" src="{{$location[0]->image}}" alt="destination">
                    </div>
                    <div class="description">
                        <div class="description-header">
                            <h2>{{$location[0]->name}}</h2>
                        </div>
                        <p><strong>Destination:</strong> {{$location[0]->countryname}}</p>
                        <p><strong>Nights:</strong> {{$location[0]->duration}}</p>
                        <p><strong>Hotel:</strong> {{$location[0]->hotel}} &starf;&starf;&starf;&starf;&starf;</p>
                        <p>{{$location[0]->description}}</p>
                        <p><strong>Price per person: </strong>{{$location[0]->price}} EUR</p>
                        <p><strong>Available slots: </strong>{{$location[0]->spots_left}}</p>
                        <div class="range-picker">
                            <input type="range" id="persons" name="persons" min="1" max="{{$location[0]->spots_left}}" step="1" value="1" onchange="rangeInputHandler(this)">
                            <label for="persons" id="personsLabel">1</label>
                        </div>
                        <div class="total-cost">
                            <p id="total-cost">Price in total: {{$location[0]->price}} EUR</p>
                        </div>
                        <div class="description-buttons">
                            <a href="{{route('location')}}" class="back-button add-to-cart-button">Back</a>
                            <input class="add-to-cart-button" type="submit" name="add-to-cart" value="Add to Cart">
                        </div>
                    </div>
                    <div class="description-buttons-media">
                        <a href="{{route('location')}}" class="back-button add-to-cart-button">Back</a>
                        <input class="add-to-cart-button" type="submit" name="add-to-cart" value="Add to Cart">
                    </div>
                </div>
            </div>
            @include('footer')
        </div>
    </div>
</body>
</html>
