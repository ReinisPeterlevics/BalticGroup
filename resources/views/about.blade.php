<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="css/app.css" rel="stylesheet" >
        <link href="css/aboutUs.css" rel="stylesheet" >
    </head>
    <body>
        @include('header')
        <div class="aboutPageContainer">
            <div class="aboutUsContainer">
            <h1>About Us</h1>
            <p class="aboutUsP">At Wanderlust Adventures, we believe that travel is not just a journey, but a gateway to enriching experiences,
                unforgettable memories, and personal growth. Established with a passion for exploration and a commitment to
                exceptional service, our travel agency is your trusted partner in creating remarkable journeys around the world.</p>
            </div>
            <div class="whyBookContainer">
                <h2>Why Book Us?</h2>
                <div class="whyBookBoxes">
                <div class="smallWhyContainers">
                    <img>
                    <h3>Free cancelation</h3>
                    <p>Stay flexible on your trip.</p>
                </div>
                <div class="smallWhyContainers">
                <img>
                    <h3>300,000+ experiences</h3>
                    <p>Make memories around the world</p>
                </div>
                <div class="smallWhyContainers">
                <img>
                    <h3>Reserve now, pay later.</h3>
                    <p>Book your spot.</p>
                </div>
                <div class="smallWhyContainers">
                <img>
                    <h3>Trusted reviews</h3>
                    <p>4.3 stars from 140,000+ reviews</p>
                </div>
                </div>

            </div>
            <div></div>


            </div>

        @include('footer')
    </body>
</html>
