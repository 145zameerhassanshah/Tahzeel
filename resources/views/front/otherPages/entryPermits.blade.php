<<<<<<< HEAD
@extends('front.layouts.master')
@section('title', 'Domestic Worker Visa')
@section('content')


    <section class="wrapper image-wrapper bg-image  bg-overlay-300" data-image-src="{{ asset('assets/static') }}/entryPermit-bg.webp">
      <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
        <div class="row text-start">
          <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12"> Entry Permit Assistance  <span class="underline-3 style-2 yellow">Services</span></h1>
            <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Entry permits provide temporary access to the UAE for business, tourism, or family visits. Tah-zeel simplifies the permit process by ensuring that all requirements are met efficiently through Amer Services.</p>
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
          <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
            <div class="col-lg-6">
              <div class="row gx-md-5 gy-5">
                <div class="col-12 d-none d-md-block">
                  <figure class="rounded mx-5 "><img src="{{ asset('assets/static') }}/entryPermit1.webp" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <figure class="rounded d-none d-md-block"><img src="{{ asset('assets/static') }}/entryPermit2.webp" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <figure class="rounded "><img src="{{ asset('assets/static') }}/entryPermit3.webp"  alt=""></figure>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
              <h2 class="fs-16 text-uppercase text-red mb-3">Choosing the Right Permit</h2>
              <h3 class="display-3 mb-8">Various <span class="text-gradient gradient-6 display-1">Entry Permits</span> Available in the UAE</h3>
              <p class="mb-3">The UAE offers several types of entry permits based on the purpose of the visit. Tah-zeel provides guidance on selecting the correct permit, ensuring compliance with UAE regulations.</p>
              <div class="row gy-8">
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/airplane.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Tourist Entry Permit</h4>
                      <p class="mb-0">For those visiting for tourism and leisure.</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/people.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Visit Entry Permit</h4>
                      <p class="mb-0"> For family visits, allowing relatives to stay temporarily.</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/suitcase-lg.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Business Entry Permit</h4>
                      <p class="mb-0">For business and professional purposes.</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/bag-heart.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Transit Entry Permit</h4>
                      <p class="mb-0">Short-term permits for layovers in the UAE.</p>
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
                  <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Documents Needed for Entry Permit Application</h2>
                  <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Required Documentation for <span class="text-green">Entry Permits </span></h3>
                  <p class="lead fs-lg mb-8">Accurate documentation is essential for entry permit approvals. <span class="underline green">Tah-zeel</span> assists clients in gathering and submitting the correct paperwork to prevent delays. </p>
                </div>
              </div>
            <div class="row">
                <div class="col">
                    <div class="accordion accordion-wrapper" id="accordionIconExample">
                        <div class="card accordion-item icon">
                          <div class="card-header" id="headingIconOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne" aria-expanded="true" aria-controls="collapseIconOne"><span><i class="bi bi-passport"></i></span>Valid Passport Copy</button>
                          </div>
                          <!--/.card-header -->
                          <div id="collapseIconOne" class="accordion-collapse collapse show" aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                              <p>Valid for at least six months.</p>
                            </div>
                            <!--/.card-body -->
                          </div>
                          <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                          <div class="card-header" id="headingIconTwo">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconTwo" aria-expanded="false" aria-controls="collapseIconTwo"><span><i class="bi bi-person-bounding-box"></i></span>Passport-sized Photographs</button>
                          </div>
                          <!--/.card-header -->
                          <div id="collapseIconTwo" class="accordion-collapse collapse" aria-labelledby="headingIconTwo" data-bs-parent="#accordionIconExample">
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
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconThree" aria-expanded="false" aria-controls="collapseIconThree"><span><i class="bi bi-question-lg"></i></span>Purpose Documentation</button>
                          </div>
                          <!--/.card-header -->
                          <div id="collapseIconThree" class="accordion-collapse collapse" aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                              <p>Proof of purpose, such as invitation letters for business or family visits.</p>
                            </div>
                            <!--/.card-body -->
                          </div>
                          <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconFourth">
                              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconFourth" aria-expanded="false" aria-controls="collapseIconThree"><span><i class="bi bi-airplane"></i></span>Travel Itinerary</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFourth" class="accordion-collapse collapse" aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                              <div class="card-body">
                                <p>Flight details if applicable.</p>
                              </div>
                              <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                          </div>
                          <!--/.accordion-item -->
                          <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconThree">
                              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconFive" aria-expanded="false" aria-controls="collapseIconFive"><span><i class="bi bi-house"></i></span>Proof of Accommodation</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFive" class="accordion-collapse collapse" aria-labelledby="headingIconFive" data-bs-parent="#accordionIconExample">
                              <div class="card-body">
                                <p>Hotel booking or address details of stay.</p>
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



      @include('front.partials.cta-2')
          

      <section class="wrapper bg-light">
        <div class="container-fluid py-4 py-md-8">
            <div class="row text-center">
                <div class="col-lg-9 mx-auto">
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{{ __('entry-permit.step_by_step_support') }}</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">{{ __('entry-permit.how_to_apply') }} <span class="text-gradient gradient-6 display-1">{{ __('entry-permit.tahzeel') }}</span> {{ __('entry-permit.expert_support') }}</h3>
                    <p class="lead fs-lg mb-8">{{ __('entry-permit.entry_permit_description') }} <span class="underline green">{{ __('entry-permit.tahzeel') }}</span> {{ __('entry-permit.smooth_experience') }}</p>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/static/file-text.svg') }}"
                                 class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="mb-1">{{ __('entry-permit.step_1_title') }}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{{ __('entry-permit.step_1_desc') }}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="{{ asset('assets/static/box-arrow-in-right.svg') }}"
                                 class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4 class="mb-1">{{ __('entry-permit.step_2_title') }}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{{ __('entry-permit.step_2_desc') }}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="{{ asset('assets/static/arrow-repeat.svg') }}"
                                 class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">{{ __('entry-permit.step_3_title') }}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{{ __('entry-permit.step_3_desc') }}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="{{ asset('assets/static/check2-circle.svg') }}"
                                 class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4 class="mb-1">{{ __('entry-permit.step_4_title') }}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{{ __('entry-permit.step_4_desc') }}</p>
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

    
    

