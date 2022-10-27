
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

            @if (session()->has('message'))

                <div class="alert alert-success">
                    <button class="close" type="button" data-dismiss="alert">
                        X
                    </button>
                    {{session()->get('message')}}
                </div>
            @endif

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
                                    <a class="btn header-btn" id="quoteForm" data-toggle="modal" data-target='#qouteFormId' data-id="quoteFormId" data-placement="top" data-original-title="">Get A Qoue</a>

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




    <!-- Modal -->
<div id="qouteFormId" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content" >


            <!-- From tittle -->
            <div class="row" style="padding: 50px">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-50">
                        <span>Get a Qote For Free</span>
                        <h2>Request a Free Quote</h2>
                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
                    </div>
                </div>
                <!-- form -->
                <form action="{{url('sendQuote')}}" class="contact-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row ">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-form">
                                <input type="text" placeholder="Email" name="email"class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" placeholder="Contact Number" name="phone"class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="select" id="select1" name="freighttype" class="form-control">
                                    <option value="">Freight Type</option>
                                    <option value="">Catagories One</option>
                                    <option value="">Catagories Two</option>
                                    <option value="">Catagories Three</option>
                                    <option value="">Catagories Four</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="City of Departure" name="city"class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Incoterms" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Weight" class="form-control">
                            </div>
                        </div>
                        <!-- Height Width length -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Height"class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="input-form">
                                <input type="text" placeholder="Width" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="input-form">
                                <input type="text" placeholder="length" class="form-control">
                            </div>
                        </div>
                        <!-- Radio Button -->
                        <div class="col-lg-12">
                            <div class="radio-wrapper mb-30 mt-15">
                                <label>Extra services:</label>
                                <div class="select-radio">
                                    <div class="radio">
                                        <input id="radio-1" name="radio" type="radio" checked="">
                                        <label for="radio-1" class="radio-label">Freight</label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-2" name="radio" type="radio">
                                        <label for="radio-2" class="radio-label">Express Delivery</label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-4" name="radio" type="radio">
                                        <label for="radio-4" class="radio-label">Insurance</label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-5" name="radio" type="radio">
                                        <label for="radio-5" class="radio-label">Packaging</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="col-lg-12">
                            <button name="submit" class="submit-btn">Request a Quote</button>
                        </div>
                    </div>
                </form>
            </div>
      </div>

    </div>
</div>

</header>
