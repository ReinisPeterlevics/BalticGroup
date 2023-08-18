<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="css/app.css" rel="stylesheet" >
        <link href="css/location.css" rel="stylesheet" >
        <link href="css/location-description.css" rel="stylesheet" >
    </head>
    <body>
    <div class="app">
            @include('header')
            <!-- from here -->
            <div class="row">
                <div class="loc">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Tour name</h5>
                            <p class="card-subtitle">Counry, City</p>
                            <p class="sub">Hotel</p>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, rerum odio deleniti eos possimus quos! Animi molestiae, eaque earum vero, est vel harum quis placeat enim ipsa quos corrupti dolore.</p>
                            <!-- <div class="right-button"> -->
                                <a href="{{route('location-description')}}" class="more-button">More</a>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class="loc">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Tour name</h5>
                            <p class="card-subtitle">Counry, City</p>
                            <p class="sub">Hotel</p>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, rerum odio deleniti eos possimus quos! Animi molestiae, eaque earum vero, est vel harum quis placeat enim ipsa quos corrupti dolore.</p>
                            <!-- <div class="right-button"> -->
                                <a href="{{route('location-description')}}" class="more-button">More</a>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class="loc">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Tour name</h5>
                            <p class="card-subtitle">Counry, City</p>
                            <p class="sub">Hotel</p>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, rerum odio deleniti eos possimus quos! Animi molestiae, eaque earum vero, est vel harum quis placeat enim ipsa quos corrupti dolore.</p>
                            <!-- <div class="right-button"> -->
                                <a href="{{route('location-description')}}" class="more-button">More</a>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class="loc">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Tour name</h5>
                            <p class="card-subtitle">Counry, City</p>
                            <p class="sub">Hotel</p>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, rerum odio deleniti eos possimus quos! Animi molestiae, eaque earum vero, est vel harum quis placeat enim ipsa quos corrupti dolore.</p>
                            <!-- <div class="right-button"> -->
                                <a href="{{route('location-description')}}" class="more-button">More</a>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class="loc">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Tour name</h5>
                            <p class="card-subtitle">Counry, City</p>
                            <p class="sub">Hotel</p>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, rerum odio deleniti eos possimus quos! Animi molestiae, eaque earum vero, est vel harum quis placeat enim ipsa quos corrupti dolore.</p>
                            <!-- <div class="right-button"> -->
                                <a href="{{route('location-description')}}" class="more-button">More</a>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>


            </div>
            <!-- to here -->
            @include('footer')
    </div>
</body>
</html>


