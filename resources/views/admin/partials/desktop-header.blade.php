<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap" style="justify-content:  flex-end;">
                <div class="header-button" style="justify-content:  flex-end;">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{asset('assets/backend/images/icon/user.png')}}" alt="{{Auth::user('web')->name}}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{Auth::user('web')->name}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{asset('assets/backend/images/icon/user.png')}}" alt="{{Auth::user('web')->name}}" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{Auth::user('web')->name}}</a>
                                        </h5>
                                        <span class="email">{{Auth::user('web')->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Profile</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{Route('logout')}}">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
