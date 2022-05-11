    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('user/assets/images/logo/logo.png') }}" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="{{ route('home') }}" class="">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('m-list') }}">movies</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="header-button pr-0">
                                <a href="{{ route('login') }}">join us</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="">{{ Auth::user()->name }}</a>
                            <ul class="submenu">
                                <li>
                                    <a href="">{{ Auth::user()->name }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile-create') }}">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            </ul>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                    {{-- @guest
                        @if (Route::has('login'))
                            <li class="header-button pr-0">
                                <a href="{{ route('login') }}">join us</a>
                            </li>
                        @endif
                    @else
                        <li class="header-button pr-0">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest --}}
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->
