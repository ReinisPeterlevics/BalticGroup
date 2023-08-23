<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Magebit Travel</title>
        <link href="/css/app.css" rel="stylesheet" >
        <link href="/css/home.css" rel="stylesheet">
        <link href="/css/location-description.css" rel="stylesheet">
        <link href="/css/cart.css" rel="stylesheet">
        <script src="/js/home.js"></script>
        <script src="/js/cart.js"></script>
    </head>
    <body>
    <div class="app">
        <div class="app-container">
            @include('header')
            @include('cart')
            <div class="row content">
                <div class="container">
                    <div class="search">
                        <div class="search-header">
                            <h2>What will be your next destination?</h2>
                        </div>
                        <p class="form-notes">And don't you worry, you don't need to fill out all fields, we will do our best to find you the perfect destination from whatever how little you provide!</p>
                        <form class="search-form" action="{{ route('search') }}" method="GET">
                            <div class="search-row">
                                <div class="input-group">
                                    <label for="season">At what season?</label>
                                    <select name="season" id="season" onkeydown="resetSelect(event, this.id)">
                                        <option value="" disabled selected hidden></option>
                                        <!-- Data from DB -->
                                        @foreach ($seasons as $season)
                                            <option value="{{ $season->season_id }}">{{ $season->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label class="visible-desktop">When are you available to travel?</label>
                                    <label class="visible-mobile">Or when would you want to go?</label>
                                    <div class="date-picker">
                                        <div class="date-picker-item">
                                            <label for="date-from">From:</label>
                                            <input type="date" name="date-from">
                                        </div>
                                        <div class="date-picker-item">
                                            <label for="date-to">Till:</label>
                                            <input type="date" name="date-to">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-row">
                                <div class="input-group">
                                    <label for="country">Where do you want to go?</label>
                                    <select name="country" id="country" onkeydown="resetSelect(event, this.id)">
                                        <option value="" disabled selected hidden></option>
                                        <!-- Data from DB -->
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->country_id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="search-row">
                                <div class="input-group">
                                    <label for="budget">How much do you want to spend?</label>
                                    <div class="range-picker">
                                        <!-- Min and current from DB and max from DB -->
                                        <input type="range" id="budget" name="budget" min="{{ $minPrice }}" max="{{ $maxPrice }}" step="1" value="{{ $minPrice }}" onchange="rangeInputHandler(this)">
                                        <label for="budget" id="budgetLabel">{{ $minPrice }}</label>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label for="persons">How many persons will be travelling?</label>
                                    <div class="range-picker">
                                        <!-- Min and current from DB and max from DB -->
                                        <input type="range" id="persons" name="persons" min="1" max="{{ $maxSpots }}" step="1" value="1" onchange="rangeInputHandler(this)">
                                        <label for="persons" id="personsLabel">1</label>
                                    </div>
                                </div>
                            </div>
                            <div class="search-row">
                                <div class="button-group">
                                    <button id="random" type="button" onclick="window.location='{{route("location-random")}}'">I am feeling lucky!</button>
                                    <button id="showAll" type="button" onclick="window.location='{{route("location")}}'">Just show me all you have!</button>
                                    <button id="search" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="more-info">
                        <div class="more-item">
                            <a href="{{route('about')}}">
                                <div class="more-image">
                                    <img src="images/home/team-photo.jpg" alt="team">
                                </div>
                                <h3 class="more-title">Learn more about us!</h3>
                            </a>
                        </div>
                        <div class="more-item">
                            <a href="{{route('blog')}}">
                                <div class="more-image">
                                    <img src="images/home/blog-photo.png" alt="blog">
                                </div>
                                <h3 class="more-title">Check out our blog!</h3>
                            </a>
                        </div>
                    </div>
                </div>
                @include('footer')
            </div>
        </div>
    </body>
</html>
