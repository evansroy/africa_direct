<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('user.css')
   </head>

   <body>
    <!--? Preloader Start -->
        @include('user.preloader')
    <!-- Preloader Start -->
    <!--Header-->
        @include('user.header')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>About us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">About</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <div class="about-low-area padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About Our Company</span>
                                <h2>Africa's Best Cargo General Sales Agent</h2>
                            </div>
                            <p>Africa Direct ltd. was established in 2009 Africa Direct Ltd has grown quickly to become one of the Kenya’s leading independent General Sales Agents. </p>
                            <p>The company has highly professional and experienced staff from various sectors of airfreight disciplines, who have trained with the world’s top Airlines and forwarders.</p>
                            <p>
                                Our staff are trained and have an in-depth knowledge of the African and East African cargo industry.
                                Our aim is to provide airlines with a seamless extension of their own operation as well as access to
                                 our network of offices that provide cargo coverage wherever one may need through our cooperation with
                                 both local and international forwarders.
                            </p>

                            {{-- <a href="{{url('about')}}" class="btn">More About Us</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img">
                                <img src="assets/img/gallery/about2.png" alt="">
                            </div>

                            <div class="about-back-img d-none d-lg-block">
                                <img src="assets/img/gallery/about1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>Our Vission</span>
                                {{-- <h2>Africa's Best Cargo General Sales Agent</h2> --}}
                            </div>
                            <p>
                                “We aim to provide the best possible all-service airline representation in the Africa air cargo market."
                            </p>
                            <h2>Our Values & Principles</h2>
                            <p>
                                Honesty, Fairness, Respect & Safety. We are individually accountable and collectively responsible.
                            </p>

                            <p>
                                We strive to be successful without compromising the quality of our customer’s solutions.

                            </p>
                            <p>
                                We invent & aspire to continually improve our solutions.
                            </p>
                            <p>
                                We foster a culture of teamwork, inclusion, leadership & growth.
                            </p>
                            <p>
                                We strive to create a safe & sustainable environment and to improve the lives of our community.
                            </p>
                            {{-- <a href="{{url('about')}}" class="btn">More About Us</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        {{-- <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img">
                                <img src="assets/img/gallery/about2.png" alt="">
                            </div>

                            <div class="about-back-img d-none d-lg-block">
                                <img src="assets/img/gallery/about1.png" alt="">
                            </div>
                        </div> --}}
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>Our Experience</span>
                                {{-- <h2>Africa's Best Cargo General Sales Agent</h2> --}}
                            </div>
                            <p>
                                We have experience in handling modern cargo flight capacities ranging from short
                                range, mid-range as well as long range freighters, wide-bodies and various narrow
                                bodied belly capacities. These aircrafts includes; B757F, B777F, B787,B767, B738, &
                                A320 with cargo capacity ranging from 1 -100 Tonnes per flight.

                            </p>
                            {{-- <a href="{{url('about')}}" class="btn">More About Us</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        {{-- <div class="about-img ">
                            <div class="about-font-img">
                                <img src="assets/img/gallery/about2.png" alt="">
                            </div>

                            <div class="about-back-img d-none d-lg-block">
                                <img src="assets/img/gallery/about1.png" alt="">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
        @include('user.getquote')
        <!--Team Ara Start -->
        @include('user.team')
        <!-- Team Ara End -->
        <!--? Testimonial Start -->
        @include('user.testimony')
        <!-- Testimonial End -->
         <!--? Blog Area Start -->
          <!-- Blog Area End -->
    </main>

    <!-- Footer -->
    @include('user.footer')

    <!-- JS here -->
		@include('user.script')
    </body>
</html>
