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
                                <h5><a href="{{url('cargoservice')}}">Cargo Representation</a></h5>
                                <p>
                                    We provide unique and extensive outsourcing opportunities,
                                    and each of our customers benefits from an entirely individualized worldwide
                                    corporate identity.
                                </p>
                            </div>
                            <a class="btn" id="cargoPresentationId" data-toggle="modal" data-target='#cargoPresentation' data-id="cargoPresentation">More Details</a>
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
                                      strong and focused.
                                </p>

                            </div>
                            <a id="publicRelationId" data-toggle="modal" data-target='#publicRelation' data-id="publicRelation" class="btn">More Details</a>
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
                            <a id="financeAdministrationId" data-toggle="modal" data-target='#financeAdministration' data-id="financeAdministration" class="btn">More Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">CARGO CHARTERS – WORLD WIDE
                                </a></h5>
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


        <!--Cargo Model-->
        <div id="cargoPresentation" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

              <!-- Modal content-->
              <div class="modal-content" >


                    <!-- From tittle -->
                    <div class="row" style="padding: 50px">
                        <div class="col-lg-12">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-50">
                                {{-- <span>Get a Qote For Free</span> --}}
                                <h2>Cargo Representation</h2>
                                <p>
                                    We provide unique and extensive outsourcing opportunities,
                                    and each of our customers benefits from an entirely individualized
                                    worldwide corporate identity.
                                </p>
                                <p>
                                    At Africa Direct Ltd all services provided are uniquely tailored to meet
                                    the carrier’s needs, and traditional GSA (General Sales Agent) work has been
                                    modified so that it is more in line with airline management and includes:
                                </p>

                                <ul>
                                    <li>Sales & Marketing</li>
                                    <li>Marketing planning</li>
                                    <li>Field Sales & telephone sales campaigns</li>
                                    <li>Regular direct mailings</li>
                                    <li>Media advertisement</li>
                                    <li>Market & Competitor research / customer surveys</li>
                                    <li>Yield improvement through client segmented marketing</li>
                                    <li> field sales approach of key accounts</li>
                                    <li>Promotional events in co-operation with the carrier<li>
                                    <li>Participation at trade/consumer fairs</li>
                                </ul>

                                <span>Customer Service</span>

                                <ul>
                                    <li> Dedicated phone lines answered in the carriers name</li>
                                    <li>Dedicated emails for the carrier</li>
                                    <li>Handling inquiries of final consumers</li>
                                    <li>Internet/web services</li>
                                    <li>Dispatch of tariff’s and product information</li>
                                    <li>24 hour dedicated operational contact for client/consumer</li>
                                    <li>Fully qualified DGR trained staff to answer any questions from agents on PAX/CAO DGR Cargo</li>
                                </ul>


                            </div>
                        </div>
                        <!-- form -->
                    </div>
                </div>
            </div>

        </div>


        <!--Public Relation Model-->
        <div id="publicRelation" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

              <!-- Modal content-->
              <div class="modal-content" >


                    <!-- From tittle -->
                    <div class="row" style="padding: 50px">
                        <div class="col-lg-12">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-50">
                                {{-- <span>Get a Qote For Free</span> --}}
                                <h2>
                                    PUBLIC RELATIONS & ADVERTISING
                                </h2>
                                <p>
                                    As a full service PR & brand communications agency focusing on aviation,
                                    we have a proven track record of expertise in developing and implementing successful,
                                     strong and focused communications strategies with measurable results.
                                    Our team of experts have excellent contacts within the Media/PR industry.
                                </p>
                                <span>Our Services Include</span>

                                <p>General Media management</p>
                                <p>Media events  & Media Promotions</p>
                                <p>Web/internet communication</p>
                                <p>Sales Promotions</p>
                                <p>Direct Mail shots</p>
                                <p>Strategic Planning</p>
                                <p>Direct target sales</p>
                                <p>Events & fairs</p>

                            </div>
                        </div>
                        <!-- form -->
                    </div>
                </div>
            </div>

        </div>


         <!--Finance & Administration Model-->
         <div id="financeAdministration" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

              <!-- Modal content-->
              <div class="modal-content" >


                    <!-- From tittle -->
                    <div class="row" style="padding: 50px">
                        <div class="col-lg-12">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-50">
                                {{-- <span>Get a Qote For Free</span> --}}
                                <h2>
                                    FINANCIAL & ADMINISTRATIVE SERVICES
                                </h2>
                                <p>
                                    Africa Direct Ltd provides a professional accounting package which helps clients in
                                     the following fields:
                                </p>
                                <ul>
                                    <li> Dedicated airline accounting staff</li>
                                    <li>Central funds accounting and settlement for all international offices</li>
                                    <li>Central funds accounting and settlement for all international offices</li>
                                    <li>IATA Cass settlement system</li>
                                    <li> VAT Handling</li>
                                    <li>Contracting of suppliers / re-negotiation of contracts</li>
                                    <li>Debt collecting and control</li>
                                    <li>Regular financial reporting and settlement</li>
                                    <li>Cash management, budgeting, forecast & cost deviation analysis</li>
                                    <li>Co-ordination, organisation and execution of transactions by electronic banking</li>
                                    <li>Agent and corporate account billing</li>
                                    <li>Interline payables provisioning, plus recharges in and out</li>
                                    <li>GSA override commission payables</li>
                                    <li>Recovery of unreported sales and over claimed commissions</li>
                                </ul>

                            </div>
                        </div>
                        <!-- form -->
                    </div>
                </div>
            </div>

        </div>


    </main>
    @include('user.footer')

    @include('user.script')
    </body>
</html>
