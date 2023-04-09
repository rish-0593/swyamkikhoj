<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <h3>Swayam Ki Khoj</h3>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="{{ route('dashboard') }}">
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
        </nav>
    </div>
</aside>
