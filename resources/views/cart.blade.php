<div id="cart" class="cart-overlay">
    <div class="cart-wrapper">
        <div class="cart-container">
            <div class="cart-header">
                <h1>Your Travel Cart</h1>
                <div>
                    <button type="button" onclick="hideCart()" class="close-button">&times</button>
                </div>
            </div>
            @if($locations)
                <ul class="cart-items">
                @foreach($locations as $location)
                    <!-- For each goes here -->
                    <li class="cart-item" id="LOCATION_ID_HERE" value="600">
                        <!-- Location image here -->
                        <img src="images/paragliding.jpg" alt="mountains" class="cart-item-image">
                        <div class="cart-item-info">
                            <div class="cart-item-details">
                                <h3 class="cart-item-title">{{ $location->name }}</h3>
                                <p class="cart-item-country">{{ $location->countryname }}</p>
                            </div>
                            <div class="cart-item-quantity">
                                <!-- Location price here -->
                                <p class="cart-item-price">{{ $location->price }}</p>
                                <div class="buttons">
                                    <button class="minus-button" onclick="minusCountHandler('LOCATION_ID_HERE')">-</button>
                                    <!-- Start value the one that user selected and max read from the table -->
                                    <input type="number" id="LOCATION_ID_HERE-count" class="cart-item-count" value="1" min="1" max="10">
                                    <button class="plus-button" onclick="plusCountHandler('LOCATION_ID_HERE')">+</button>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>
                    <div class="cart-summary">
                    <div class="cart-summary-title">
                        <!-- Total cost -->
                        <h2 id="total-cost">Total: $ {{ $totalPrice }}</h2>
                    </div>
                    <div class="checkout-button">
                        <button><a href="#">Checkout</a></button>
                    </div>
                </div>
            @else
                <p>Your cart is empty!</p>
            @endif
        </div>
    </div>
</div>




<!-- <!DOCTYPE html>
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
            @if($locations)
                <ul class="cart-items">
                    @foreach($locations as $location)
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
            @else
                <p>Your cart is empty!</p>
            @endif
        </div>
    </div>
</body>
</html> -->
