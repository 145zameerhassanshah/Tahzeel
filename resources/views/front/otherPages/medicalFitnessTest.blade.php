@extends('front.layouts.master')
@section('title', 'Medical Fitness Test')
@section('content')
<!-- {!! __('about-us.our_commitment_subtitle') !!} -->
<section class="wrapper image-wrapper bg-image  bg-overlay-300" data-image-src="{{ asset('front/dev/assets/img/personal/medical-bg.webp') }}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
        <div class="row text-start">
            <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
                <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12"> Ensuring Health Compliance with <span class="underline-3 style-2 yellow">DHA Standards</span></h1>
                <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Reliable Medical Fitness Testing for UAE Residency</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
            <div class="col-lg-6">
                <div class="row gx-md-5 gy-5">
                    <div class="col-12 d-none d-md-block">
                        <figure class="rounded mx-5 "><img src="{{ asset('front/dev/assets/img/personal/medical-1.webp') }}"
                                srcset="./assets/img/photos/g8@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded d-none d-md-block"><img src="{{ asset('front/dev/assets/img/personal/medical-2.webp') }}"
                                srcset="./assets/img/photos/g9@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded "><img src="{{ asset('front/dev/assets/img/personal/medical-3.webp') }}"
                                srcset="./assets/img/photos/g10@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-red mb-3">Health and Safety at the Core</h2>
                <h3 class="display-3 mb-8"><span class="text-gradient gradient-6 display-1">Medical Fitness
                        Testing</span> for UAE Visa Holders</h3>
                <p class="mb-3">Medical fitness tests are a required step in the UAE visa process, ensuring public
                    health and safety. In collaboration with the Dubai Health Authority (DHA), we facilitate accurate
                    and efficient medical screenings to help applicants meet residency requirements quickly and easily.
                </p>
                <div class="row gy-8">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('front/dev/assets/img/personal/exclamation-octagon.svg') }}"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Mandatory for Residency</h4>
                                <p class="mb-0">Essential for all applicants to obtain or renew residency in the UAE.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('front/dev/assets/img/personal/hospital.svg') }}"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Conducted by DHA-Approved Centers</h4>
                                <p class="mb-0">Tests are performed at certified facilities across Dubai and the UAE.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('front/dev/assets/img/personal/bug.svg') }}"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Screening for Communicable Diseases</h4>
                                <p class="mb-0">Ensures the health and safety of the UAE community by screening for
                                    tuberculosis, hepatitis, and other diseases.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('front/dev/assets/img/personal/check2-circle.svg') }}"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Supports Visa Approval</h4>
                                <p class="mb-0">Successful test results are necessary for the visa issuance process
                                    to proceed.</p>
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

<div class="wrapper">
    <div class="container">
        <div class="row d-flex justify-content-center mb-10">
            <div class="col-md-8 text-center">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Documentation for Health Screening</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15"><span class="text-green">Required Documents
                    </span></h3>
                <p class="lead fs-lg mb-8">When preparing for a <span class="underline green">medical fitness
                        test</span>, applicants need to present key identification and visa documentation to
                    DHA-approved centers. </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="accordion accordion-wrapper" id="accordionIconExample">
                    <div class="card accordion-item icon">
                        <div class="card-header" id="headingIconOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne"
                                aria-expanded="true" aria-controls="collapseIconOne"><span><i
                                        class="bi bi-passport"></i></span>Valid
                                Passport Copy</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>Clear and up-to-date passport copy.</p>
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
                                        class="bi bi-person-vcard"></i></span>Passport-sized Photographs</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingIconTwo" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>Recent, compliant photos.</p>
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
                                        class="bi bi-house"></i></span>Residency Visa Application</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconThree" class="accordion-collapse collapse"
                            aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>Documentation indicating visa application status.</p>
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
                                        class="bi bi-person-vcard-fill"></i></span>Emirates ID Application (if
                                applicable)</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconFourth" class="accordion-collapse collapse"
                            aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>Required for Emirates ID processing after the fitness test.</p>
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
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Step-by-Step Testing Guide</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">How the Medical Fitness Test Works with <span
                        class="text-gradient gradient-6 display-1">Tah-zeel’s </span> Expert Support</h3>
                <p class="lead fs-lg mb-8">Understanding the testing process helps ensure it’s completed accurately and
                    efficiently. <span class="underline green">Tah-zeel </span>assists with all steps to streamline
                    your experience.</p>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                    <div class="col-md-3"> <img src="{{ asset('front/dev/assets/img/personal/file-text.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="mb-1">1. Schedule Test</h4>
                        <p class="mb-5 mb-md-0 text-justify">Book an appointment at a DHA-accredited center.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img src="{{ asset('front/dev/assets/img/personal/box-arrow-in-right.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4 class="mb-1">2. Document Verification</h4>
                        <p class="mb-5 mb-md-0 text-justify">Present required documents at the center.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img src="{{ asset('front/dev/assets/img/personal/arrow-repeat.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4 class="mb-1">3. Health Screening</h4>
                        <p class="mb-5 mb-md-0 text-justify">Includes tests for tuberculosis, HIV, hepatitis, and other
                            health checks.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img src="{{ asset('front/dev/assets/img/personal/check2-circle.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4 class="mb-1">4. Results and Follow-Up</h4>
                        <p class="mb-5 mb-md-0 text-justify">Receive results, and Tah-zeel coordinates with DHA for any
                            required follow-up.</p>
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
{{-- @include('front.partials.clients-2') --}}
@include('front.partials.affiliations')
@include('front.partials.cta-1')
@include('front.partials.contact-us')
@include('front.partials.amr-services-cards')
@endsection