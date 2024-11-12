@extends('front.layouts.master')
@section('title', 'Residency Visa')
@section('content')

    <section class="wrapper image-wrapper bg-image  bg-overlay-300" {{-- data-image-src="{{ asset('assets/admin/uploads/service/banner/' . $service->banner_image) }}"> --}}
        data-image-src="{{ asset('front/dev/assets/img/personal/about-bg.webp') }}">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
            <div class="row text-start">
                <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">

                        {{ $service->getTranslation('banner_title', session('locale') === 'en' ? 'en' : 'ar') }}
                    </h1>

                    <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">
                        {{ $service->banner_subtitle }}</p>
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

    <!-- about amer centers  -->

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row d-flex justify-content-center mb-10">
                <div class="col-md-8 text-center">
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Understanding Eligibility Descriptions</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Service <span
                            class="text-green">Descriptions</span></h3>
                </div>
            </div>
            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
                <div class="col-lg-12">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-12">
                            <p>
                                {!! $service->description !!}
                            </p>
                            <p>
                                {!! $service->other_description !!}
                            </p>

                        </div>
                    </div>
                    <!--/.row -->
                </div>
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
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">Understanding Eligibility Features</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Service <span
                            class="text-green">Features</span> in the UAE</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="list-group">
                        @foreach ($service->serviceFeatures as $serviceFeature)
                            <div class="list-group-item">
                                {{ $serviceFeature->name }}
                            </div>
                        @endforeach
                    </div>
                    <!--/.accordion -->
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 150px;"></div>

@endsection
