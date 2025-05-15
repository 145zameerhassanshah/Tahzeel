@extends('front.layouts.master')
@section('title', 'Emirate Id')
@section('content')
<section class="wrapper image-wrapper bg-image  bg-overlay-300"
    data-image-src="{{ asset('assets/static/emiratesID-bg.webp') }}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
        <div class="row text-start">
            <div class="col-lg-7 col-xl-8 col-xxl-7 me-auto" data-cues="slideInDown" data-group="page-title">
                <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">Get Your <span
                        class="underline-3 style-2 yellow">Emirates ID</span> Easily with Tah-zeel</h1>
                <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Fast and Simple
                    Process to Apply, Renew, or Replace Your Emirates ID.</p>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-green rounded-circle rellax w-20 h-20" data-rellax-speed="1"
                    style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="{{ asset('assets/static/emiratesID1.webp') }}"
                        srcset="{{ asset('assets/static/emiratesID1.webp') }} 2x" alt="">
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                {!! __('emirate_id.intro_title') !!}
                {!! __('emirate_id.intro_description') !!}
                <div class="row gx-xl-10 gy-6">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static/bank2.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm me-4 text-red" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">{!! __('emirate_id.step1_title') !!} </h4>
                                <p class="mb-0"> {!! __('emirate_id.step1_para') !!}</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static/hand-thumbs-up.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm me-4 text-green" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">{!! __('emirate_id.step2_title') !!} </h4>
                                <p class="mb-0"> {!! __('emirate_id.step2_para') !!}</p>

                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static/file-text.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm me-4 text-blue" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">{!! __('emirate_id.step3_title') !!} </h4>
                                <p class="mb-0"> {!! __('emirate_id.step3_para') !!}</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/static/box-arrow-in-right.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm me-4 text-orange" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">{!! __('emirate_id.step4_title') !!} </h4>
                                <p class="mb-0"> {!! __('emirate_id.step4_para') !!}</p>
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
        <div class="row">
            <div class="col-md-12">
                 {!! __('emirate_id.additional_para') !!}


            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<section class="wrapper bg-light">
    <div class="container py-4 py-md-6">
        <div class="card bg-soft-green rounded-4">
            <div class="card-body p-md-10 p-xl-11">
                <div class="row gx-lg-8 gx-xl-12 gy-10">
                    <div class="col-lg-6">
                        <img src="" alt="">
                        <h3 class="display-4 mb-4">{!! __('emirate_id.contact_title') !!}
                        </h3>
                        <p class="lead fs-lg mb-0">{!! __('emirate_id.contact_subtitle') !!}</p>
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('assets/static/envelope.svg') }}"
                                class="w-5 svg-inject icon-svg icon-svg-sm text-red " alt="">
                            <a href="" class="lead fs-lg mb-0 text-red pt-1 ms-2">
                                <p>tahzeel@gmail.com</p>
                            </a>

                        </div>
                        <p class="lead fs-lg mb-0">{!! __('emirate_id.contact_suggestion') !!}</p>

                        <div class="d-flex">
                            <img src="{{ asset('assets/static/telephone.svg') }}"
                                class="w-5 svg-inject icon-svg icon-svg-sm text-red" alt="">
                            <a href="" class="lead fs-lg mb-0 text-red pt-1 ms-2">
                                <p>+97 123 456789</p>
                            </a>

                        </div>

                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <div class="accordion accordion-wrapper" id="accordionExample">
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">{!! __('emirate_id.faq_title1') !!}</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                     <p>   {!! __('emirate_id.faq_des1') !!}                  </p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">{!! __('emirate_id.faq_title2') !!}</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                       <p> {!! __('emirate_id.faq_des2') !!}  </p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">{!! __('emirate_id.faq_title3') !!}</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                       <p> {!! __('emirate_id.faq_des3') !!}             </p>
                                    </div>

                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingFour">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">{!! __('emirate_id.faq_title4') !!}</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                       <p> {!! __('emirate_id.faq_des4') !!}   </p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingFour">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">{!! __('emirate_id.faq_title5') !!}</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                      <p>   {!! __('emirate_id.faq_des5') !!}    </p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingSix">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                        aria-expanded="false" aria-controls="collapseSix">{!! __('emirate_id.faq_title6') !!}</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                       <p>  {!! __('emirate_id.faq_des6') !!}  </p>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->

                        </div>
                        <!--/.accordion -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
    </div>
    <!-- /.container -->
</section>

@include('front.partials.cta-2')

@include('front.partials.clients')

@include('front.partials._intro_three_images')

@include('front.partials.affiliations')

<section class="wrapper gradient-2 bg-lines">
    <div class="container py-15 py-md-17 text-center">
        <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                <h2 class="fs-16 text-uppercase text-white mb-3">Join Our Community</h2>
                <h3 class="display-3 text-white mb-6">Let us handle your <span
                        class="underline-2 underline-gradient-9"><em>visa and documentation</em></span> processes
                    smoothly and stress-free. </h3>
                <a href="#" class="btn btn-white fw-normal py-0"><img
                        src="{{ asset('assets/static/telephone.svg') }}" alt="">
                    <p class="ms-2 pt-4">+97-123-456789</p>
                </a>
            </div>
        </div>
    </div>
</section>
@include('front.partials.contact-us')
@include('front.partials.amr-services-cards')
</div>
@endsection
