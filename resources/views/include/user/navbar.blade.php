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
                        <a href="{{ route('home') }}" class="active">Home</a>
                        {{-- <ul class="submenu">
                            <li>
                                <a href="index.html">Home One</a>
                            </li>
                            <li>
                                <a href="#0" class="active">Home Two</a>
                            </li>
                        </ul> --}}
                    </li>
                    <li>
                        <a href="{{ route('m-list') }}">movies</a>
                    </li>
                    <li>
                        <a href="#0">events</a>
                        <ul class="submenu">
                            <li>
                                <a href="events.html">Events</a>
                            </li>
                            <li>
                                <a href="event-details.html">Event Details</a>
                            </li>
                            <li>
                                <a href="event-speaker.html">Event Speaker</a>
                            </li>
                            <li>
                                <a href="event-ticket.html">Event Ticket</a>
                            </li>
                            <li>
                                <a href="event-checkout.html">Event Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">sports</a>
                        <ul class="submenu">
                            <li>
                                <a href="sports.html">Sports</a>
                            </li>
                            <li>
                                <a href="sport-details.html">Sport Details</a>
                            </li>
                            <li>
                                <a href="sports-ticket.html">Sport Ticket</a>
                            </li>
                            <li>
                                <a href="sports-checkout.html">Sport Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">pages</a>
                        <ul class="submenu">
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="apps-download.html">Apps Download</a>
                            </li>
                            <li>
                                <a href="sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">blog</a>
                        <ul class="submenu">
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="blog-details.html">Blog Single</a>
                            </li>
                        </ul>
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
                        <li class="header-button pr-0">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
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
