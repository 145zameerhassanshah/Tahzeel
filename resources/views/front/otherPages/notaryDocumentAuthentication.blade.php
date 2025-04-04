@extends('front.layouts.master')
@section('title', 'DHA Services')
@section('content')


<section class="wrapper image-wrapper bg-image  bg-overlay-300" data-image-src="{{ asset('front/dev/assets/img/personal/notaryDocumentBg.webp') }}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
      <div class="row text-start">
        <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
          <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">    Authenticate Your <span class="underline-3 style-2 yellow">Documents</span> with Confidence</h1>
          <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">Ensure your documents are legally valid for use in Dubai and internationally with our professional notarization services.

          </p>
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

  <section class="wrapper bg-dark angled lower-start mb-18">
    <div class="container pt-7 pt-md-11 pb-8">
      <div class="row gx-0 gy-10 align-items-center">
        <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 text-white mb-4">Ensure Your Documents Are <br />
              <span class="typer text-green text-nowrap" data-delay="100" data-words="legally valid, internationally accepted, officially recognized"></span>
              <span class="cursor text-green" data-owner="typer"></span>
          </h1>
          <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">
              Get your documents authenticated for official and legal purposes with ease.
          </p>
          <div>
              <a class="btn btn-lg btn-red rounded">Authenticate Now</a>
          </div>
      </div>
      
        <!-- /column -->
        <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
          <div class="position-relative">
            <figure class="rounded shadow-lg"><img src="{{ asset('front') }}/dev/assets/img/personal/notaryDocument-1.webp"  alt=""></figure>
          </div>
          <!-- /div -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-5 offset-lg-1 order-lg-2">
          <h2 class="display-3 mb-3"> <span class="text-green">Document Authentication</span></h2>
          <p class="lead fs-lg">Verify & legalize your important documents</p>
          <p>Ensure your personal, academic, business, and travel documents are legally authenticated for official use. Whether it's a birth certificate, degree, business contract, or passport copy, we provide fast and reliable notarization services to make your paperwork hassle-free.</p>
          <a href="#" class="btn btn-red rounded-pill mt-3">Authenticate Now</a>
        </div>
        <!-- /column -->
        <div class="col-lg-6">
          <div class="row g-6 text-center">
            <div class="col-md-6">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow-lg mb-6" style="transition: transform 0.3s ease-in-out;"
                  onmouseover="this.style.transform='scale(1.1) rotate(2deg)'" 
                  onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                    <div class="card-body">
                      <img src="{{ asset('front') }}/dev/assets/img/personal/file-earmark-text-fill.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-red mb-3" alt="" />
                      <h3>Birth, Marriage & Divorce Certificates</h3>
                      <p class="mb-2">Legalize personal records for official use.</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.card -->
                </div>
                <!-- /column -->
                <div class="col-lg-12">
                  <div class="card shadow-lg " style="transition: transform 0.3s ease-in-out;"
                  onmouseover="this.style.transform='scale(1.1) rotate(2deg)'" 
                  onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                    <div class="card-body">
                      <img src="{{ asset('front') }}/dev/assets/img/personal/backpack-fill.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-green mb-3" alt="" />
                      <h3>Educational Degrees</h3>
                      <p class="mb-2">Authenticate credentials for global acceptance.</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.card -->
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /column -->
            <div class="col-md-6">
              <div class="row">
                <div class="col-lg-12 order-md-2">
                  <div class="card shadow-lg mb-6 mb-md-0" style="transition: transform 0.3s ease-in-out;"
                  onmouseover="this.style.transform='scale(1.1) rotate(2deg)'" 
                  onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                    <div class="card-body">
                      <img src="{{ asset('front') }}/dev/assets/img/personal/briefcase-fill.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-red mb-3" alt="" />
                      <h3>Business Agreements</h3>
                      <p class="mb-2">Certify business deals for legal security.</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.card -->
                </div>
                <!-- /column -->
                <div class="col-lg-12">
                  <div class="card shadow-lg mb-md-6 mt-lg-6 "style="transition: transform 0.3s ease-in-out;"
                  onmouseover="this.style.transform='scale(1.1) rotate(2deg)'" 
                  onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                    <div class="card-body">
                      <img src="{{ asset('front') }}/dev/assets/img/personal/person-vcard-fill.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-green mb-3" alt="" />
                      <h3>Passports, Emirates ID & Travel</h3>
                      <p class="mb-2">Verify identity documents for travel and residency.</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.card -->
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
    
   
    
    <!-- /section -->

    {{-- Key Features --}}
    <section class="wrapper">
        <div class="container py-md-2 mb-5">
          <div class="row text-center">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto position-relative">
              {{-- <img src="{{ asset('front') }}/dev/assets/img/svg/doodle3.svg" class="h-11 position-absolute d-none d-lg-block" style="top: -45%; left: 23%" alt="">
              <img src="./assets/img/svg/doodle4.svg" class="h-8 position-absolute d-none d-lg-block" style="top: 6%; right: 2%" alt=""> --}}
              <h2 class="display-5"> Why Trust <span class="text-gradient gradient-6 display-1">Tah-zeel</span> for Notary Services</h2>
                <p class="mx-5 mb-5">
                  We ensure secure, hassle-free document authentication with expert assistance and full compliance with UAE regulations.
                </p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <div class="row mb-5">
            <div class="col-xxl-11 mx-auto">
              <div class="row gx-md-8 gy-10 text-center">
          
                <!-- Fast Processing -->
                <div class="col-md-6 col-lg-3">
                  <div class="svg-bg svg-bg-lg bg-pale-yellow rounded-xl mb-4" 
                       style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;" 
                       onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#FFD700';" 
                       onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(255, 223, 186, 1)';">
                    <i class="bi bi-lightning-charge-fill" 
                       style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;" ></i>
                  </div>
                  <h4 class="fs-20">Fast Processing</h4>
                </div>
          
                <!-- DHA Compliance -->
                <div class="col-md-6 col-lg-3">
                  <div class="svg-bg svg-bg-lg bg-pale-green rounded-xl mb-4" 
                       style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;" 
                       onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#28a745';" 
                       onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(186, 255, 201, 1)';">
                    <i class="bi bi-person-check-fill" 
                       style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;" ></i>
                  </div>
                  <h4 class="fs-20">Government Approved</h4>
                </div>
          
                <!-- Dedicated Assistance -->
                <div class="col-md-6 col-lg-3">
                  <div class="svg-bg svg-bg-lg bg-pale-purple rounded-xl mb-4" 
                       style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;" 
                       onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#6a0dad';" 
                       onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(219, 186, 255, 1)';">
                    <i class="bi bi-person-arms-up" 
                       style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;" ></i>
                  </div>
                  <h4 class="fs-20">Expert Guidance</h4>
                </div>
          
                <!-- Multiple Centers -->
                <div class="col-md-6 col-lg-3">
                  <div class="svg-bg svg-bg-lg bg-pale-pink rounded-xl mb-4" 
                       style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;" 
                       onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#ff69b4';" 
                       onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(255, 186, 201, 1)';">
                    <i class="bi bi-buildings-fill" 
                       style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;" ></i>
                  </div>
                  <h4 class="fs-20">Multiple Locations</h4>
                </div>
          
                <!-- Affordable Packages -->
                <div class="col-md-6 col-lg-3">
                  <div class="svg-bg svg-bg-lg bg-pale-violet rounded-xl mb-4" 
                       style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;" 
                       onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#9400D3';" 
                       onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(186, 150, 255, 1)';">
                    <i class="bi bi-cash-coin" 
                       style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;" ></i>
                  </div>
                  <h4 class="fs-20">Affordable Packages</h4>
                </div>
          
                <!-- Secure & Confidential -->
                <div class="col-md-6 col-lg-3">
                  <div class="svg-bg svg-bg-lg bg-pale-orange rounded-xl mb-4" 
                       style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;" 
                       onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#FF4500';" 
                       onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(255, 186, 130, 1)';">
                    <i class="bi bi-file-lock2-fill" 
                       style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;" ></i>
                  </div>
                  <h4 class="fs-20">Secure & Confidential</h4>
                </div>
          
                <!-- End-to-End Support -->
                <div class="col-md-6 col-lg-3">
                  <div class="svg-bg svg-bg-lg bg-pale-blue rounded-xl mb-4" 
                       style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;" 
                       onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#007BFF';" 
                       onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(150, 200, 255, 1)';">
                    <i class="bi bi-hand-thumbs-up-fill" 
                       style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;" ></i>
                  </div>
                  <h4 class="fs-20">End-to-End Support</h4>
                </div>
          
                <!-- 24/7 Customer Help -->
                <div class="col-md-6 col-lg-3">
                  <div class="svg-bg svg-bg-lg bg-pale-leaf rounded-xl mb-4" 
                       style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;" 
                       onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#008000';" 
                       onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(150, 255, 186, 1)';">
                    <i class="bi bi-headset" 
                       style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;" ></i>
                  </div>
                  <h4 class="fs-20">24/7 Customer Help</h4>
                </div>
          
              </div>
            </div>
          </div>
          
        <!-- /.container -->
      </section>
      <!-- /section -->
     {{-- end features  --}}

     @include('front.partials.clients-2')

     <section class="wrapper bg-light">
        <div class="container-fluid py-4 py-md-8">

            <div class="row text-center">
                <div class="col-lg-9 mx-auto">
                    <div class="">
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mt-12">How the <span class="text-green">Authentication</span> Process Works?  
                     
                    </h3>
                    <p class=" mb-8">Get your documents legally authenticated with a simple and efficient process, ensuring full compliance with UAE regulations.
                    </div>
                        <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/file-text.svg"
                                class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="mb-1">1. Submit Your Document</h4>
                            <p class="mb-5 mb-md-0 text-justify">Provide the original or a certified copy for verification.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/box-arrow-in-right.svg"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4 class="mb-1">2. Verification & Validation</h4>
                            <p class="mb-5 mb-md-0 text-justify">We check the document’s authenticity and legal compliance.
                            </p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/arrow-repeat.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">3. Official Notary Stamp</h4>
                            <p class="mb-5 mb-md-0 text-justify"> A certified notary applies the official stamp for authentication.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/check2-circle.svg"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4 class="mb-1">4. Receive Your Document</h4>
                            <p class="mb-5 mb-md-0 text-justify"> Get a fully notarized document ready for legal and official use.</p>
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

    <section class="wrapper bg-light">
        <div class="container py-16 py-md-18">
          <div class="card bg-soft-green rounded-4">
            <div class="card-body p-md-10 p-xl-11">
              <div class="row gx-lg-8 gx-xl-12 gy-10">
                <div class="col-lg-6">
                  <h3 class="display-4 mb-4">Frequently Asked Questions</h3>
                  <p class="lead fs-lg mb-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                  <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingOne">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How do I get my subscription receipt?</button>
                      </div>
                      <!--/.card-header -->
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        </div>
                        <!--/.card-body -->
                      </div>
                      <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingTwo">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Are there any discounts for people in need?</button>
                      </div>
                      <!--/.card-header -->
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        </div>
                        <!--/.card-body -->
                      </div>
                      <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingThree">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do you offer a free trial edit?</button>
                      </div>
                      <!--/.card-header -->
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        </div>
                        <!--/.card-body -->
                      </div>
                      <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingFour">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How do I reset my Account password?</button>
                      </div>
                      <!--/.card-header -->
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
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
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->

    
    @include('front.partials.cta-2')


    


   
    <div class="mt-15">
        @include('front.partials.affiliations')
    </div>


    @include('front.partials.contact-us')


@endsection