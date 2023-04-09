<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <h3>Swayam Ki Khoj</h3>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>

                <li>
                    <a href="{{route('category')}}">
                        <i class="fas fa-list"></i>Categories
                    </a>
                </li>

                <li>
                    <a href="{{route('post')}}">
                        <i class="fas fa-file"></i>Posts
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
