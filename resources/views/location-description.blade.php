<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="css/app.css" rel="stylesheet" >
        <link href="css/location-description.css" rel="stylesheet" >
</head>
<body>
    @include('header')
    <div class="container">
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
                <p><strong>Price:</strong> 1500 EUR</p>
                <div class="description-buttons">
                    <a href="#" class="back-button add-to-cart-button">Back</a>
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
</body>
</html>
