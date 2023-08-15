<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="css/app.css" rel="stylesheet" >
        <link href="css/aboutUs.css" rel="stylesheet" >
    </head>
    <body>
        @include('header')
        <div class="about-page-container">
            <div class="about-page-content">
            <div class="about-us-container">
            <h1>About Us</h1>
            <p class="about-cs-p">At Wanderlust Adventures, we believe that travel is not just a journey, but a gateway to enriching experiences,
                unforgettable memories, and personal growth. Established with a passion for exploration and a commitment to
                exceptional service, our travel agency is your trusted partner in creating remarkable journeys around the world.</p>
            </div>
            <div class="why-book-container">
                <h2>Why Book Us?</h2>
                <div class="why-book-boxes">
                <div class="small-why-container">
                    <img src="/images/money.png" alt="Money icon">
                    <h3>Free cancelation</h3>
                    <p>Stay flexible on your trip.</p>
                </div>
                <div class="small-why-container">
                <img src="/images/snowboard.png" alt="Mountain icon">
                    <h3>300,000+ experiences</h3>
                    <p>Make memories around the world</p>
                </div>
                <div class="small-why-container">
                <img src="/images/calendar.png" alt="Calendar icon">
                    <h3>Reserve now, pay later.</h3>
                    <p>Book your spot.</p>
                </div>
                <div class="small-why-container">
                <img src="/images/mobile.png" alt="Mobile with 3 stars icon">
                    <h3>Trusted reviews</h3>
                    <p>4.3 stars from 140,000+ reviews</p>
                </div>
            </div>
                </div>
            <div class="our-team-container">
                <h2>Our Team</h2>
                <div class="our-team-boxes">
                <div class="small-team-container">
                    <h3>Reinis</h3>
                    <h3>Peterlevics</h3>
                    <p>Web developer</p>
                </div>
                <div class="small-team-container">
                    <h3>Sandija</h3>
                    <h3>Veze</h3>
                    <p>Web developer</p>
                </div>
                <div class="small-team-container">
                    <h3>Gundars</h3>
                    <h3>Eimanis</h3>
                    <p>Web developer</p>
                </div>
                <div class="small-team-container">
                    <h3>Jekaterina</h3>
                    <h3>Merefjanska</h3>
                    <p>Web developer</p>
                </div>
                <div class="small-team-container">
                    <h3>Mufazzalshokh</h3>
                    <h3>Ulashev</h3>
                    <p>Web developer</p>
                </div>
            </div>
            </div>
        </div>
        @include('footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
