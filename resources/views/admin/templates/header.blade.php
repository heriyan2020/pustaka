<!--**********************************
    Nav header start
***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="#">
                <b class="logo-abbr"><img src="{{asset('dashboard/images/logo_p.png')}}" alt=""> </b>
                <span class="brand-title">
                    <img src="{{asset('dashboard/images/logo_pustaka.png')}}" alt="">
                </span>
            </a>
        </div>
    </div>

    <div class="header">    
        <div class="header-content clearfix">
            
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{asset('dashboard/images/user/1.png')}}" height="100" width="100" alt="">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="{{url('/logout')}}"><i class="fas fa-key"></i> <span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!--**********************************
        Header end ti-comment-alt
***********************************-->