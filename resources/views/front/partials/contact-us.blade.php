<section class="wrapper bg-light">
    <div class="container py-10 py-md-12 mb-15">
        <div class="row d-flex justify-content-center mt-5 mb-12">
            <div class="col-md-6 text-center">
                <h2 class="display-5">Get In Touch With <span class="text-gradient gradient-6 display-1">Tah-zeel</span>
                </h2>
                <p class="">
                    We're here to assist you with any inquiries or concerns. Reach out to our team, and we'll get
                    back to you promptly to help you with all your visa, business, and legal needs.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="row gy-10 gx-lg-8 gx-xl-12">
                    <div class="col-lg-6">
                        <form id="contactForm" class="contact-form needs-validation" method="post"
                            action="./assets/php/contact.php" novalidate>
                            <div class="messages"></div>
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="Jane" required>
                                        <label for="form_name"> Name *</label>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter your Name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_phone" type="text" name="phone" class="form-control"
                                            placeholder="Doe" required>
                                        <label for="form_phone">Phone *</label>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter your Phone.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="jane.doe@example.com" required>
                                        <label for="form_email">Email *</label>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid email address.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 200px"
                                            required></textarea>
                                        <label for="form_message">Message *</label>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter your message.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    {{-- <input type="button" id="submitButton"
                                        class="btn btn-success rounded-pill btn-send mb-3 text-white"
                                        value="Send message"> --}}
                                        <button type="button" id="submitButton" class="btn btn-success rounded-pill btn-send mb-3 text-white">
                                            Send message
                                            <span id="spinner" class="spinner-border spinner-border-sm ms-2" role="status" style="display: none;"></span>
                                        </button>
                                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6 order-lg-2">
                        <div class="card me-lg-6 bg-pale-red hover-card">
                            <div class="card-body p-6 shadow-lg">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-red pe-none me-4"><i
                                                class="uil uil-location-pin-alt"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 text-red">Address</h4>
                                        <p class="mb-0 fw-normal">Ajman, Sharjah, United Arab Emirates.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                        <div class="card ms-lg-13 mt-6 bg-pale-green hover-card ">
                            <div class="card-body p-6 shadow-lg">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-green pe-none me-4"><i
                                                class="uil uil-phone-volume"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 text-green">Phone</h4>
                                        <p class="mb-0 fw-normal">00 (123) 456 78 90</p>
                                    </div>
                                </div>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                        <div class="card mx-lg-6 mt-6 bg-pale-yellow hover-card ">
                            <div class="card-body p-6 shadow-lg ">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-yellow pe-none me-4"><i
                                                class="uil uil-envelope"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 text-yellow">Email</h4>
                                        <p class="mb-0 fw-normal">tahzeel@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
