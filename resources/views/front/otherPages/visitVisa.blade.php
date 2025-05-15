@extends('front.layouts.master')
@section('title', 'Visit Visa')
@section('content')
<section class="wrapper image-wrapper bg-image  bg-overlay-300" data-image-src="{{ asset('assets/static/amer-center-bg.png') }}">
  <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
    <div class="row text-start">
      <div class="col-lg-8 col-xl-9 col-xxl-8 me-auto" data-cues="slideInDown" data-group="page-title">
        <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">Visa Services Made Simple with <span class="underline-3 style-2 yellow">Amer Centers </span> </h1>
        <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Amer Centers simplify visa applications, renewals, and entry permits for a hassle-free experience.</p>
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
                      <figure class="rounded mx-5 "><img src="{{ asset('assets/static/visitVisa-1.webp') }}"
                               alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                      <figure class="rounded d-none d-md-block"><img
                              src="{{ asset('assets/static/visitVisa-2.webp') }}"
                               alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                      <figure class="rounded "><img src="{{ asset('assets/static/visitVisa-3.webp') }}"
                             alt=""></figure>
                  </div>
                  <!--/column -->
              </div>
              <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
              <h2 class="fs-16 text-uppercase text-muted mb-3">Your Trusted Partner for a Hassle-Free Visa
                  Experience</h2>
              <h3 class="display-3 mb-8"> Why Choose a Visit Visa with <span
                      class="text-gradient gradient-6 display-1">Tah-zeel?</span></h3>
              <p class="mb-3">At Tah-zeel, we are committed to making your visit visa process simple and
                  stress-free. Our team of experts ensures that you receive timely assistance, professional
                  advice, and personalized solutions tailored to your needs. Here are some of the key benefits of
                  choosing Tah-zeel for your visit visa:</p>
              <div class="row gy-8">
                  <div class="col-md-6">
                      <div class="d-flex flex-row">
                          <div>
                              <img src="{{ asset('assets/static/lightning-charge.svg') }}"
                                  class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4"
                                  alt="" />
                          </div>
                          <div>
                              <h4 class="mb-1">Quick Processing Times</h4>
                              <p class="mb-0">Swift and efficient visa handling. </p>
                          </div>
                      </div>
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                      <div class="d-flex flex-row">
                          <div>
                              <img src="{{ asset('assets/static/journal-check.svg') }}"
                                  class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4"
                                  alt="" />
                          </div>
                          <div>
                              <h4 class="mb-1">Expert Guidance</h4>
                              <p class="mb-0">Accurate advice, step-by-step assistance.</p>
                          </div>
                      </div>
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                      <div class="d-flex flex-row">
                          <div>
                              <img src="{{ asset('assets/static/person-check.svg') }}"
                                  class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4"
                                  alt="" />
                          </div>
                          <div>
                              <h4 class="mb-1">Personalized Service</h4>
                              <p class="mb-0">Tailored support for unique needs</p>
                          </div>
                      </div>
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                      <div class="d-flex flex-row">
                          <div>
                              <img src="{{ asset('assets/static/transparency.svg') }}"
                                  class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4"
                                  alt="" />
                          </div>
                          <div>
                              <h4 class="mb-1">Transparent Procedures</h4>
                              <p class="mb-0">Full transparency, constant updates.</p>
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

<section class="wrapper bg-light">
    <div class="container py-4 py-md-8">
        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <h2 class="fs-15 text-uppercase text-muted mb-3 mt-12">{{ __('visit-visa.seamless_visa_experience') }}</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">{{ __('visit-visa.how_to_apply') }}
                    <span class="text-gradient gradient-6 display-1">{{ __('visit-visa.tahzeel') }}</span></h3>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                    <div class="col-md-3">
                        <img src="{{ asset('assets/static/info-circle.svg') }}"
                             class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="mb-1">{{ __('visit-visa.consultation') }}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{{ __('visit-visa.consultation_desc') }}</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('assets/static/file-text.svg') }}"
                             class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4 class="mb-1">{{ __('visit-visa.document_submission') }}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{{ __('visit-visa.document_submission_desc') }}</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('assets/static/arrow-repeat.svg') }}"
                             class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4 class="mb-1">{{ __('visit-visa.application_processing') }}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{{ __('visit-visa.application_processing_desc') }}</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('assets/static/check2-circle.svg') }}"
                             class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4 class="mb-1">{{ __('visit-visa.visa_approval') }}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{{ __('visit-visa.visa_approval_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


@include('front.partials.cta-2')

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7 order-lg-2">
                <figure><img class="w-auto" src="{{ asset('assets/static/visitVisa-4.webp') }}" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h2 class="fs-15 text-uppercase text-line text-primary mb-3">{{ __('visit-visa.required_documents') }}</h2>
                <h3 class="display-5 mb-7">{{ __('visit-visa.smooth_application') }}</h3>
                <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                {{ __('visit-visa.document_1_title') }}
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{ __('visit-visa.document_1_desc') }}</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingTwo">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                {{ __('visit-visa.document_2_title') }}
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{ __('visit-visa.document_2_desc') }}</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingThree">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                {{ __('visit-visa.document_3_title') }}
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{ __('visit-visa.document_3_desc') }}</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingFour">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                {{ __('visit-visa.document_4_title') }}
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{ __('visit-visa.document_4_desc') }}</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingFive">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                {{ __('visit-visa.document_5_title') }}
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{ __('visit-visa.document_5_desc') }}</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingSix">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                {{ __('visit-visa.document_6_title') }}
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{ __('visit-visa.document_6_desc') }}</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingSeven">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                {{ __('visit-visa.document_7_title') }}
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{ __('visit-visa.document_7_desc') }}</p>
                            </div>
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
    <!-- /.container -->
  </section>


@include('front.partials.clients')

@include('front.partials.affiliations')

@include('front.partials.cta-1')

@include('front.partials.contact-us')

@include('front.partials.amr-services-cards')

@endsection
