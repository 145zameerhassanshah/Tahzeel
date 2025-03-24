@extends('front.layouts.master')
@section('title', 'Vat Registration for Business')
@section('content')



@if($hero_section)
    @include('front.partials._hero_section')
@endif


@if($intro_section)
    @include('front.partials._intro_three_images')
@endif

@if($docs)
    @include('front.partials._docs')
@endif


    {{-- Key Features --}}
    <div class="container">
        <div class="row text-center mt-10 mb-12">
            <div class="col">
                <h2 class="display-5">{!! $feature_title->title !!}</h2>
                <p class="mx-5">
                    {!! $feature_title->subtitle !!}
                </p>
            </div>
        </div>
        <div class="row gx-md-5 mb-5 mb-md-5">

            <div class="col-md-6 col-xl-3 ">
                <div class="card shadow-lg card-border-bottom border-soft-yellow h-100 hover-card ">
                    <div class="card-body">
                        <img src="{{ asset('front/dev/assets/img/personal/boxes.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4>{{__('Fast & Hassle-Free Processing')}}</h4>
                        <p class="mb-2">{{__("Get your VAT registration and filings completed quickly with our streamlined approach, minimizing delays and errors.")}}</p>

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-green  h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('front/dev/assets/img/personal/person-lock.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4>FTA Compliance Assurance</h4>
                        <p class="mb-2">We ensure your VAT processes meet all Federal Tax Authority (FTA) regulations, reducing the risk of penalties or non-compliance.</p>

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-orange  h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('front/dev/assets/img/personal/bookmark-check.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                        <h4>Expert Guidance & Support</h4>
                        <p class="mb-2">Our VAT specialists provide step-by-step assistance, helping you understand your tax obligations and making compliance easier.</p>

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-blue  h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('front/dev/assets/img/personal/globe.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                        <h4>End-to-End VAT Solutions</h4>
                        <p class="mb-2">From registration and return filing to consultation and deregistration, we handle every aspect of VAT so you can focus on your business.</p>

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->

    </div>
     {{-- end features  --}}

     <section class="wrapper bg-light">
        <div class="container-fluid py-4 py-md-8">

            <div class="row text-center">
                <div class="col-lg-9 mx-auto">

                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mt-12">Simple & Efficient VAT Processing with <span class="text-gradient gradient-6 display-1">Tah-zeel’s </span>

                    </h3>
                    <p class="lead fs-lg mb-8"><span class="underline green">Tah-zeel </span>simplifies VAT processing, ensuring fast registration and compliance with expert guidance. </p>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/file-text.svg"
                                class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="mb-1">1. Document Submission</h4>
                            <p class="mb-5 mb-md-0 text-justify">We assess your VAT needs and guide you on required services..</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/box-arrow-in-right.svg"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4 class="mb-1">2.Document Collection & Verification</h4>
                            <p class="mb-5 mb-md-0 text-justify">We gather and verify documents for FTA compliance.
                            </p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/arrow-repeat.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">3. Application Submission</h4>
                            <p class="mb-5 mb-md-0 text-justify"> We submit your VAT request accurately and efficiently.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/check2-circle.svg"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4 class="mb-1">4. Approval & Compliance Support</h4>
                            <p class="mb-5 mb-md-0 text-justify">We assist with compliance, return filing, and expert guidance.</p>
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


    <div class="wrapper">
        <div class="container">
            <div class="row d-flex justify-content-center mb-10 mt-10">
                <div class="col-md-8 text-center">
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Essential Documents for a Hassle-Free VAT Process</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mb-5">Documents Required for <span class="text-green">
                        VAT Registration & Compliance </span></h3>
                    <p class="lead fs-lg mb-8"> Having the right documents is key to a smooth VAT process.  <span class="underline green">Tah-zeel</span> simplifies every step, ensuring FTA compliance for registration, filing, and deregistration.

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
                                            class="bi bi-passport"></i></span>Trade License Copy</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>A valid trade license of the business. </p>
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
                                            class="bi bi-person-vcard"></i></span>Passport Copies</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconTwo" class="accordion-collapse collapse" aria-labelledby="headingIconTwo"
                                data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Copies of passports for the owner and any partners.</p>
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
                                            class="bi bi-copy"></i></span>Emirates ID Copies</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconThree" class="accordion-collapse collapse"
                                aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Copies of Emirates IDs for the owner and any partners.
                                    </p>
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
                                            class="bi bi-person-vcard-fill"></i></span>Contact Information</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFourth" class="accordion-collapse collapse"
                                aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Business address and contact details.</p>
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
                                    aria-expanded="false" aria-controls="collapseIconFive"><span><i class="bi bi-bank"></i>
                                    </span>Bank Account Details</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFive" class="accordion-collapse collapse"
                                aria-labelledby="headingIconFive" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p> IBAN and other relevant banking information. </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconSix">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconSix"
                                    aria-expanded="false" aria-controls="collapseIconSix"><span><i class="bi bi-cash"></i>
                                    </span>Financial Records</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconSix" class="accordion-collapse collapse"
                                aria-labelledby="headingIconSix" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p> A declaration of the company's turnover for the past 12 months. </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconSeven">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconSeven"
                                    aria-expanded="false" aria-controls="collapseIconSeven"><span><i class="bi bi-list-ol"></i>
                                    </span>Customs Number</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconSeven" class="accordion-collapse collapse"
                                aria-labelledby="headingIconSeven" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p> If applicable, a customs letter or number. </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconEight">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconEight"
                                    aria-expanded="false" aria-controls="collapseIconEight"><span><i class="bi bi-receipt"></i>
                                    </span>Sample Invoices</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconEight" class="accordion-collapse collapse"
                                aria-labelledby="headingIconEight" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>  Examples of sales invoices issued by the business. </p>
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





    @include('front.partials.clients-2')

    @include('front.partials.affiliations')

    @include('front.partials.cta-1')

    @include('front.partials.contact-us')

    @include('front.partials.amr-services-cards')

@endsection
