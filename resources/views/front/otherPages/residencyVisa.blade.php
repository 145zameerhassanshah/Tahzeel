@extends('front.layouts.master')
@section('title', 'Residency Visa')
@section('content')

{{-- Hero Section --}}
@include('front.partials._hero_section', ['page' => $page])


@php($introSection = $page->introductionSections->first())
@if ($introSection)
@include('front.partials._intro_three_images', ['introSection' => $introSection])
@endif


{{-- Section Titles --}}
@php($section = $page->sectionTitles->where('type', 'residency-visa')->first())
@if ($section)
@include('front.partials._section_title', ['section' => $section])
@endif


{{-- Feature Images --}}
@php($section = $page->features->where('type', 'residency-visa')->first())
@if ($section)
@include('front.partials._feature_image', ['feature' => $feature])
@endif


{{-- Why Us Images --}}
@php($why_us_images = $page->whyUsImages)
@if ($why_us_images->isNotEmpty())
@include('front.partials._why_us_image', ['why_us_images' => $why_us_images])
@endif


{{-- Testimonials --}}
@php($testimonials = $page->testimonials)
@if ($testimonials->isNotEmpty())
@include('front.partials.clients-2', ['testimonials' => $testimonials])
@endif


{{-- Procedures --}}
@php($procedures = $page->procedures)
@if ($procedures->isNotEmpty())
@include('front.partials._procedures', ['procedures' => $procedures])
@endif


{{-- Call To Actions --}}
@php($callToActions = $page->callToActions)
@if ($callToActions->isNotEmpty())
@include('front.partials._cta', ['callToActions' => $callToActions])
@endif


