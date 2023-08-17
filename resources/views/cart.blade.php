<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/home.js"></script>
</head>
<body>
    @include('header')
    <div class="container">

    <div class="cart-outter-container">
        <div class="cart-container">
            <div class="cart-item-img">
                <img class="cart-image" src="images/paragliding.jpg" alt="">
            </div>

            <div class="cart-item-info">
                <div class="tour-title">
                    <h3>Tour title</h3>
                </div>
                <div class="tour-info">
                    <p class="tour-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, amet.</p>
                </div>
            </div>

            <div class="cart-item-action">
                <!-- <label for="quantity">Quantity</label>
                <input type="number" min="1" max="50"> -->
                <div>
                    <p>Price per ticket: 1500 EUR</p>
                    <p>Persons</p>
                    <div class="range-picker">
                        <input type="range" id="persons" name="persons" min="1" max="50" step="1" value="1" onchange="rangeInputHandler(this)">
                        <label for="persons" id="personsLabel">1</label>
                    </div>
                    <p>Total price: 1500 EUR</p>

                </div>
                <!-- <div class="remove-button">
                    <a href="#" class="close-button"></a>
                </div> -->
            </div>
            <div class="close-button-container">
                <button class="close-button">&times</button>
            </div>
        </div>

        <div class="cart-container">
            <div class="cart-item-img">
                <img class="cart-image" src="images/paragliding.jpg" alt="">
            </div>

            <div class="cart-item-info">
                <div class="tour-title">
                    <h3>Tour title</h3>
                </div>
                <div class="tour-info">
                    <p class="tour-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, amet.</p>
                </div>
            </div>

            <div class="cart-item-action">
                <!-- <label for="quantity">Quantity</label>
                <input type="number" min="1" max="50"> -->
                <div>
                    <p>Price per ticket: 1500 EUR</p>
                    <p>Persons</p>
                    <div class="range-picker">
                        <input type="range" id="persons" name="persons" min="1" max="50" step="1" value="1" onchange="rangeInputHandler(this)">
                        <label for="persons" id="personsLabel">1</label>
                    </div>
                    <p>Total price: 1500 EUR</p>

                </div>
                <!-- <div class="remove-button">
                    <a href="#" class="close-button"></a>
                </div> -->
            </div>
            <div class="close-button-container">
                <button class="close-button">&times</button>
            </div>
        </div>

    </div>
        <!-- <div class="close-button-container">
            <a href="#"></a>
        </div> -->

        <div class="border">
        </div>

        <div class="grand-total-container">
            <div class="grand-total">
                <h3>Total: 1500 EUR</h3>
            </div>
            <div class="cart-button">
                <a href=""><button class="cart-back-button">Back</button></a>
                <a href=""><button class="cart-checkout-button">Checkout</button></a>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>
