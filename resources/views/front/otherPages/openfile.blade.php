@extends('front.layouts.master')
@section('title', 'Open File')
@section('content')
<section class="wrapper image-wrapper bg-image  bg-overlay-300"
    data-image-src="{{ asset('assets/static/openfile-bg.webp') }}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
        <div class="row text-start">
            <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
                <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12"> Open File Services with <span
                        class="underline-3 style-2 yellow"> Tah-zeel</span></h1>
                <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Facilitating a Smooth
                    Start for Your Residency Journey</p>
                <!-- <div><a class="btn btn-white rounded mb-10 mb-xxl-5">Let's Talk</a></div> -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
            <div class="col-lg-6">
                <div class="row gx-md-5 gy-5">
                    <div class="col-12 d-none d-md-block">
                        <figure class="rounded mx-5 "><img src="{{ asset('assets/static') }}/openfile-3.webp" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded d-none d-md-block"><img src="{{ asset('assets/static') }}/openfile-1.webp" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded "><img src="{{ asset('assets/static') }}/openfile-2.webp" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-red mb-3">Understanding the Open File Process</h2>
                <h3 class="display-3 mb-8"> Why <span class="text-gradient gradient-6 display-1">Opening a File</span> is Essential for Residency in the UAE</h3>
                <p class="mb-3">Opening a file with the appropriate UAE government authority is the initial step in
                    applying for a residency visa, allowing your records to be formally recognized and processed for
                    further immigration services. Tah-zeel simplifies this process, ensuring that all requirements are
                    met, so your residency journey starts without obstacles.</p>
                <div class="row gy-8">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/journal-check.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Document Verification</h4>
                                <p class="mb-0">Tah-zeel will review your documents to ensure they meet official standards, minimizing delays.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/box-arrow-in-right.svg"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1"> Application Submission</h4>
                                <p class="mb-0">We handle the official submission, verifying that all details align
                                    with government criteria.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/people.svg"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Coordination with Authorities</h4>
                                <p class="mb-0">Our team communicates with relevant government offices, ensuring your
                                    file proceeds smoothly.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/hand-thumbs-up.svg"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Status Updates and Follow-Up</h4>
                                <p class="mb-0">With Tah-zeel, you receive timely updates, so you always know the
                                    status of your application.</p>
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



<!-- eligibility section-->

<div class="wrapper">
    <div class="container">
        <div class="row d-flex justify-content-center mb-10">
            <div class="col-md-8 text-center">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Requirements for Opening a Residency File</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Eligibility Criteria for <span
                        class="text-green"> Open File</span> Process in the UAE</h3>
                <p class="lead fs-lg mb-8">Learn about the necessary qualifications and documentation for <span
                        class="underline green">opening a residency file</span> in the UAE, both for applicants and
                    sponsors. These criteria may include: </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="accordion accordion-wrapper" id="accordionIconExample">
                    <div class="card accordion-item icon">
                        <div class="card-header" id="headingIconOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne"
                                aria-expanded="true" aria-controls="collapseIconOne"><span><i
                                        class="bi bi-person-vcard"></i></span>Identification</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>Valid passport and UAE ID copies</p>
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
                                        class="bi bi-file-person"></i></span>Proof of Residency</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingIconTwo" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>Documentation of your UAE address</p>
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
                                        class="bi bi-currency-exchange"></i></span>Financial Requirements</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconThree" class="accordion-collapse collapse"
                            aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>Bank statements or salary certificates, if applicable</p>
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
                                aria-expanded="false" aria-controls="collapseIconThree"><span><i
                                        class="bi bi-file-text"></i></span>Additional Documentation</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconFourth" class="accordion-collapse collapse"
                            aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>As per specific residency requirements</p>
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


<!-- required document seciton  -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row d-flex justify-content-center mb-10">
            <div class="col-md-8 text-center">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Essential Documents for File Opening</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15"> Required Documents for <span
                        class="text-green">Open File</span> Application in the UAE</h3>
                <p class="lead fs-lg mb-8">Here’s what you’ll need to start your <span
                        class="underline green">residency file:</span></p>
            </div>
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line d-flex justify-content-center text-center">
            <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">01</span></span>
                <h4 class="mb-1 fw-light">Copy of passport</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-2 "> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">02</span></span>
                <h4 class="mb-1 fw-light">UAE entry permit or previous residency visa (if applicable)</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">03</span></span>
                <h4 class="mb-1 fw-light">Proof of UAE residence, such as a lease agreement or ownership documents</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">04</span></span>
                <h4 class="mb-1 fw-light">Passport-size photograph</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">05</span></span>
                <h4 class="mb-1 fw-light">Other documents as per unique visa requirements</h4>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

@include('front.partials.cta-2')
<!-- /section -->
<!-- end cta  -->


<section class="wrapper bg-light">
    <div class="container-fluid py-4 py-md-8">

        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Step-by-Step Application Support</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Streamlined Visa Application Process with
                    <span class="text-gradient gradient-6 display-1">Tah-zeel’s </span> Expert Support
                </h3>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                    <div class="col-md-3"> <img src="{{ asset('assets/static') }}/file-text.svg"
                            class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="mb-1">1. Document Preparation</h4>
                        <p class="mb-5 mb-md-0 text-justify">Gather required documents like identification, income
                            proof, and housing information. Tah-zeel assists with document checks to ensure accuracy.
                        </p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img
                            src="{{ asset('assets/static') }}/box-arrow-in-right.svg"
                            class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4 class="mb-1">2. Application Submission</h4>
                        <p class="mb-5 mb-md-0 text-justify">Submit the application to the relevant authority. Tah-zeel
                            manages the entire submission for faster processing.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img src="{{ asset('assets/static') }}/arrow-repeat.svg"
                            class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4 class="mb-1">3. Processing and Follow-up</h4>
                        <p class="mb-5 mb-md-0 text-justify">The application undergoes government review. Tah-zeel
                            monitors progress, handling any additional requests promptly.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img src="{{ asset('assets/static') }}/check2-circle.svg"
                            class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4 class="mb-1">4. Final Approval and Visa Issuance</h4>
                        <p class="mb-5 mb-md-0 text-justify">After approval, the visa is issued. Tah-zeel ensures
                            smooth collection and guides on next steps, including residency stamping if needed.</p>
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

@include('front.partials.clients')
@include('front.partials.affiliations')
@include('front.partials.cta-1')
@include('front.partials.contact-us')
@include('front.partials.amr-services-cards')
@endsection