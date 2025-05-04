@extends('front.layouts.master')
@section('title', 'Domestic Worker Visa')
@section('content')
<section class="wrapper image-wrapper bg-image  bg-overlay-300"
        data-image-src="{{ asset('assets/static/domestic-bg.webp') }}">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
            <div class="row text-start">
                <div class="col-lg-7 col-xl-8 col-xxl-8 me-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">Streamline Your <span
                            class="underline-3 style-2 yellow"> Domestic</span> Worker Visa Process</h1>
                    <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Efficiently secure
                        trusted domestic help with our expert visa services.</p>
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
                      <figure class="rounded mx-5 "><img src="{{ asset('assets/static/domestic0.webp') }}"
                               alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                      <figure class="rounded d-none d-md-block"><img src="{{ asset('assets/static/domestic1.webp') }}"
                               alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                      <figure class="rounded "><img src="{{ asset('assets/static/domestic2.webp') }}"
                              s alt=""></figure>
                  </div>
                  <!--/column -->
              </div>
              <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
              <h2 class="fs-16 text-uppercase text-red mb-3">Your Partner in Streamlining Visa Applications</h2>
              <h3 class="display-3 mb-8"> Why <span class="text-gradient gradient-6 display-1">Tah-zeel</span> for
                  Domestic Worker Visa Services?</h3>
              <p class="mb-3">Navigating UAE visa processes can be complex, but Tah-zeel is here to simplify the
                  journey. Our team provides end-to-end support, ensuring a smooth and efficient visa process for
                  domestic workers, helping families access the essential support they need with peace of mind</p>
              <div class="row gy-8">
                  <div class="col-md-6">
                      <div class="d-flex flex-row">
                          <div>
                              <img src="{{ asset('assets/static/lightning-charge.svg') }}"
                                  class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4"
                                  alt="" />
                          </div>
                          <div>
                              <h4 class="mb-1">Dedicated Support</h4>
                              <p class="mb-0">Reliable help with every step, from paperwork to submission. </p>
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
                              <p class="mb-0">Comprehensive application assistance to ensure every requirement is
                                  met.</p>
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
                              <h4 class="mb-1">Compliance First</h4>
                              <p class="mb-0">Services aligned with UAE immigration policies for full legal
                                  compliance.</p>
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
                              <h4 class="mb-1">Efficient & Timely Processing</h4>
                              <p class="mb-0">Fast-tracked, organized handling to avoid delays and ensure quick
                                  approval.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


