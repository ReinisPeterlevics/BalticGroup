<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="{{asset('/css/app.css')}}" rel="stylesheet" >
        <link href="{{asset('/css/location-description.css')}}" rel="stylesheet" >
        <script src="{{asset('/js/location-description.js')}}"></script>

        <!-- <link href="/css/app.css" rel="stylesheet" > -->
        <!-- <link href="/css/location-description.css" rel="stylesheet" > -->
        <!-- <script src="/js/location-description.js"></script> -->
</head>
<body>
    <div class="app">
        <div class="app-container">
                @include('header')
            <div class="row content">
                <div class="description-container">
                    <div destination-photo>
                        <img class="destination-image" src="images/Batu_cave.jpg" alt="destination-image">
                    </div>
                    <div class="description">
                        <div class="description-header">
                            <h2>Tour Details</h2>
                        </div>
                        <p><strong>Destination:</strong> Gombak, Selangor, Malaysia</p>
                        <p><strong>Nights:</strong> 5</p>
                        <p><strong>Hotel:</strong> STUDIO Urban360 Gombak &starf;&starf;&starf;&starf;&starf;</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nobis deserunt recusandae placeat amet iste harum provident eligendi inventore doloribus!</p>
                        <p><strong>Price per person: </strong>1500 EUR</p>
                        <p><strong>Available slots: </strong>25</p>
                        <div class="range-picker">
                            <input type="range" id="persons" name="persons" min="1" max="25" step="1" value="1" onchange="rangeInputHandler(this)">
                            <label for="persons" id="personsLabel">1</label>
                        </div>
                        <div class="total-cost">
                            <p id="total-cost">Price in total: 1500 EUR</p>
                        </div>
                        <div class="description-buttons">
                            <a href="{{route('location')}}" class="back-button add-to-cart-button">Back</a>
                            <input class="add-to-cart-button" type="submit" name="add-to-cart" value="Add to Cart">
                        </div>
                    </div>
                    <div class="description-buttons-media">
                        <a href="#" class="back-button add-to-cart-button">Back</a>
                        <input class="add-to-cart-button" type="submit" name="add-to-cart" value="Add to Cart">
                    </div>
                </div>
            </div>
                @include('footer')
        </div>
    </div>
</body>
</html>
