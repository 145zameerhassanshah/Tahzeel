@extends('front.layouts.master')
@section('title', 'DHA Services')
@section('content')
<section class="wrapper image-wrapper bg-image  bg-overlay-300" data-image-src="{{ asset('front/dev/assets/img/personal/dha-bg.webp') }}">
  <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
    <div class="row text-start">
      <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
        <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12"> <span class="underline-3 style-2 yellow">DHA Services</span> Made Easy: Your Health, Our Priority</h1>
        <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">From medical fitness tests to health insurance approvals, we streamline the process for you.</p>
        <div><a class="btn btn-white rounded mb-10 mb-xxl-5">Let's Talk</a></div>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
</section>
<!-- /section -->
<div class="wrapper">
  <div class="container">
    <div class="row text-center mt-15 d-flex justify-content-center ">
      <div class="col-md-9">
        <h2 class="display-5">Choose Your <span class="text-green">DHA Service </span> Effortlessly</h2>
        <p class="mx-5">
          Need a medical fitness test or health insurance approval? Select your service and let Tah-zeel handle the rest. Click below to get started!
        </p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <ul class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex flex-row active justify-content-center" data-bs-toggle="tab" href="#tab2-1">
              <div>
                <i class="bi bi-heart-pulse text-green me-4" style="font-size: 3rem;"></i>
              </div>
              <div>
                <h4 class="mb-1">Medical Fitness Tests</h4>
                <p>Essential health screening for visas.</p>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex flex-row justify-content-center" data-bs-toggle="tab" href="#tab2-2">
              <div>
                <i class="bi bi-file-medical text-red me-4" style="font-size: 3rem;"></i>
              </div>
              <div>
                <h4 class="mb-1">Health Insurance Approvals</h4>
                <p>Fast-track approval for insurance coverage.</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab2-1">
            <section class="wrapper bg-light">
              <div class="container py-10 py-md-12">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center">
                  <div class="col-lg-6 position-relative">
                    <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
                    <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
                    <figure class="rounded mb-0"><img src="{{ asset('/front/dev/assets/img/personal/dha-1.webp') }}" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-lg-6">
                    <h3 class="display-4 mb-4">Ensure Your Health & Residency</h3>
                    <p class="mb-5">Get your mandatory medical tests done quickly and efficiently through DHA-approved centers.</p>
                    <div class="row gy-3">
                      <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                          <li><span><i class="uil uil-check"></i></span><span>Essential for visa & employment</span></li>
                          <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Includes blood tests, X-rays</span></li>
                        </ul>
                      </div>
                      <!--/column -->
                      <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                          <li><span><i class="uil uil-check"></i></span><span>Results within 24-48 hours</span></li>
                          <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Multiple DHA-approved locations</span></li>
                        </ul>
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                    <a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">Book a Test</a>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->

                <!-- /.container -->
            </section>
            <!-- /section -->
          </div>
          <!--/.tab-pane -->
          <div class="tab-pane fade" id="tab2-2">
            <section class="wrapper bg-light">
              <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                  <div class="col-lg-6 order-lg-2 position-relative">
                    <div class="shape bg-line red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
                    <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
                    <figure class="rounded mb-0"><img src="./assets/img/photos/se4.jpg" srcset="{{ asset('/front/dev/assets/img/personal/dha-2.webp') }}" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-lg-6">
                    <h3 class="display-4 mb-4">Secure Your Health Coverage</h3>
                    <p class="mb-5">Fast-track your DHA-compliant health insurance with expert guidance and seamless approvals.</p>
                    <div class="row gy-3">
                      <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-red mb-0">
                          <li><span><i class="uil uil-check"></i></span><span> Quick DHA insurance approvals</span></li>
                          <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Assistance with documents</span></li>
                        </ul>
                      </div>
                      <!--/column -->
                      <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-red mb-0">
                          <li><span><i class="uil uil-check"></i></span><span> Linked with top providers</span></li>
                          <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Easy & hassle-free process</span></li>
                        </ul>
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                    <a href="#" class="btn btn-soft-red rounded-pill mt-6 mb-0">Apply for Insurance</a>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>

              <!-- /.container -->
            </section>
            <!-- /section -->
          </div>
          <!--/.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
    </div>
  </div>
</div>



<!-- /section -->