{{-- FAQ's --}}
@php($faqs = $page->faqs)
@if ($faqs->isNotEmpty())
@include('front.partials._faqs_1', ['faqs' => $faqs])
@endif



{{-- Features --}}
@php($features = $page->features)
@if ($features->isNotEmpty())
@include('front.partials._features', ['features' => $features])
@endif

<!-- About Amer Centers  -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
            <div class="col-lg-6">
                <div class="row gx-md-5 gy-5">
                    <div class="col-12 d-none d-md-block">
                        <figure class="rounded mx-5 "><img
                                src="{{ asset('assets/static') }}/residency1.webp"
                                alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded d-none d-md-block"><img
                                src="{{ asset('assets/static') }}/residency2.webp"
                                alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded "><img src="{{ asset('assets/static') }}/residency3.webp"
                                alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-red mb-3">Your Partner in Streamlining Visa Applications</h2>
                <h3 class="display-3 mb-8"> Why <span class="text-gradient gradient-6 display-1">Tah-zeel</span> for
                    Residency Visa Services?</h3>
                <p class="mb-3">Choosing Tah-zeel for your Residency Visa needs means partnering with a reliable
                    expert committed to simplifying the entire process for you. Our goal is to ensure a transparent and
                    efficient experience, managing all aspects of documentation and coordination so that you can focus
                    on your new journey. </p>
                <div class="row gy-8">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/lightning-charge.svg"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Comprehensive Support</h4>
                                <p class="mb-0">We guide you from application to approval, ensuring a seamless
                                    experience. </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/journal-check.svg"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Expertise You Can Trust</h4>
                                <p class="mb-0">Our knowledgeable team ensures all documents meet UAE regulations.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/person-check.svg"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Swift Processing</h4>
                                <p class="mb-0">We work closely with government agencies to expedite your residency
                                    visa.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static') }}/transparency.svg"
                                    class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Tailored Assistance</h4>
                                <p class="mb-0">Each client receives tailored support and clear answers at every
                                    stage.</p>
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
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{!! __('residency-visa.eligibility_criteria_title') !!}</h2>
                {!! __('residency-visa.eligibility_criteria_subtitle') !!}
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="accordion accordion-wrapper" id="accordionIconExample">
                    <div class="card accordion-item icon">
                        <div class="card-header" id="headingIconOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne"
                                aria-expanded="true" aria-controls="collapseIconOne"><span><i
                                        class="bi bi-person-workspace"></i></span>{!! __('residency-visa.eligibility_criteria_offer') !!}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{!! __('residency-visa.eligibility_criteria_offer_answer') !!}</p>
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
                                        class="bi bi-people"></i></span>{!! __('residency-visa.eligibility_criteria_offer1') !!}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconTwo" class="accordion-collapse collapse" aria-labelledby="headingIconTwo"
                            data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{!! __('residency-visa.eligibility_criteria_offer_answer1') !!}</p>
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
                                        class="bi bi-briefcase"></i></span>{!! __('residency-visa.eligibility_criteria_offer2') !!}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconThree" class="accordion-collapse collapse"
                            aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{!! __('residency-visa.eligibility_criteria_offer_answer2') !!}</p>
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
                                        class="bi bi-backpack2"></i></span>{!! __('residency-visa.eligibility_criteria_offer3') !!}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIconFourth" class="accordion-collapse collapse"
                            aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{!! __('residency-visa.eligibility_criteria_offer_answer3') !!}</p>
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

<!-- end eligibility section  -->
<!-- required document seciton  -->

<div class="wrapper">
    <div class="container">
        <div class="row d-flex justify-content-center mb-10">
            <div class="col-md-8 text-center">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{!! __('residency-visa.documents_required_title') !!}</h2>
                {!! __('residency-visa.documents_required_subtitle') !!}
            </div>
        </div>
        <div class="row  bg-soft-ash rounded py-10 px-10">
            <div class="col">
                <ul
                    class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1">
                            <div><img src="{{ asset('assets/static') }}/businessman.png"
                                    class="svg-inject icon-svg icon-svg-md text-yellow me-4" alt="" /></div>
                            <div>
                                <h4 class="mb-1">{!! __('residency-visa.documents_required_sponsors') !!}</h4>
                                <p>{!! __('residency-visa.documents_required_sponsors_subtitle') !!}</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
                            <div><img src="{{ asset('assets/static') }}/social-worker.png"
                                    class="svg-inject icon-svg icon-svg-md text-green me-4" alt="" /></div>
                            <div>
                                <h4 class="mb-1">{!! __('residency-visa.documents_required_applicants') !!}</h4>
                                <p>{!! __('residency-visa.documents_required_sponsors_subtitle') !!}</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.nav-tabs -->
                <div class="tab-content ">
                    <div class="tab-pane fade show active" id="tab2-1">
                        <span class="fw-bold text-red">{!! __('residency-visa.documents_required_sponsors_point') !!}</span>{!! __('residency-visa.documents_required_sponsors_answer') !!}
                        <br>
                        <span class="fw-bold text-red">{!! __('residency-visa.documents_required_sponsors_point1') !!}</span>{!! __('residency-visa.documents_required_sponsors_answer1') !!}
                        <br>
                        <span class="fw-bold text-red">{!! __('residency-visa.documents_required_sponsors_point2') !!}</span>{!! __('residency-visa.documents_required_sponsors_answer2') !!}
                        <br>
                        <span class="fw-bold text-red">{!! __('residency-visa.documents_required_sponsors_point3') !!}</span>{!! __('residency-visa.documents_required_sponsors_answer3') !!}
                        <br>
                        <span class="fw-bold text-red">{!! __('residency-visa.documents_required_sponsors_point4') !!}</span>{!! __('residency-visa.documents_required_sponsors_answer4') !!}
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-2">
                        <span class="fw-bold text-green">{!! __('residency-visa.documents_required_applicants_point') !!}</span> {!! __('residency-visa.documents_required_applicants_answer') !!}
                        <br>
                        <span class="fw-bold text-green">{!! __('residency-visa.documents_required_applicants_point1') !!}</span> {!! __('residency-visa.documents_required_applicants_answer1') !!}
                        <br>
                        <span class="fw-bold text-green">{!! __('residency-visa.documents_required_applicants_point2') !!}</span> {!! __('residency-visa.documents_required_applicants_answer2') !!}
                    </div>
                    <!--/.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</div>
<!-- end document section  -->

<!-- cta  -->
@include('front.partials.cta-2')
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

<!-- /section -->
@include('front.partials.clients')
@include('front.partials.affiliations')
@include('front.partials.cta-1')
@include('front.partials.contact-us')
@include('front.partials.amr-services-cards')
@endsection
