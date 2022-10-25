<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('user.css')
   </head>

   <body>
    <!--? Preloader Start -->
    @include('user.preloader')
    <!-- Preloader Start -->
    <!-- Header --->
    @include('user.header')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Our Services</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Our Services</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our Services</span>
                            <h2>What We Can Do For You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-shipped"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Cargo Representation</a></h5>
                                <p>
                                    We provide unique and extensive outsourcing opportunities,
                                    and each of our customers benefits from an entirely individualized worldwide
                                    corporate identity.
                                </p>
                            </div>
                            <a href="#" class="btn">More Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-ship"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Public Relation & Advertising</a></h5>
                                <p>
                                    As a full service PR & brand communications agency focusing on aviation,
                                     we have a proven track record of expertise in developing and implementing successful,
                                      strong and focused communications strategies with measurable results.
                                </p>

                            </div>
                            <a href="#" class="btn">More Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Financial & Administration</a></h5>
                                <p>
                                    Africa Direct Ltd provides a professional accounting package which helps clients in the
                                    in the Various Feilds in Acounting  and Administrative Services.
                                </p>
                            </div>
                            <a href="#" class="btn">More Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Air Transport</a></h5>
                                <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-shipped"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Land Transport</a></h5>
                                <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-ship"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Ship Transport</a></h5>
                                <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Area End -->

    </main>
    @include('user.footer')

    @include('user.script')
    </body>
</html>
