<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel app</title>
        <link href="css/app.css" rel="stylesheet" >
    </head>
    <body>
        @include('header')
        <div class="container">
            <h2>Welcome to travel app</h2>
            <p>Travel around the world across multiple destintations!</p>
        </div>
        @include('footer')
    </body>
</html>
