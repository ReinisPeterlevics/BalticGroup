<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/location-description.css">
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
            <ul class="cart-items">
                <li class="cart-item">
                    <img src="images/paragliding.jpg" alt="mountains" class="cart-item-image">
                    <div class="cart-item-info">
                        <div class="cart-item-details">
                            <h3 class="cart-item-title">Swiss Tour Package</h3>
                            <p class="cart-item-country">Switzerland</p>
                            <p class="cart-item-price">$500</p>
                        </div>
                        <div class="cart-item-quantity">
                            <button class="minus-button">-</button>
                            <input type="number" value="1" min="1" max="10">
                            <button class="plus-button">+</button>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <img src="images/Batu_cave.jpg" alt="Batu" class="cart-item-image">
                    <div class="cart-item-info">
                        <div class="cart-item-details">
                            <h3 class="cart-item-title">Malaysia Tour Package</h3>
                            <p>Malaysia</p>
                            <p class="cart-item-price">$600</p>
                        </div>
                        <div class="cart-item-quantity">
                            <button class="minus-button">-</button>
                            <input type="number" value="2" min="1" max="10">
                            <button class="plus-button">+</button>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="cart-summary">
                <div class="cart-summary-title">
                    <h2>Total : $1700</h2>
                </div>
                <div class="checkout-button">
                    <button><a href="#">Checkout</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
