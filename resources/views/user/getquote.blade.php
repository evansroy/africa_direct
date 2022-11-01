    <!--? contact-form start -->
    <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-8 col-lg-9">
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
                                    <span>Get a Qote For Free</span>
                                    <h2>Request a Free Quote</h2>
                                    {{-- <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p> --}}
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form action="{{url('send_Quote')}}" method="POST" class="contact-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="email" placeholder="Email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="number" placeholder="Contact Number" name="contact" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="select-items">
                                        <select id="select1" name="freightype" class="input-form" required>
                                            <option value="Freight Type">Freight Type</option>
                                            <option value="Catagories One">Catagories One</option>
                                            <option value="Catagories Two">Catagories Two</option>
                                            <option value="Catagories Three">Catagories Three</option>
                                            <option value="Catagories Four">Catagories Four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="City of Departure" name="cityofdeparture" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Incoterms" name="incoterm" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="number" placeholder="Weight" name="weight" required>
                                    </div>
                                </div>
                                <!-- Height Width length -->
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="number" placeholder="Height" name="height" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="number" placeholder="Width" name="width" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="number" placeholder="length" name="length" required>
                                    </div>
                                </div>
                                <!-- Radio Button -->

                                <!-- Button -->
                                <div class="col-lg-12">
                                    <button name="submit" class="submit-btn" type="submit">Request a Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form end -->
