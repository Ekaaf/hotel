<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> +88 01535 227285</li>
                        <li><i class="fa fa-envelope"></i> mdsahadat432@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right">
                        <div class="top-social">
                            <a href="{{ route('index') }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ route('index') }}"><i class="fa fa-twitter"></i></a>
                            <a href="{{ route('index') }}"><i class="fa fa-tripadvisor"></i></a>
                            <a href="{{ route('index') }}"><i class="fa fa-instagram"></i></a>
                        </div>
                        <a href="{{ route('login') }}"" class="bk-btn">Booking Now</a>
                        <div class="language-option">
                            <img src="{{ asset('assets/img/flag.jpg') }}" alt="">
                            <span>EN <i class="fa fa-angle-down"></i></span>
                            <div class="flag-dropdown">
                                <ul>
                                    <li><a href="{{ route('index') }}">Zi</a></li>
                                    <li><a href="{{ route('index') }}">Fr</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('rooms') }}">Rooms</a></li>
                                <li><a href="{{ route('blog') }}">News</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="nav-right search-switch">
                            <i class="icon_search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
