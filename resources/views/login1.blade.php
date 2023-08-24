<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/location-description.css">
    <link href="/css/cart.css" rel="stylesheet">
    <script src="/js/cart.js"></script>
    <title>Magebit Travel - Login</title>
</head>
<body>
    @include('header')
    @include('cart')
    @if(!empty(Session::get('cartIsVisible')) && Session::get('cartIsVisible') == true)
        <script>
            showCart();
        </script>
    @endif
    <div class="app">
        <div class="app-container">
            <div class="wrapper">
                <div class="main">
                    <input type="checkbox" id="chk" aria-hidden="true">

                    <div class="signup">
                        <form>
                            <label for="chk" aria-hidden="true">Sign up</label>
                            <input type="text" name="txt" placeholder="User name" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="pswd" placeholder="Password" required="">
                            <button>Sign up</button>
                        </form>
                    </div>

                    <div class="login">
                        <form>
                            <label for="chk" aria-hidden="true">Login</label>
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="pswd" placeholder="Password" required="">
                            <button>Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>