{{-- Key Features --}}
<section class="wrapper">
  <div class="container py-md-2 mb-5">
    <div class="row text-center">
      <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto position-relative">
        {{-- <img src="{{ asset('front') }}/dev/assets/img/svg/doodle3.svg" class="h-11 position-absolute d-none d-lg-block" style="top: -45%; left: 23%" alt="">
        <img src="./assets/img/svg/doodle4.svg" class="h-8 position-absolute d-none d-lg-block" style="top: 6%; right: 2%" alt=""> --}}
        <h2 class="display-5"> Why Trust <span class="text-gradient gradient-6 display-1">Tah-zeel</span> for DHA Services?</h2>
        <p class="mx-5 mb-5">
          Get seamless medical fitness tests and health insurance approvals with our expert-guided, DHA-compliant services. Fast, secure, and accessible across Dubai.
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
                style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;"></i>
            </div>
            <h4 class="fs-20">Fast Processing</h4>
          </div>

          <!-- DHA Compliance -->
          <div class="col-md-6 col-lg-3">
            <div class="svg-bg svg-bg-lg bg-pale-green rounded-xl mb-4"
              style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;"
              onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#28a745';"
              onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(186, 255, 201, 1)';">
              <i class="bi bi-clipboard2-pulse-fill"
                style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;"></i>
            </div>
            <h4 class="fs-20">DHA Compliance</h4>
          </div>

          <!-- Dedicated Assistance -->
          <div class="col-md-6 col-lg-3">
            <div class="svg-bg svg-bg-lg bg-pale-purple rounded-xl mb-4"
              style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;"
              onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#6a0dad';"
              onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(219, 186, 255, 1)';">
              <i class="bi bi-person-fill-check"
                style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;"></i>
            </div>
            <h4 class="fs-20">Dedicated Assistance</h4>
          </div>

          <!-- Multiple Centers -->
          <div class="col-md-6 col-lg-3">
            <div class="svg-bg svg-bg-lg bg-pale-pink rounded-xl mb-4"
              style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;"
              onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#ff69b4';"
              onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(255, 186, 201, 1)';">
              <i class="bi bi-buildings-fill"
                style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;"></i>
            </div>
            <h4 class="fs-20">Multiple Centers</h4>
          </div>

          <!-- Affordable Packages -->
          <div class="col-md-6 col-lg-3">
            <div class="svg-bg svg-bg-lg bg-pale-violet rounded-xl mb-4"
              style="transition: transform 0.4s ease-in-out, background-color 0.4s ease-in-out;"
              onmouseover="this.style.transform='scale(1.2)'; this.style.backgroundColor='#9400D3';"
              onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='rgba(186, 150, 255, 1)';">
              <i class="bi bi-cash-coin"
                style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;"></i>
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
                style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;"></i>
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
                style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;"></i>
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
                style="font-size: 2rem; color: black; transition: color 0.4s ease-in-out;"></i>
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
          <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mt-12">Seamless <span class="text-green">DHA Services</span> in 4 Easy Steps

          </h3>
          <p class=" mb-8">Navigating DHA services has never been easier! Follow our simple four-step process to complete your medical tests or insurance approvals quickly and hassle-free.
        </div>
        <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
          <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/file-text.svg"
              class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
            <h4 class="mb-1">1. Select a Service</h4>
            <p class="mb-5 mb-md-0 text-justify">Choose medical test or insurance approval.</p>
          </div>
          <!--/column -->
          <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/box-arrow-in-right.svg"
              class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
            <h4 class="mb-1">2. Submit Documents</h4>
            <p class="mb-5 mb-md-0 text-justify">Provide required paperwork for processing.
            </p>
          </div>
          <!--/column -->
          <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/arrow-repeat.svg"
              class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
            <h4 class="mb-1">3. Visit or Apply Online</h4>
            <p class="mb-5 mb-md-0 text-justify"> Go to a DHA-approved center or apply digitally.</p>
          </div>
          <!--/column -->
          <div class="col-md-3"> <img src="{{ asset('front') }}/dev/assets/img/personal/check2-circle.svg"
              class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
            <h4 class="mb-1">4. Get Results Fast</h4>
            <p class="mb-5 mb-md-0 text-justify"> Receive approval or test results within 24-48 hours.</p>
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
