<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="css/app.css" rel="stylesheet" >
        <link href="css/home.css" rel="stylesheet">
        <link href="css/location-description.css" rel="stylesheet">
        <script src="js/home.js"></script>
    </head>
    <body>
    <div class="app">
        <div class="app-container">
            @include('header')
            <div class="row content">
                <div class="container">
                    <div class="search">
                        <div class="search-header">
                            <h2>What will be your next destination?</h2>
                        </div>
                        <p class="form-notes">And don't you worry, you don't need to fill out all fields, we will do our best to find you the perfect destination from whatever how little you provide!</p>
                        <form class="search-form">
                            <div class="search-row">
                                <div class="input-group">
                                    <label for="season">At what season?</label>
                                    <select name="season" id="season">
                                        <option value="" disabled selected hidden></option>
                                        <option value="spring">Spring</option>
                                        <option value="summer">Summer</option>
                                        <option value="fall">Fall</option>
                                        <option value="winter">Winter</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label class="visible-desktop">When are you available to travel?</label>
                                    <label class="visible-mobile">Or when would you want to go?</label>
                                    <div class="date-picker">
                                        <div class="date-picker-item">
                                            <label for="date-from">From:</label>
                                            <input type="date" name="date-from" id="date-from">
                                        </div>
                                        <div class="date-picker-item">
                                            <label for="date-to">Till:</label>
                                            <input type="date" name="date-to" id="date-to">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-row">
                                <div class="input-group">
                                    <label for="country">Where do you want to go?</label>
                                    <select name="country" id="country">
                                        <option value="" disabled selected hidden></option>
                                        <option value="usa">United States</option>
                                        <option value="canada">Canada</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label for="activity">What do you want to do?</label>
                                    <select name="activity" id="activity">
                                        <option value="" disabled selected hidden></option>
                                        <option value="hiking">Hiking</option>
                                        <option value="skiing">Skiing</option>
                                        <option value="swimming">Swimming</option>
                                        <option value="fishing">Fishing</option>
                                        <option value="climbing">Climbing</option>
                                        <option value="running">Running</option>
                                        <option value="cycling">Cycling</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-row">
                                <div class="input-group">
                                    <label for="budget">How much do you want to spend?</label>
                                    <div class="range-picker">
                                        <input type="range" id="budget" name="budget" min="200" max="5000" step="100" value="200" onchange="rangeInputHandler(this)">
                                        <label for="budget" id="budgetLabel">200</label>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label for="persons">How many persons will be travelling?</label>
                                    <div class="range-picker">
                                        <input type="range" id="persons" name="persons" min="1" max="50" step="1" value="1" onchange="rangeInputHandler(this)">
                                        <label for="persons" id="personsLabel">1</label>
                                    </div>
                                </div>
                            </div>
                            <div class="search-row">
                                <div class="button-group">
                                    <button id="random" type="submit">I am feeling lucky!</button>
                                    <button id="showAll" type="submit">Just show me all you have!</button>
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
