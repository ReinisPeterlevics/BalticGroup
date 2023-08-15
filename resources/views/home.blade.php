<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="css/app.css" rel="stylesheet" >
        <link href="css/home.css" rel="stylesheet">
    </head>
    <body>
        @include('header')
        <div class="container">
            <div class="search">
                <div class="search-header">
                    <h2>What will be your next destination?</h2>
                </div>
                <form>
                    <div class="row">
                        <div class="input-group">
                            <label for="season">At what season?</label>
                            <select name="season" id="season">
                                <option value="spring">Spring</option>
                                <option value="summer">Summer</option>
                                <option value="fall">Fall</option>
                                <option value="winter">Winter</option>
                            </select>
                        </div>
                        <h3>Or</h3>
                        <div class="input-group">
                            <label for="date">When would you want to go?</label>
                            <input type="date" name="date-from" id="date-from">
                            <input type="date" name="date-until" id="date-until">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <label for="country">Where do you want to go?</label>
                            <select name="country" id="country">
                                <option value="usa">United States</option>
                                <option value="canada">Canada</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <label for="activity">What do you want to do?</label>
                            <input type="text" id="activity" name="activity">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <label for="budget">How much do you want to spend?</label>
                            <input type="text" id="budget" name="budget">
                        </div>
                        <h3>And</h3>
                        <div class="input-group">
                            <label for="persons">How many persons will be travelling?</label>
                            <input type="number" id="persons" name="persons">
                        </div>
                    </div>
                    <div class="row">
                        <div class="button-group">
                            <button id="random" type="submit">I am feeling lucky!</button>
                            <button id="search" type="submit">Search</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="map-container">

        </div>

        @include('footer')
    </body>
</html>







