<header>
    <div >
        <div class="cont">
            <a class="navbar-brand" href="{{route('home')}}"><img class="logoH" src="/images/finalLogo.png" alt="Magebit logo"></a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">

                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link-login" href="{{ route('login') }}"><img class="login-img" src="/images/login-icon3.png" alt="Login icon"></a>
                                </li>
                            @endif
                        @else
                    <li class="nav-item ">
                        <a class="nav-link-logout" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <img class="logout-img" src="/images/logout-icon5.png" alt="">
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link-cart" href="#" onclick="showCart()"><img class="cart-img" src="/images/book4.png" alt="Travel Booking"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
