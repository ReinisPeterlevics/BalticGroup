<header>
    <div >
        <div class="cont">
            <a class="navbar-brand" href="{{route('home')}}"><img class="logoH" src="/images/finalLogo.png" alt="Magebit logo"></a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showCart()"><img src="/images/book4.png" alt="Travel Booking"></a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>
