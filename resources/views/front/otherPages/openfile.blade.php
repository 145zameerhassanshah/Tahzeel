@extends('front.layouts.master')
@section('title', 'Open File')
@section('content')
<section class="wrapper image-wrapper bg-image  bg-overlay-300"
    data-image-src="{{ asset('assets/static/openfile-bg.webp') }}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
        <div class="row text-start">
            <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
                {!! __('open-file.hero_title') !!}
                <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">{!! __('open-file.hero_subtitle') !!}</p>
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
                <h2 class="fs-16 text-uppercase text-red mb-3">{!! __('open-file.open_file_subtitle') !!}</h2>
                {!! __('open-file.open_file_title') !!}
                <p class="mb-3">{!! __('open-file.open_file_desc') !!}</p>
                <div class="row gy-8">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/journal-check.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">{!! __('open-file.open_file_point') !!}</h4>
                                <p class="mb-0">{!! __('open-file.open_file_point_answer') !!}</p>
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
                                <h4 class="mb-1">{!! __('open-file.open_file_point1') !!}</h4>
                                <p class="mb-0">{!! __('open-file.open_file_point_answer1') !!}</p>
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
                                <h4 class="mb-1">{!! __('open-file.open_file_point2') !!}</h4>
                                <p class="mb-0">{!! __('open-file.open_file_point_answer2') !!}</p>
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
                                <h4 class="mb-1">{!! __('open-file.open_file_point3') !!}</h4>
                                <p class="mb-0">{!! __('open-file.open_file_point_answer3') !!}</p>
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
                eligibility_criteria_subtitle
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{!! __('open-file.eligibility_criteria_subtitle') !!}</h2>
                {!! __('open-file.eligibility_criteria_title') !!}
                {!! __('open-file.eligibility_criteria_desc') !!}
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="accordion accordion-wrapper" id="accordionIconExample">
                    <div class="card accordion-item icon">
                        <div class="card-header" id="headingIconOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne"
                                aria-expanded="true" aria-controls="collapseIconOne"><span><i
                                        class="bi bi-person-vcard"></i></span>{!! __('open-file.eligibility_criteria_point') !!}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{!! __('open-file.eligibility_criteria_point_answer') !!}</p>
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
                                        class="bi bi-file-person"></i></span>{!! __('open-file.eligibility_criteria_point1') !!}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingIconTwo" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{!! __('open-file.eligibility_criteria_point_answer1') !!}</p>
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
                                        class="bi bi-currency-exchange"></i></span>{!! __('open-file.eligibility_criteria_point2') !!}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconThree" class="accordion-collapse collapse"
                            aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{!! __('open-file.eligibility_criteria_point_answer2') !!}</p>
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
                                        class="bi bi-file-text"></i></span>{!! __('open-file.eligibility_criteria_point3') !!}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconFourth" class="accordion-collapse collapse"
                            aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{!! __('open-file.eligibility_criteria_point_answer3') !!}</p>
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
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{!! __('open-file.required_documents_subtitle') !!}</h2>
                {!! __('open-file.required_documents_title') !!}
                {!! __('open-file.required_documents_desc') !!}
            </div>
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line d-flex justify-content-center text-center">
            <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">01</span></span>
                <h4 class="mb-1 fw-light">{!! __('open-file.required_documents_point') !!}</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-2 "> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">02</span></span>
                <h4 class="mb-1 fw-light">{!! __('open-file.required_documents_point1') !!}</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">03</span></span>
                <h4 class="mb-1 fw-light">{!! __('open-file.required_documents_point2') !!}</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">04</span></span>
                <h4 class="mb-1 fw-light">{!! __('open-file.required_documents_point3') !!}</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-red pe-none mb-4"><span
                        class="number">05</span></span>
                <h4 class="mb-1 fw-light">{!! __('open-file.required_documents_point4') !!}</h4>
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
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{!! __('residency-visa.streamlined_visa_application_process_subtitle') !!}</h2>
                {!! __('residency-visa.streamlined_visa_application_process_title') !!}
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                    <div class="col-md-3"> <img src="{{ asset('assets/static') }}/file-text.svg"
                            class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="mb-1">{!! __('residency-visa.streamlined_visa_application_process_point') !!}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{!! __('residency-visa.streamlined_visa_application_process_point_answer') !!}</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img
                            src="{{ asset('assets/static') }}/box-arrow-in-right.svg"
                            class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4 class="mb-1">{!! __('residency-visa.streamlined_visa_application_process_point1') !!}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{!! __('residency-visa.streamlined_visa_application_process_point_answer1') !!}</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img src="{{ asset('assets/static') }}/arrow-repeat.svg"
                            class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4 class="mb-1">{!! __('residency-visa.streamlined_visa_application_process_point2') !!}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{!! __('residency-visa.streamlined_visa_application_process_point_answer2') !!}</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3"> <img src="{{ asset('assets/static') }}/check2-circle.svg"
                            class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4 class="mb-1">{!! __('residency-visa.streamlined_visa_application_process_point3') !!}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{!! __('residency-visa.streamlined_visa_application_process_point_answer3') !!}</p>
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