<div class="wrapper">
    <div class="container">
        <div class="row d-flex justify-content-center mb-10">
            <div class="col-md-8 text-center">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{{ __('domestic-visit-visa.heading') }}</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">
                    {{ __('domestic-visit-visa.subheading_start') }}
                    <span class="text-green">{{ __('domestic-visit-visa.subheading_highlight') }}</span>
                    {{ __('domestic-visit-visa.subheading_end') }}
                </h3>
            </div>
        </div>

        <div class="row bg-soft-ash rounded py-10 px-10">
            <div class="col">
                <ul class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1">
                            <div>
                                <img src="{{ asset('assets/static/businessman.png') }}"
                                     class="svg-inject icon-svg icon-svg-md text-yellow me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">{{ __('domestic-visit-visa.sponsor_tab_title') }}</h4>
                                <p>{{ __('domestic-visit-visa.sponsor_tab_description') }}</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
                            <div>
                                <img src="{{ asset('assets/static/social-worker.png') }}"
                                     class="svg-inject icon-svg icon-svg-md text-green me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">{{ __('domestic-visit-visa.worker_tab_title') }}</h4>
                                <p>{{ __('domestic-visit-visa.worker_tab_description') }}</p>
                            </div>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab2-1">
                        <span class="fw-bold text-red">{{ __('domestic-visit-visa.sponsor_residency_label') }}</span>
                        {{ __('domestic-visit-visa.sponsor_residency_text') }}<br>
                        <span class="fw-bold text-red">{{ __('domestic-visit-visa.sponsor_income_label') }}</span>
                        {{ __('domestic-visit-visa.sponsor_income_text') }}<br>
                        <span class="fw-bold text-red">{{ __('domestic-visit-visa.sponsor_family_label') }}</span>
                        {{ __('domestic-visit-visa.sponsor_family_text') }}
                    </div>

                    <div class="tab-pane fade" id="tab2-2">
                        <span class="fw-bold text-green">{{ __('domestic-visit-visa.worker_age_label') }}</span>
                        {{ __('domestic-visit-visa.worker_age_text') }}<br>
                        <span class="fw-bold text-green">{{ __('domestic-visit-visa.worker_medical_label') }}</span>
                        {{ __('domestic-visit-visa.worker_medical_text') }}<br>
                        <span class="fw-bold text-green">{{ __('domestic-visit-visa.worker_docs_label') }}</span>
                        {{ __('domestic-visit-visa.worker_docs_text') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="wrapper mt-10">
    <div class="container">
        <div class="row d-flex justify-content-center mb-10">
            <div class="col-md-8 text-center">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{{ __('domestic-visit-visa.documents_heading') }}</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">
                    {{ __('domestic-visit-visa.documents_subheading_start') }}
                    <span class="text-green">{{ __('domestic-visit-visa.documents_subheading_highlight') }}</span>
                    {{ __('domestic-visit-visa.documents_subheading_end') }}
                </h3>
            </div>
        </div>

        <div class="row bg-soft-ash rounded py-10 px-10">
            <div class="col">
                <ul class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-3">
                            <div><img src="{{ asset('assets/static/businessman.png') }}" class="svg-inject icon-svg icon-svg-md text-yellow me-4" alt="" /></div>
                            <div>
                                <h4 class="mb-1">{{ __('domestic-visit-visa.doc_tab1_title') }}</h4>
                                <p>{{ __('domestic-visit-visa.doc_tab1_description') }}</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-4">
                            <div><img src="{{ asset('assets/static/social-worker.png') }}" class="svg-inject icon-svg icon-svg-md text-green me-4" alt="" /></div>
                            <div>
                                <h4 class="mb-1">{{ __('domestic-visit-visa.doc_tab2_title') }}</h4>
                                <p>{{ __('domestic-visit-visa.doc_tab2_description') }}</p>
                            </div>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab2-3">
                        <h4>{{ __('domestic-visit-visa.doc_section1_title') }}</h4>
                        {!! __('domestic-visit-visa.doc_section1_list') !!}

                        <h4 class="mt-4">{{ __('domestic-visit-visa.doc_section2_title') }}</h4>
                        {!! __('domestic-visit-visa.doc_section2_list') !!}

                        <h4 class="mt-4">{{ __('domestic-visit-visa.doc_section3_title') }}</h4>
                        {!! __('domestic-visit-visa.doc_section3_list') !!}
                    </div>

                    <div class="tab-pane fade" id="tab2-4">
                        <h4>{{ __('domestic-visit-visa.doc_section4_title') }}</h4>
                        {!! __('domestic-visit-visa.doc_section4_list') !!}

                        <h4 class="mt-4">{{ __('domestic-visit-visa.doc_section5_title') }}</h4>
                        {!! __('domestic-visit-visa.doc_section5_list') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('front.partials.cta-2')


<section class="wrapper bg-light">
    <div class="container-fluid py-4 py-md-8">
        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{{ __('domestic-visit-visa.heading') }}</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">
                    {{ __('domestic-visit-visa.subheading', ['brand' => 'Tah-zeel’s']) }}
                </h3>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                    <div class="col-md-3">
                        <img src="{{ asset('assets/static/file-text.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="mb-1">{{ __('domestic-visit-visa.step1_title') }}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{{ __('domestic-visit-visa.step1_desc') }}</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('assets/static/box-arrow-in-right.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4 class="mb-1">{{ __('domestic-visit-visa.step2_title') }}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{{ __('domestic-visit-visa.step2_desc') }}</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('assets/static/arrow-repeat.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4 class="mb-1">{{ __('domestic-visit-visa.step3_title') }}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{{ __('domestic-visit-visa.step3_desc') }}</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('assets/static/check2-circle.svg') }}" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4 class="mb-1">{{ __('domestic-visit-visa.step4_title') }}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{{ __('domestic-visit-visa.step4_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  


  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-6 align-items-center">
            <div class="col-md-8 col-lg-6 order-lg-2 mx-auto">
                <div class="img-mask mask-2">
                    <img src="{{ asset('assets/static/domestic0.webp') }}" alt="" />
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 mb-3">{{ __('domestic-visit-visa.reliable_support_heading') }}</h2>
                <p>{{ __('domestic-visit-visa.reliable_support_desc') }}</p>
            </div>
        </div>
        <div class="row gx-md-8 gx-xl-12 mt-10 mt-md-13">
            <div class="col-lg-4">
                <h2 class="display-5 mb-3">{{ __('domestic-visit-visa.renewal_heading') }}</h2>
                <p>{{ __('domestic-visit-visa.renewal_desc') }}</p>
            </div>
            <div class="col-lg-8">
                <div class="row gy-6 gx-md-8 gx-xl-12">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-green pe-none me-4">
                                    <span class="number fs-18">1</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">{{ __('domestic-visit-visa.step1_title') }}</h4>
                                <p class="mb-0">{{ __('domestic-visit-visa.step1_desc') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-green pe-none me-4">
                                    <span class="number fs-18">2</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">{{ __('domestic-visit-visa.step2_title') }}</h4>
                                <p class="mb-0">{{ __('domestic-visit-visa.step2_desc') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-green pe-none me-4">
                                    <span class="number fs-18">3</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">{{ __('domestic-visit-visa.step3_title') }}</h4>
                                <p class="mb-0">{{ __('domestic-visit-visa.step3_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col text-center">
                <p>{{ __('domestic-visit-visa.final_paragraph') }}</p>
            </div>
        </div>
    </div>
  </section>
  


@include('front.partials.clients')


@include('front.partials.affiliations')

@include('front.partials.cta-1')

@include('front.partials.contact-us')

@include('front.partials.amr-services-cards')

@endsection