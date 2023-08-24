<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Magebit Travel - About</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/about.css" rel="stylesheet">
    <link href="/css/cart.css" rel="stylesheet">
    <script src="/js/cart.js"></script>
</head>
<body>
    <div class="app">
        <div class="app-container">
            @include('header')
            @include('cart')
            @if(!empty(Session::get('cartIsVisible')) && Session::get('cartIsVisible') == true)
            <script>
                showCart();
            </script>
        @endif
        <div class="about-page-container">
                <div class="about-page-content">
                    <div class="about-us-container">
                        <h1 class="about-h1">About Us</h1>
                        <p class="about-p">At Magebit Travel, we believe that travel is not just a journey, but a gateway to enriching experiences,
                            unforgettable memories, and personal growth. Established with a passion for exploration and a commitment to
                            exceptional service, our travel agency is your trusted partner in creating remarkable journeys around the world.</p>
                    </div>
                    <div class="why-book-container">
                        <h2>Why Book Us?</h2>
                        <div class="why-book-boxes">
                            <div class="small-why-container">
                                <img src="/images/money.png" alt="Money icon">
                                <h3 class="about-h3">Free cancelation</h3>
                                <p class="about-p">Stay flexible on your trip.</p>
                            </div>
                            <div class="small-why-container">
                                <img src="/images/snowboard.png" alt="Mountain icon">
                                <h3 class="about-h3">300,000+ experiences</h3>
                                <p class="about-p">Make memories around the world</p>
                            </div>
                            <div class="small-why-container">
                                <img src="/images/calendar.png" alt="Calendar icon">
                                <h3 class="about-h3">Reserve now, pay later.</h3>
                                <p class="about-p">Book your spot.</p>
                            </div>
                            <div class="small-why-container">
                                <img src="/images/mobile.png" alt="Mobile with 3 stars icon">
                                <h3 class="about-h3">Trusted reviews</h3>
                                <p class="about-p">4.3 stars from 140,000+ reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="our-partners">
                        <h2 class="about-h2">Our Partners</h2>
                        <div class="partner-carousel">
                            <div class="partner-carousel-inner">
                                <a href="https://www.airbaltic.com/lv-LV/index" class="recomendation-link" target="_blank"><img src="/images/airBalticLogo.png" alt="AirBaltic logo"></a>
                                <a href="https://www.turkishairlines.com/" class="recomendation-link" target="_blank"><img src="/images/turkishAirLines.png" alt="AirBaltic logo"></a>
                                <a href="https://www.ncl.com/fr/en/" class="recomendation-link" target="_blank"><img src="/images/norvegianCruiseLine.png" alt="AirBaltic logo"></a>
                                <a href="https://www.finnair.com/lv-en" class="recomendation-link" target="_blank"><img src="/images/finnAir.png" alt="AirBaltic logo"></a>
                                <a href="https://www.uzairways.com/en" class="recomendation-link" target="_blank"><img src="/images/uzbekistanAirways.png" alt="AirBaltic logo"></a>
                                <!-- Duplicates-->
                                <a href="https://www.airbaltic.com/lv-LV/index" class="recomendation-link" target="_blank"><img src="/images/airBalticLogo.png" alt="AirBaltic logo"></a>
                                <a href="https://www.turkishairlines.com/" class="recomendation-link" target="_blank"><img src="/images/turkishAirLines.png" alt="AirBaltic logo"></a>
                                <a href="https://www.ncl.com/fr/en/" class="recomendation-link" target="_blank"><img src="/images/norvegianCruiseLine.png" alt="AirBaltic logo"></a>
                                <a href="https://www.finnair.com/lv-en" class="recomendation-link" target="_blank"><img src="/images/finnAir.png" alt="AirBaltic logo"></a>
                                <a href="https://www.uzairways.com/en" class="recomendation-link" target="_blank"><img src="/images/uzbekistanAirways.png" alt="AirBaltic logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="our-team-container">
                        <h2 class="about-h2">Our Team</h2>
                        <div class="our-team-boxes">
                            <div class="small-team-container">
                                <h3 class="about-h3">Reinis</h3>
                                <h3 class="about-h3">Peterlevics</h3>
                                <p class="about-p">Web developer</p>
                            </div>
                            <div class="small-team-container">
                                <h3 class="about-h3">Sandija</h3>
                                <h3 class="about-h3">Veze</h3>
                                <p class="about-p">Web developer</p>
                            </div>
                            <div class="small-team-container">
                                <h3 class="about-h3">Gundars</h3>
                                <h3 class="about-h3">Eimanis</h3>
                                <p class="about-p">Web developer</p>
                            </div>
                            <div class="small-team-container">
                                <h3 class="about-h3">Jekaterina</h3>
                                <h3 class="about-h3">Merefjanska</h3>
                                <p class="about-p">Web developer</p>
                            </div>
                            <div class="small-team-container">
                                <h3 class="about-h3">Mufazzalshokh</h3>
                                <h3 class="about-h3">Ulashev</h3>
                                <p class="about-p">Web developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer')
        </div>
    </div>
</body>
</html>
