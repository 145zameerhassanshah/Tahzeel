@extends('front.layouts.master')
@section('title', 'About Us')
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay-300" data-image-src="{{ asset('assets/static/about-bg2.webp') }}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
        <div class="row text-start">
            <div class="col-lg-8 col-xl-9 col-xxl-8 me-auto" data-cues="slideInDown" data-group="page-title">
                {!! __('about-us.hero_title') !!}
                <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15">
                    {!! __('about-us.hero_description') !!}
                </p>
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
                <figure class="rounded "><img src="{{ asset('assets/static/happy-family.webp') }}"
                        alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 col-xl-4 offset-lg-1">
                <h2 class="fs-16 text-uppercase text-line text-success mb-3">{!! __('about-us.our_mission_title') !!}</h2>
                <h3 class="display-4 mb-7">{!! __('about-us.our_mission_subtitle') !!}</h3>
                <p>{!! __('about-us.our_mission_description') !!}</p>
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
                <figure class="rounded"><img src="{{ asset('assets/static/global-map.webp') }}"
                        alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 col-xl-4 offset-lg-1">
                <h2 class="fs-16 text-uppercase text-line text-success mb-3">{!! __('about-us.our_vision_title') !!}</h2>
                <h3 class="display-4 mb-7">{!! __('about-us.our_vision_subtitle') !!}</h3>
                <p>
                    {!! __('about-us.our_vision_description') !!}
                </p>
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
                <figure class="rounded"><img src="{{ asset('assets/static/Handshake.webp') }}"
                         alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 col-xl-4 offset-lg-1">
                <h2 class="fs-16 text-uppercase text-line text-success mb-3">{!! __('about-us.our_commitment_title') !!}</h2>
                <h3 class="display-4 mb-7">{!! __('about-us.our_commitment_subtitle') !!}</h3>
                <p>{!! __('about-us.our_commitment_description') !!}</p>
            </div>
            <!--/column -->
        </div>
    </div>
    <!-- /.container -->
</section>

@include('front.partials.counter')
@include('front.partials.clients')
@endsection