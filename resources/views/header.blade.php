<header>
    <div>
        <div class="cont">
            <a class="navbar-brand" href="{{route('home')}}"><img class="logoH" src="/images/finalLogo.png" alt="Magebit logo"></a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showCart()"><img src="/images/book4.png" alt="Travel Booking"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