=======
@extends('front.layouts.master')
@section('title', 'Domestic Worker Visa')
@section('content')


    <section class="wrapper image-wrapper bg-image  bg-overlay-300" data-image-src="{{ asset('assets/static') }}/entryPermit-bg.webp">
      <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
        <div class="row text-start">
          <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12"> Entry Permit Assistance  <span class="underline-3 style-2 yellow">Services</span></h1>
            <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Entry permits provide temporary access to the UAE for business, tourism, or family visits. Tah-zeel simplifies the permit process by ensuring that all requirements are met efficiently through Amer Services.</p>
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
          <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
            <div class="col-lg-6">
              <div class="row gx-md-5 gy-5">
                <div class="col-12 d-none d-md-block">
                  <figure class="rounded mx-5 "><img src="{{ asset('assets/static') }}/entryPermit1.webp" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <figure class="rounded d-none d-md-block"><img src="{{ asset('assets/static') }}/entryPermit2.webp" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <figure class="rounded "><img src="{{ asset('assets/static') }}/entryPermit3.webp"  alt=""></figure>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
              <h2 class="fs-16 text-uppercase text-red mb-3">Choosing the Right Permit</h2>
              <h3 class="display-3 mb-8">Various <span class="text-gradient gradient-6 display-1">Entry Permits</span> Available in the UAE</h3>
              <p class="mb-3">The UAE offers several types of entry permits based on the purpose of the visit. Tah-zeel provides guidance on selecting the correct permit, ensuring compliance with UAE regulations.</p>
              <div class="row gy-8">
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/airplane.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Tourist Entry Permit</h4>
                      <p class="mb-0">For those visiting for tourism and leisure.</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/people.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Visit Entry Permit</h4>
                      <p class="mb-0"> For family visits, allowing relatives to stay temporarily.</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/suitcase-lg.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Business Entry Permit</h4>
                      <p class="mb-0">For business and professional purposes.</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/bag-heart.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Transit Entry Permit</h4>
                      <p class="mb-0">Short-term permits for layovers in the UAE.</p>
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
                  <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Documents Needed for Entry Permit Application</h2>
                  <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Required Documentation for <span class="text-green">Entry Permits </span></h3>
                  <p class="lead fs-lg mb-8">Accurate documentation is essential for entry permit approvals. <span class="underline green">Tah-zeel</span> assists clients in gathering and submitting the correct paperwork to prevent delays. </p>
                </div>
              </div>
            <div class="row">
                <div class="col">
                    <div class="accordion accordion-wrapper" id="accordionIconExample">
                        <div class="card accordion-item icon">
                          <div class="card-header" id="headingIconOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne" aria-expanded="true" aria-controls="collapseIconOne"><span><i class="bi bi-passport"></i></span>Valid Passport Copy</button>
                          </div>
                          <!--/.card-header -->
                          <div id="collapseIconOne" class="accordion-collapse collapse show" aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                              <p>Valid for at least six months.</p>
                            </div>
                            <!--/.card-body -->
                          </div>
                          <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                          <div class="card-header" id="headingIconTwo">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconTwo" aria-expanded="false" aria-controls="collapseIconTwo"><span><i class="bi bi-person-bounding-box"></i></span>Passport-sized Photographs</button>
                          </div>
                          <!--/.card-header -->
                          <div id="collapseIconTwo" class="accordion-collapse collapse" aria-labelledby="headingIconTwo" data-bs-parent="#accordionIconExample">
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
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconThree" aria-expanded="false" aria-controls="collapseIconThree"><span><i class="bi bi-question-lg"></i></span>Purpose Documentation</button>
                          </div>
                          <!--/.card-header -->
                          <div id="collapseIconThree" class="accordion-collapse collapse" aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                              <p>Proof of purpose, such as invitation letters for business or family visits.</p>
                            </div>
                            <!--/.card-body -->
                          </div>
                          <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconFourth">
                              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconFourth" aria-expanded="false" aria-controls="collapseIconThree"><span><i class="bi bi-airplane"></i></span>Travel Itinerary</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFourth" class="accordion-collapse collapse" aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                              <div class="card-body">
                                <p>Flight details if applicable.</p>
                              </div>
                              <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                          </div>
                          <!--/.accordion-item -->
                          <!--/.accordion-item -->
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconThree">
                              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIconFive" aria-expanded="false" aria-controls="collapseIconFive"><span><i class="bi bi-house"></i></span>Proof of Accommodation</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFive" class="accordion-collapse collapse" aria-labelledby="headingIconFive" data-bs-parent="#accordionIconExample">
                              <div class="card-body">
                                <p>Hotel booking or address details of stay.</p>
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



      @include('front.partials.cta-2')
          

      <section class="wrapper bg-light">
        <div class="container-fluid py-4 py-md-8">
          
          <div class="row text-center">
            <div class="col-lg-9 mx-auto">
              <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">"Step-by-Step Entry Permit Support</h2>
              <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">How to Apply for an Entry Permit with <span class="text-gradient gradient-6 display-1">Tah-zeel’s </span> Expert Support</h3>
              <p class="lead fs-lg mb-8">  <span class="underline green">Tah-zeel </span> makes the entry permit application process straightforward, offering guidance at each stage for a smooth experience.</p> 
              <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                <div class="col-md-3"> <img src="{{ asset('assets/static') }}/file-text.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                  <h4 class="mb-1">1. Document Preparation</h4>
                  <p class="mb-5 mb-md-0 text-justify">Gather and verify all required documents.
                </p>
                </div>
                <!--/column -->
                <div class="col-md-3"> <img src="{{ asset('assets/static') }}/box-arrow-in-right.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                  <h4 class="mb-1">2. Submission</h4>
                  <p class="mb-5 mb-md-0 text-justify">Tah-zeel submits the application on behalf of the client through Amer Services.</p>
                </div>
                <!--/column -->
                <div class="col-md-3"> <img src="{{ asset('assets/static') }}/arrow-repeat.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                  <h4 class="mb-1">3. Processing</h4>
                  <p class="mb-5 mb-md-0 text-justify" > Permit processing by relevant UAE authorities.</p>
                </div>
                <!--/column -->
                <div class="col-md-3"> <img src="{{ asset('assets/static') }}/check2-circle.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                    <h4 class="mb-1">4. Permit Issuance</h4>
                    <p class="mb-5 mb-md-0 text-justify"> Finalized permit is issued for travel arrangements.</p>
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

    
    

>>>>>>> 81b627cee35d89665615b4dd0362c5f617d135b7
@endsection