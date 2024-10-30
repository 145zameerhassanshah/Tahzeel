@extends('front.layouts.master')
@section('title', 'Contact Us')
@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300"
        data-image-src="{{ asset('front/dev/assets/img/personal/about-bg.png') }}">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">Get in Touch with <span
                            class="underline-3 style-2 yellow"> Us</span></h1>
                    <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10">We're here to address your inquiries.
                        Let us simplify your visa process and support your journey.</p>
                    <div>
                        <a class="btn btn-white rounded mb-10 mb-xxl-5">Let's Talk</a>
                    </div>z
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>
    <section class="wrapper bg-light">
        <div class="container pb-15 pb-md-17">
            <div class="row gx-md-5 gy-5 mt-n19 mb-10 mb-md-12">

                <!--/column -->
                <div class="col-md-8 col-xl-4 d-flex">
                    <div class="card shadow-lg card-border-bottom border-red text-center h-100 w-100">
                        <div class="card-body">
                            <img src="{{ asset('front/dev/assets/img/personal/map.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3"
                                alt="" />
                            <h4>Get Directions</h4>
                            <p class="mb-2">Nad Al Sheba 4 - Dubai</p>
                            <a href="#" class=" hover link-red fs-50"> <i
                                    class="bi bi-arrow-right-circle-fill"></i></a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-8 col-xl-4 d-flex">
                    <div class="card shadow-lg card-border-bottom border-green text-center h-100 w-100">
                        <div class="card-body">
                            <img src="{{ asset('front/dev/assets/img/personal/telephone.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4>Contact Us</h4>
                            <p class="mb-2">Phone:+971558540883</p>
                            <a href="#" class=" hover link-green fs-50"> <i
                                    class="bi bi-arrow-right-circle-fill"></i></a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-8 col-xl-4 d-flex">
                    <div class="card shadow-lg card-border-bottom border-red text-center h-100 w-100">
                        <div class="card-body">
                            <img src="{{ asset('front/dev/assets/img/personal/envelope.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4>Email Us</h4>
                            <p class="mb-2">tehzeelcompany@gmail.com</p>
                            <a href="#" class=" hover link-red fs-50"> <i
                                    class="bi bi-arrow-right-circle-fill"></i></a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
            </div>
        </div>

    </section>
    <section class="wrapper bg-light">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str"
                style="width:100%; height: 500px; border:0" allowfullscreen></iframe>
        </div>
        <!-- /.map -->
    </section>
    @include('front.partials.contact-us')

@endsection
