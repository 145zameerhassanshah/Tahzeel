@extends('front.layouts.master')
@section('title', 'Visa Cancellation')
@section('content')

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
                <div class="col-lg-6">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-12 d-none d-md-block">
                            <figure class="rounded mx-5 "><img src="{{ asset('front') }}/dev/assets/img/personal/visaCancel1.webp"
                                    srcset="./assets/img/photos/g8@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <figure class="rounded d-none d-md-block"><img src="{{ asset('front') }}/dev/assets/img/personal/visaCancel2.webp"
                                    srcset="./assets/img/photos/g9@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <figure class="rounded "><img src="{{ asset('front') }}/dev/assets/img/personal/visaCancel3.webp"
                                    srcset="./assets/img/photos/g10@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-16 text-uppercase text-red mb-3">Understanding the Need for Cancellation</h2>
                    <h3 class="display-3 mb-8">Key Situations Requiring <span
                            class="text-gradient gradient-6 display-1">Visa Cancellation</span></h3>
                    <p class="mb-3">Visa cancellation is mandatory for those planning to leave the UAE permanently,
                        switching employment, or transferring to a new visa. Tah-zeel assists in determining if and when a
                        cancellation is necessary, minimizing potential issues.</p>
                    <div class="row gy-8">
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="{{ asset('front') }}/dev/assets/img/personal/exclamation-octagon.svg"
                                        class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4"
                                        alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">End of Employment</h4>
                                    <p class="mb-0"> Required when employment terminates.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="{{ asset('front') }}/dev/assets/img/personal/hospital.svg"
                                        class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4"
                                        alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Permanent Exit</h4>
                                    <p class="mb-0">Necessary for residents planning to leave the UAE for good.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="{{ asset('front') }}/dev/assets/img/personal/bug.svg"
                                        class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4"
                                        alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Family Visa Holders:</h4>
                                    <p class="mb-0">Sponsors must cancel dependents' visas before their own.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="{{ asset('front') }}/dev/assets/img/personal/check2-circle.svg"
                                        class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Switching Residency Status</h4>
                                    <p class="mb-0">For individuals changing visa categories or sponsors.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    
    <!-- /section -->

    <div class="wrapper">
        <div class="container">
            <div class="row d-flex justify-content-center mb-10">
                <div class="col-md-8 text-center">
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Essential Documents for a Seamless Process</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Documents Needed for<span class="text-green">
                            Visa Cancellation </span></h3>
                    <p class="lead fs-lg mb-8"> Gathering the right documents is crucial for a successful visa cancellation.
                        <span class="underline green">Tah-zeel</span> ensures that all required documentation is accurate
                        and complete before submission.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="accordion accordion-wrapper" id="accordionIconExample">
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconOne">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne"
                                    aria-expanded="true" aria-controls="collapseIconOne"><span><i
                                            class="bi bi-passport"></i></span>Original Passport</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Passport of the individual whose visa is being canceled.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconTwo">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconTwo"
                                    aria-expanded="false" aria-controls="collapseIconTwo"><span><i
                                            class="bi bi-person-vcard"></i></span>Emirates ID</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconTwo" class="accordion-collapse collapse" aria-labelledby="headingIconTwo"
                                data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Must be surrendered for all visa cancellation procedures.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconThree">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconThree"
                                    aria-expanded="false" aria-controls="collapseIconThree"><span><i
                                            class="bi bi-copy"></i></span>Sponsor’s Passport Copy</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconThree" class="accordion-collapse collapse"
                                aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Required if the sponsor is an individual rather than a company.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconFourth">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconFourth"
                                    aria-expanded="false" aria-controls="collapseIconFourth"><span><i
                                            class="bi bi-person-vcard-fill"></i></span>Labor Card (for employment-based
                                    visas)</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFourth" class="accordion-collapse collapse"
                                aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Required to confirm employment status.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconFive">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconFive"
                                    aria-expanded="false" aria-controls="collapseIconFive"><span><i
                                            class="bi bi-envelope-check"></i></span>No Objection Certificate (if
                                    applicable)</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFive" class="accordion-collapse collapse"
                                aria-labelledby="headingIconFive" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p> For specific cases requiring employer approval.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                    </div>
                    <!--/.accordion -->
                </div>
            </div>
        </div>
    </div>

    @include('front.partials.cta-2')


    <section class="wrapper bg-light">
        <div class="container-fluid py-4 py-md-8">

            <div class="row text-center">
                <div class="col-lg-9 mx-auto">
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">tep-by-Step Cancellation Support</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">How Visa Cancellation Process Works with
                        <span class="text-gradient gradient-6 display-1">Tah-zeel’s </span> Expert Support
                    </h3>
                    <p class="lead fs-lg mb-8"><span class="underline green">Tah-zeel </span>ensures that clients
                        understand each stage of the cancellation process, helping them navigate the steps seamlessly
                        through Amer Services. </p>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/file-text.svg"
                                class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="mb-1">1. Document Submission</h4>
                            <p class="mb-5 mb-md-0 text-justify">Collect and submit all required documents.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/box-arrow-in-right.svg"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4 class="mb-1">2. Application Submission</h4>
                            <p class="mb-5 mb-md-0 text-justify">Tah-zeel submits the application on behalf of the client.
                            </p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/arrow-repeat.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">3. Final Clearance</h4>
                            <p class="mb-5 mb-md-0 text-justify"> The cancellation is processed by the relevant UAE
                                authorities.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/check2-circle.svg"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4 class="mb-1">4. Receive Cancellation Confirmation</h4>
                            <p class="mb-5 mb-md-0 text-justify">Obtain a stamped cancellation confirmation as proof.</p>
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
    <!-- /section -->


    @include('front.partials.clients-2')

    @include('front.partials.affiliations')

    @include('front.partials.cta-1')

    @include('front.partials.contact-us')

    @include('front.partials.amr-services-cards')

@endsection
