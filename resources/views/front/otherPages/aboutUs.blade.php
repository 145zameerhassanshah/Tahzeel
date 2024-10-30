@extends('front.layouts.master')
@section('title', 'About Us')
@section('content')

    <section class="wrapper image-wrapper bg-image bg-overlay-300" data-image-src="{{ asset('front/dev/assets/img/personal/about-bg.png') }}">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
            <div class="row text-start">
                <div class="col-lg-8 col-xl-9 col-xxl-8 me-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">Your Gateway to <span
                            class="underline-3 style-2 yellow">Global</span> Opportunities</h1>
                    <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15">At Tehzeel Visa Consultancy, we simplify
                        the visa process, helping you explore new horizons with ease and confidence. Your journey starts
                        here.</p>
                </div>
            </div>
        </div>
    </section>

    @include('front.partials.why-choose')

    <section class="wrapper bg-light">
        <div class="container pt-15 pt-md-15 pb-10 pb-md-12">

            <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-18 align-items-center">
                <div class="col-md-8 col-lg-6 position-relative ">
                    <div class="shape bg-dot tehzeel rellax w-17 h-21" data-rellax-speed="1"
                        style="top: -2rem; left: -1.9rem;"></div>
                    <div class="shape rounded bg-soft-tehzeel rellax d-md-block" data-rellax-speed="0"
                        style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                    <figure class="rounded "><img src="{{ asset('front/dev/assets/img/personal/happy-family.webp') }}"
                            srcset="./assets/img/photos/about7@2x.jpg 2x" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 col-xl-4 offset-lg-1">
                    <h2 class="fs-16 text-uppercase text-line text-success mb-3">Our Mission</h2>
                    <h3 class="display-4 mb-7">Empowering Your Journey</h3>
                    <p class="">Our mission is to provide seamless, reliable, and tailored services that cater to
                        your immigration, business setup, and visa needs. We aim to simplify complex processes like
                        Tasheel, DED, MOHRE services, and government typing, ensuring swift approvals and professional
                        support at every step. With our extensive expertise in legal translations and recruitment
                        services, we empower you to achieve your goals with confidence and efficiency.</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-18 align-items-center">
                <div class="col-md-8 col-lg-6 offset-lg-1 order-lg-2 position-relative">
                    <div class="shape rounded-circle bg-line tehzeel rellax w-18 h-18" data-rellax-speed="1"
                        style="top: -2rem; right: -1.9rem;"></div>
                    <div class="shape rounded bg-soft-tehzeel rellax d-md-block" data-rellax-speed="0"
                        style="bottom: -1.8rem; left: -1.5rem; width: 85%; height: 90%; "></div>
                    <figure class="rounded"><img src="{{ asset('front/dev/assets/img/personal/global-map.webp') }}"
                            srcset="./assets/img/photos/about9@2x.jpg 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 col-xl-4 offset-lg-1">
                    <h2 class="fs-16 text-uppercase text-line text-success mb-3">Our Vision</h2>
                    <h3 class="display-4 mb-7">Leading in Visa and Business Solutions</h3>
                    <p class="">We envision becoming the leading provider of immigration and business setup
                        services, known for our integrity, expertise, and customer satisfaction. By streamlining visa
                        services, government follow-up, and legal translation processes, we aspire to make global
                        mobility and business expansion easier for all. Our goal is to be recognized as a trusted
                        partner for companies and individuals alike, fostering growth and opportunity.</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-18 align-items-center">
                <div class="col-md-8 col-lg-6 position-relative">
                    <div class="shape bg-dot tehzeel rellax w-17 h-21" data-rellax-speed="1"
                        style="top: -2rem; left: -1.9rem;"></div>
                    <div class="shape rounded bg-soft-tehzeel rellax d-md-block" data-rellax-speed="0"
                        style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                    <figure class="rounded"><img src="{{ asset('front/dev/assets/img/personal/Handshake.webp') }}"
                            srcset="./assets/img/photos/about7@2x.jpg 2x" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 col-xl-4 offset-lg-1">
                    <h2 class="fs-16 text-uppercase text-line text-success mb-3">Our Commitment</h2>
                    <h3 class="display-4 mb-7">Committed to Your Success</h3>
                    <p class="">We are committed to providing the highest level of service in immigration, visa,
                        business setup, and government-related services. Whether you need assistance with MOHRE, DED,
                        Tasheel, or recruitment, we guarantee precision, transparency, and timeliness. Our team’s
                        dedication to excellence ensures that every detail is handled professionally, allowing you to
                        focus on what truly matters—achieving your personal and business goals.</p>
                </div>
                <!--/column -->
            </div>
        </div>
        <!-- /.container -->
    </section>

    @include('front.partials.counter')

    @include('front.partials.clients')

@endsection
