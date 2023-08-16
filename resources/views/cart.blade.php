<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Location Description</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    @include('header')
    <div class="container">

    <div class="cart-container">
            <div class="cart-item-img">
                <img class="cart-image" src="images/paragliding.jpg" alt="">
            </div>

            <div class="cart-item-info">
                <h3>Tour title</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, amet.</p>
            </div>

            <div class="cart-item-action">
                <!-- <label for="quantity">Quantity</label>
                <input type="number" min="1" max="50"> -->
                <p>Persons</p>
                <input class="range" type="range" id="persons" name="persons" min="1" max="50" step="1" value="1" onchange="rangeInputHandler(this)">
                <label for="persons" id="personsLabel">1</label>
                <p>Price: 1500 EUR</p>
                <button class="cart-remove-button">Remove</button>
            </div>

        <div class="cart-total">
            <h3>Total: </h3>
            <h3>1500 EUR</h3>
        </div>
    </div>

    <div class="grand-total-container">
        <div class="grand-total">
            <h3>Grand Total: </h3>
            <h3>1500 EUR</h3>
        </div>
        <a href=""><button class="cart-back-button">Back</button></a>
        <a href=""><button class="cart-checkout-button">Checkout</button></a>
        </div>
    </div>
    @include('footer')
</body>
</html>
