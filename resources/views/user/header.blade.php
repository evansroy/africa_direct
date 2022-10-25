<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>Phone: +254 729 733731, 0780 444715, 0732 900798</li>
                                    <li>Email: : bd.gsa@africa-direct.net, gsa@africa-direct.net</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/adl_logo-bg.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('/about')}}">About</a></li>
                                            <li><a href="{{url('/service')}}">Services</a></li>
                                            <li><a href="{{url('')}}">Blog</a>
                                                {{-- <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul> --}}
                                            </li>
                                            <li><a href="{{url('/contacts')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                @if (Route::has('login'))
                                    @auth

                                    <x-app-layout>

                                    </x-app-layout>

                                @else
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="{{route('login')}}" class="btn header-btn">Log In</a>
                                    </div>

                                    @endauth
                                @endif
                                <!-- Header-btn -->


                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="{{url('/')}}" class="btn header-btn">Get A Qoue</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
