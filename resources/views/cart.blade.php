<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/cart.css">
    <link rel="stylesheet" href="/css/location-description.css">
    <script src="js/home.js"></script>
</head>
<body>
    <div class="cart-wrapper">
        <div class="cart-container">
            <div class="cart-header">
                <h1>Your Travel Cart</h1>
                <div>
                    <button class="close-button">&times</button>
                </div>
            </div>
            @foreach($locations as $location)
                <ul class="cart-items">
                    <li class="cart-item">
                        <img src="images/paragliding.jpg" alt="mountains" class="cart-item-image">
                        <div class="cart-item-info">
                            <div class="cart-item-details">
                                <h3 class="cart-item-title">{{ $location->name }}</h3>
                                <p class="cart-item-country">{{ $location->countryname }}</p>
                            </div>
                            <div class="cart-item-quantity">
                                <p class="cart-item-price">$ {{ $location->price }}</p>
                                <div class="buttons">
                                    <button class="minus-button">-</button>
                                    <input type="number" value="{{ $location->quantity }}" min="1" max="10">
                                    <button class="plus-button">+</button>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="cart-summary">
                <div class="cart-summary-title">
                    <h2>Total: $ {{ $totalPrice }}</h2>
                </div>
                <div class="checkout-button">
                    <button><a href="#">Checkout</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
