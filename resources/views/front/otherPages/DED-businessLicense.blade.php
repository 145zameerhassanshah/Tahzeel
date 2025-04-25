@extends('front.layouts.master')
@section('title', 'Business Setup & Licensing')
@section('content')


    <section class="wrapper image-wrapper bg-image  bg-overlay-300"
        data-image-src="{{ asset('assets/static') }}/ded-businessLicenseBG.webp">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
            <div class="row text-start">
                <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">Business Setup & Licensing with <br> <span
                        class="underline-3 style-2 yellow"> Tah-zeel</span> </h1>
                    <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Launch your business with expert assistance. From approvals to licensing,
                        Tah-zeel ensures a smooth, fast, and compliant process with the Dubai Economy (DED).</p>
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
              <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
              <figure class="rounded"><img src="{{ asset('assets/static') }}/ded-businessLicense.webp"  alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-red mb-3">Start Your Business in Dubai with Ease</h2>
                <h3 class="display-3 mb-8">Hassle-Free Business Setup & Licensing with   <span
                        class="text-gradient gradient-6 display-1">Tah-zeel</span></h3>
                <p class="mb-3">Launch your business with expert assistance. From approvals to licensing, Tah-zeel ensures a smooth, fast, and compliant process with the Dubai Economy (DED).</p>
                <div class="row gx-xl-10 gy-6">
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Our Mission</h4>
                      <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{ asset('assets/static') }}/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                    </div>
                    <div>
                      <h4 class="mb-1">Our Values</h4>
                      <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
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
            <div class="row d-flex justify-content-center mb-10 ">
                <div class="col-md-8 text-center">
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-8">Documents You Need</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mb-5"><span class="text-green">Essential Papers </span> for a Smooth Business Setup</h3>
                    <p class="lead fs-lg mb-8"> Ensuring you have the right documents speeds up the approval process.   <span class="underline green">Tah-zeel</span> verifies and submits your paperwork for quick approvals.
                        
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
                                            class="bi bi-passport"></i></span> Passport Copy</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Of all business partners/shareholders.</p>
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
                                            class="bi bi-person-vcard"></i></span>Visa & Emirates ID Copy</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconTwo" class="accordion-collapse collapse" aria-labelledby="headingIconTwo"
                                data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Required for UAE residents.</p>
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
                                            class="bi bi-copy"></i></span>Trade Name Reservation Certificate</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconThree" class="accordion-collapse collapse"
                                aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p> Approved by DED. 
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
                                            class="bi bi-person-vcard-fill"></i></span>Initial Approval Certificate</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFourth" class="accordion-collapse collapse"
                                aria-labelledby="headingIconThree" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>Obtained after trade name approval.</p>
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
                                    </span>Lease Agreement</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconFive" class="accordion-collapse collapse"
                                aria-labelledby="headingIconFive" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>  Office or business location proof. </p>
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
                                    </span>Memorandum of Association (MoA)</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconSix" class="accordion-collapse collapse"
                                aria-labelledby="headingIconSix" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p> If required for partnerships.</p>
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
    
   
    
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container-fluid py-4 py-md-8">

            <div class="row text-center">
                <div class="col-lg-9 mx-auto">
                    
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">How It Works</h2>
                <h2 class="display-5"> A Seamless <span class="text-green">Business</span> Setup Journey  </h2>
                <p class="mx-5">
                    We take care of every step, ensuring a smooth registration and licensing process.
                </p>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                        <div class="col-md-3"> <img src="{{ asset('assets/static') }}/file-text.svg"
                                class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="mb-1">1. Consultation & Guidance</h4>
                            <p class="mb-5 mb-md-0 text-justify">Understand the requirements and get expert advice.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('assets/static') }}/box-arrow-in-right.svg"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4 class="mb-1">2. Trade Name & Initial Approval</h4>
                            <p class="mb-5 mb-md-0 text-justify">We handle trade name reservation and approvals.
                            </p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('assets/static') }}/arrow-repeat.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">3. Document Submission </h4>
                            <p class="mb-5 mb-md-0 text-justify"> We collect, verify, and submit documents to DED.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('assets/static') }}/check2-circle.svg"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4 class="mb-1">4. DED Approval & License Issuance</h4>
                            <p class="mb-5 mb-md-0 text-justify">Fast-tracked licensing process with follow-ups.</p>
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
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Your Trusted Business Partner</h2>
                <h2 class="display-5">Why <span class="underline-3 style-2 yellow"> Tah-zeel</span> for <span class="text-green">Business Setup & Licensing?</span>    </h2>
                <p class="mx-5">
                    With years of experience and a deep understanding of DED regulations, we make business setup seamless and stress-free.
                </p>
            </div>
        </div>
        <div class="row gx-md-5 mb-5 mb-md-5">
    
            
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-green  h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('assets/static/person-lock.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4>DED Expertise </h4>
                        <p class="mb-2">We navigate Dubai’s regulatory landscape effortlessly.</p>
                        
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-orange  h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('assets/static/bookmark-check.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                        <h4> Fast & Reliable</h4>
                        <p class="mb-2">Get your approvals without unnecessary delays.</p>
                        
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom border-soft-blue  h-100 hover-card">
                    <div class="card-body">
                        <img src="{{ asset('assets/static/globe.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                        <h4>End-to-End Support </h4>
                        <p class="mb-2">From consultation to finalization, we cover it all.</p>
                       
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3 ">
                <div class="card shadow-lg card-border-bottom border-soft-yellow h-100 hover-card ">
                    <div class="card-body">
                        <img src="{{ asset('assets/static/boxes.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4>{{__('Transparent Pricing')}}</h4>
                        <p class="mb-2">{{__("No hidden fees, just honest service.")}}</p>
                        
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
        </div>
        <!--/.row -->
        
    </div>
     {{-- end features  --}}

     
    <!-- /section -->

    
    

    <section class="wrapper">
        <div class="container py-14 py-md-16">
          <div class="row d-flex align-items-start gy-10">
            <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                <h2 class="fs-16 text-uppercase text-red mb-3">Streamlined Business Solutions</h2>
                <h3 class="display-3 mb-8"><span class="text-green">DED Services</span> – Simplifying Business Operations in Dubai</h3>
                <p class="mb-3">From business setup to licensing, renewals, and permits, our expert team ensures a hassle-free process. Tah-zeel handles all DED services efficiently, so you can focus on growing your business while we take care of the paperwork. </p>
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
                          <h3 class="fs-21 mb-2">Business Setup & Licensing</h3>
                          <p class="mb-0">Get your business registered and licensed with ease.</p>
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
                        <h3 class="fs-21 mb-2">Trade Name Reservation</h3>
                        <p class="mb-0">Secure a unique business identity approved by DED.</p>
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
                    <h3 class="fs-21 mb-2">Initial Approval </h3>
                    <p class="mb-0">Obtain the necessary approvals to kickstart your business.</p>
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
                    <h3 class="fs-21 mb-2">License Renewal & Amendments </h3>
                    <p class="mb-0">Keep your business compliant with timely renewals and modifications.</p>
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
                    <h3 class="fs-21 mb-2">Company Deregistration</h3>
                    <p class="mb-0">Close your business properly while fulfilling all legal requirements.</p>
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
                    <h3 class="fs-21 mb-2">Commercial Permits</h3>
                    <p class="mb-0">Get the necessary permits to operate legally in Dubai.</p>
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
