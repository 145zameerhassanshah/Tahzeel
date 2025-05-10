@extends('front.layouts.master')
@section('title', 'Business Setup & Licensing')
@section('content')


    <section class="wrapper image-wrapper bg-image  bg-overlay-300"
        data-image-src="{{ asset('assets/static') }}/payrollBg.webp">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
            <div class="row text-start">
                <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">{!! __('ded-businessLicense.hero_title') !!}</h1>
                    <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">{{ __('ded-businessLicense.hero_sub_title') }}</p>
                    <!-- <div>
                      <a class="btn btn-white rounded mb-10 mb-xxl-5">Let's Talk</a>
                    </div> -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>

    </section>
    <!-- /section -->
    </div>
    <!-- about amer centers  -->

    
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
          <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
              <div class="shape bg-soft-green rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
              <figure class="rounded"><img src="{{ asset('assets/static') }}/ded-businessLicense.webp"  alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-red mb-3">{{ __('ded-businessLicense.intro_sub_title') }}</h2>
                <h3 class="display-3 mb-8">{!! __('ded-businessLicense.intro_title') !!}</h3>
                <p class="mb-3">{{ __('ded-businessLicense.intro_description') }}</p>
                <div class="row gx-xl-10 gy-6">
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('front/dev/assets/img/icons/lineal') }}/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">{{ __('ded-businessLicense.intro_point_heading1') }}</h4>
                      <p class="mb-0">{{ __('ded-businessLicense.intro_point_description1') }}</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('front/dev/assets/img/icons/lineal/award-2.svg') }}" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">{{ __('ded-businessLicense.intro_point_heading2') }}</h4>
                      <p class="mb-0">{{ __('ded-businessLicense.intro_point_description2') }}</p>
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
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-8">{{ __('ded-businessLicense.ded_service_subtitle') }}</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mb-5">{!! __('ded-businessLicense.ded_service_title') !!}</h3>
                    <p class="lead fs-lg mb-8">{!! __('ded-businessLicense.document_Description') !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="accordion accordion-wrapper" id="accordionIconExample">
    
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconOne">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne"
                                    aria-expanded="true" aria-controls="collapseIconOne">
                                    <span><i class="bi bi-passport"></i></span>
                                    {{ __('ded-businessLicense.document_point1_heading') }}
                                </button>
                            </div>
                            <div id="collapseIconOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>{{ __('ded-businessLicense.document_point1_description') }}</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconTwo">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconTwo"
                                    aria-expanded="false" aria-controls="collapseIconTwo">
                                    <span><i class="bi bi-person-vcard"></i></span>
                                    {{ __('ded-businessLicense.document_point2_heading') }}
                                </button>
                            </div>
                            <div id="collapseIconTwo" class="accordion-collapse collapse" aria-labelledby="headingIconTwo"
                                data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>{{ __('ded-businessLicense.document_point2_description') }}</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconThree">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconThree"
                                    aria-expanded="false" aria-controls="collapseIconThree">
                                    <span><i class="bi bi-copy"></i></span>
                                    {{ __('ded-businessLicense.document_point3_heading') }}
                                </button>
                            </div>
                            <div id="collapseIconThree" class="accordion-collapse collapse"
                                aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>{{ __('ded-businessLicense.document_point3_description') }}</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconFourth">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconFourth"
                                    aria-expanded="false" aria-controls="collapseIconFourth">
                                    <span><i class="bi bi-person-vcard-fill"></i></span>
                                    {{ __('ded-businessLicense.document_point4_heading') }}
                                </button>
                            </div>
                            <div id="collapseIconFourth" class="accordion-collapse collapse"
                                aria-labelledby="headingIconFourth" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>{{ __('ded-businessLicense.document_point4_description') }}</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconFive">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconFive"
                                    aria-expanded="false" aria-controls="collapseIconFive">
                                    <span><i class="bi bi-bank"></i></span>
                                    {{ __('ded-businessLicense.document_point5_heading') }}
                                </button>
                            </div>
                            <div id="collapseIconFive" class="accordion-collapse collapse"
                                aria-labelledby="headingIconFive" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>{{ __('ded-businessLicense.document_point5_description') }}</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconSix">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconSix"
                                    aria-expanded="false" aria-controls="collapseIconSix">
                                    <span><i class="bi bi-cash"></i></span>
                                    {{ __('ded-businessLicense.document_point6_heading') }}
                                </button>
                            </div>
                            <div id="collapseIconSix" class="accordion-collapse collapse"
                                aria-labelledby="headingIconSix" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>{{ __('ded-businessLicense.document_point6_description') }}</p>
                                </div>
                            </div>
                        </div>
    
                    </div> <!--/.accordion -->
                </div>
            </div>
        </div>
    </div>
    
    
   
    
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container-fluid py-4 py-md-8">
    
            <div class="row text-center">
                <div class="col-lg-9 mx-auto">
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{!! __('ded-businessLicense.how_it_works_title') !!}</h2>
                    <h2 class="display-5">{!! __('ded-businessLicense.how_it_works_subtitle') !!}</h2>
                    <p class="mx-5">
                        {!! __('ded-businessLicense.how_it_works_description') !!}
                    </p>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                        <div class="col-md-3"> 
                            <img src="{{ asset('assets/static') }}/file-text.svg"
                                class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="mb-1">{!! __('ded-businessLicense.process_step1_title') !!}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{!! __('ded-businessLicense.process_step1_description') !!}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> 
                            <img src="{{ asset('assets/static') }}/box-arrow-in-right.svg"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4 class="mb-1">{!! __('ded-businessLicense.process_step2_title') !!}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{!! __('ded-businessLicense.process_step2_description') !!}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> 
                            <img src="{{ asset('assets/static') }}/arrow-repeat.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">{!! __('ded-businessLicense.process_step3_title') !!}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{!! __('ded-businessLicense.process_step3_description') !!}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> 
                            <img src="{{ asset('assets/static') }}/check2-circle.svg"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4 class="mb-1">{!! __('ded-businessLicense.process_step4_title') !!}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{!! __('ded-businessLicense.process_step4_description') !!}</p>
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
    
    {{-- Key Features --}}
    <div class="container">
        <div class="row text-center mt-10 mb-12">
            <div class="col">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{!! __('ded-businessLicense.trusted_partner_title') !!}</h2>
                <h2 class="display-5">{!! __('ded-businessLicense.trusted_partner_heading') !!}</h2>
                <p class="mx-5">
                    {!! __('ded-businessLicense.trusted_partner_description') !!}
                </p>
            </div>
        </div>
        <div class="row gx-md-5 mb-5 mb-md-5">
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-green h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('assets/static/person-lock.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4>{!! __('ded-businessLicense.box_1_title') !!}</h4>
                        <p class="mb-2">{!! __('ded-businessLicense.box_1_description') !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-orange h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('assets/static/bookmark-check.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                        <h4>{!! __('ded-businessLicense.box_2_title') !!}</h4>
                        <p class="mb-2">{!! __('ded-businessLicense.box_2_description') !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-blue h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('assets/static/globe.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                        <h4>{!! __('ded-businessLicense.box_3_title') !!}</h4>
                        <p class="mb-2">{!! __('ded-businessLicense.box_3_description') !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-yellow h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('assets/static/boxes.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4>{!! __('ded-businessLicense.box_4_title') !!}</h4>
                        <p class="mb-2">{!! __('ded-businessLicense.box_4_description') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     {{-- end features  --}}

     
    <!-- /section -->

    
    

    <section class="wrapper">
        <div class="container py-14 py-md-16">
          <div class="row d-flex align-items-start gy-10">
            <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                <h2 class="fs-16 text-uppercase text-red mb-3">{!! __('ded-businessLicense.ded_service_subtitle') !!}</h2>
                <h3 class="display-3 mb-8"><span class="text-green">{!! __('ded-businessLicense.ded_service_title') !!}</span> </h3>
                <p class="mb-3">{!! __('ded-businessLicense.ded-businessLicense_desc') !!}</p>
            </div>
            <!-- /column -->
            <div class="col-lg-6 ms-auto">
                <a href="{{ route('front.vat.business') }}" class="text-decoration-none">
                    <div class="card bg-soft-green mb-6 shadow-sm" 
                         style="transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;"
                         onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.15)';"
                         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                      <div class="card-body d-flex flex-row align-items-center">
                        <div>
                          <img src="{{ asset('assets/static') }}/search-2.svg" 
                               class="svg-inject icon-svg icon-svg-md text-green me-4" alt="" />
                        </div>
                        <div>
                          <h3 class="fs-21 mb-2">{!! __('ded-businessLicense.service_box_1') !!}</h3>
                          <p class="mb-0">{!! __('ded-businessLicense.service_box_1_desc') !!}</p>
                        </div>
                      </div>
                    </div>
                  </a>
                <!-- /.card -->
                
                <a href="{{ route('front.vat.business') }}" class="text-decoration-none">
                  <div class="card bg-soft-red mb-6"
                  style="transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;"
                         onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.15)';"
                         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                      <div class="card-body d-flex flex-row">
                      <div>
                          <img src="{{ asset('assets/static') }}/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md text-red me-5" alt="" />
                      </div>
                      <div>
                          <h3 class="fs-21 mb-2">{!! __('ded-businessLicense.service_box_2') !!}</h3>
                          <p class="mb-0">{!! __('ded-businessLicense.service_box_2_desc') !!}</p>
                      </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  </a>
                <!-- /.card -->
      
                <a href="{{ route('front.vat.business') }}" class="text-decoration-none">
                  <div class="card bg-soft-blue mb-6"
                         style="transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;"
                         onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.15)';"
                         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                      <div class="card-body d-flex flex-row">
                        <div>
                          <img src="{{ asset('assets/static') }}/smartphone.svg" class="svg-inject icon-svg icon-svg-md text-blue me-5" alt="" />
                        </div>
                        <div>
                          <h3 class="fs-21 mb-2">{!! __('ded-businessLicense.service_box_3') !!}</h3>
                          <p class="mb-0">{!! __('ded-businessLicense.service_box_3_desc') !!}</p>
                        </div>
                      </div>
                  </a>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
      
                <a href="{{ route('front.vat.business') }}" class="text-decoration-none">
                  <div class="card bg-soft-red mb-6"
                       style="transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;"
                       onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.15)';"
                       onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                      <div class="card-body d-flex flex-row">
                        <div>
                          <img src="{{ asset('assets/static') }}/design.svg" class="svg-inject icon-svg icon-svg-md text-red me-5" alt="" />
                        </div>
                        <div>
                          <h3 class="fs-21 mb-2">{!! __('ded-businessLicense.service_box_4') !!}</h3>
                          <p class="mb-0">{!! __('ded-businessLicense.service_box_4_desc') !!}</p>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </a>
                <!-- /.card -->
      
                <a href="{{ route('front.vat.business') }}" class="text-decoration-none">
                  <div class="card bg-soft-green mb-6"
                               style="transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;"
                               onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.15)';"
                               onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                      <div class="card-body d-flex flex-row">
                        <div>
                          <img src="{{ asset('assets/static') }}/video-editing.svg" class="svg-inject icon-svg icon-svg-md text-green me-5" alt="" />
                        </div>
                        <div>
                          <h3 class="fs-21 mb-2">{!! __('ded-businessLicense.service_box_5') !!}</h3>
                          <p class="mb-0">{!! __('ded-businessLicense.service_box_5_desc') !!}</p>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                </a>
                <!-- /.card -->
      
                <a href="{{ route('front.vat.business') }}" class="text-decoration-none">
                  <div class="card bg-soft-blue"
                               style="transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;"
                               onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.15)';"
                               onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                      <div class="card-body d-flex flex-row">
                        <div>
                          <img src="{{ asset('assets/static') }}/browser.svg" class="svg-inject icon-svg icon-svg-md text-blue me-5" alt="" />
                        </div>
                        <div>
                          <h3 class="fs-21 mb-2">{!! __('ded-businessLicense.service_box_6') !!}</h3>
                          <p class="mb-0">{!! __('ded-businessLicense.service_box_6_desc') !!}</p>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                </a>
                <!-- /.card -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      
      <!-- /section -->

    @include('front.partials.cta-2')

    @include('front.partials.clients')

    @include('front.partials.affiliations')

    @include('front.partials.cta-1')

    @include('front.partials.contact-us')

   


@endsection
