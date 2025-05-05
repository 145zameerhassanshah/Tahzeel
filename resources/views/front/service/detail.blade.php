@extends('front.layouts.master')
@section('title', 'Service Detail')
@section('content')


    <section class="wrapper image-wrapper bg-image  bg-overlay-300" data-image-src="{{ asset($service->banner_image) }}">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 ">
            <div class="row text-start">
                <div class="col-lg-6 col-xl-6 col-xxl-6 me-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">
                        {{ $service->getTranslation('banner_title', session('locale') === 'en' ? 'en' : 'ar') }}</h1>
                    <p class=" fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">
                        {{ $service->getTranslation('banner_subtitle', session('locale') === 'en' ? 'en' : 'ar') }}</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>

    </section>

    @foreach ($service->serviceSections as $section)
        @if ($section->type == 'rtl')
            <section class="wrapper bg-light">
                <div class="container py-14 py-md-16">
                    <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
                        <div class="col-lg-6">
                            <div class="row gx-md-5 gy-5">
                                <figure class="rounded mx-5 "><img src="{{ asset($section->image) }}">
                                </figure>
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <h2 class="fs-16 text-uppercase text-red mb-3">
                                {{ $section->getTranslation('subtitle', session('locale') === 'en' ? 'en' : 'ar') }}</h2>
                            <h3 class="display-3 mb-8"><span
                                    class="text-gradient gradient-6 display-1">{{ $section->getTranslation('title', session('locale') === 'en' ? 'en' : 'ar') }}
                            </h3>
                            <p class="mb-3">{!! $section->getTranslation('description', session('locale') === 'en' ? 'en' : 'ar') !!}</p>
                            <div class="row gy-8">
                                <div class="col-md-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('front') }}/dev/assets/img/personal/lightning-charge.svg"
                                                class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4"
                                                alt="" />
                                        </div>
                                        <div>
                                            <h4 class="mb-1">Comprehensive Support</h4>
                                            <p class="mb-0">We guide you from application to approval, ensuring a seamless
                                                experience. </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/column -->
                                <div class="col-md-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('front') }}/dev/assets/img/personal/journal-check.svg"
                                                class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4"
                                                alt="" />
                                        </div>
                                        <div>
                                            <h4 class="mb-1">Expertise You Can Trust</h4>
                                            <p class="mb-0">Our knowledgeable team ensures all documents meet UAE
                                                regulations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/column -->
                                <div class="col-md-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('front') }}/dev/assets/img/personal/person-check.svg"
                                                class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4"
                                                alt="" />
                                        </div>
                                        <div>
                                            <h4 class="mb-1">Swift Processing</h4>
                                            <p class="mb-0">We work closely with government agencies to expedite your
                                                residency
                                                visa.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/column -->
                                <div class="col-md-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('front') }}/dev/assets/img/personal/transparency.svg"
                                                class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4"
                                                alt="" />
                                        </div>
                                        <div>
                                            <h4 class="mb-1">Tailored Assistance</h4>
                                            <p class="mb-0">Each client receives tailored support and clear answers at
                                                every
                                                stage.</p>
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
        @else
            <section class="wrapper bg-light">
                <div class="container py-14 py-md-16">
                    <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
                        <!--/column -->
                        <div class="col-lg-6">
                            <h2 class="fs-16 text-uppercase text-red mb-3">
                                {{ $section->getTranslation('subtitle', session('locale') === 'en' ? 'en' : 'ar') }}</h2>
                            <h3 class="display-3 mb-8"><span
                                    class="text-gradient gradient-6 display-1">{{ $section->getTranslation('title', session('locale') === 'en' ? 'en' : 'ar') }}
                            </h3>
                            <p class="mb-3">{!! $section->getTranslation('description', session('locale') === 'en' ? 'en' : 'ar') !!}</p>
                            <div class="row gy-8">
                                <div class="col-md-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('front') }}/dev/assets/img/personal/lightning-charge.svg"
                                                class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4"
                                                alt="" />
                                        </div>
                                        <div>
                                            <h4 class="mb-1">Comprehensive Support</h4>
                                            <p class="mb-0">We guide you from application to approval, ensuring a seamless
                                                experience. </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/column -->
                                <div class="col-md-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('front') }}/dev/assets/img/personal/journal-check.svg"
                                                class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4"
                                                alt="" />
                                        </div>
                                        <div>
                                            <h4 class="mb-1">Expertise You Can Trust</h4>
                                            <p class="mb-0">Our knowledgeable team ensures all documents meet UAE
                                                regulations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/column -->
                                <div class="col-md-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('front') }}/dev/assets/img/personal/person-check.svg"
                                                class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4"
                                                alt="" />
                                        </div>
                                        <div>
                                            <h4 class="mb-1">Swift Processing</h4>
                                            <p class="mb-0">We work closely with government agencies to expedite your
                                                residency
                                                visa.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/column -->
                                <div class="col-md-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="{{ asset('front') }}/dev/assets/img/personal/transparency.svg"
                                                class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4"
                                                alt="" />
                                        </div>
                                        <div>
                                            <h4 class="mb-1">Tailored Assistance</h4>
                                            <p class="mb-0">Each client receives tailored support and clear answers at
                                                every
                                                stage.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="row gx-md-5 gy-5">
                                <figure class="rounded mx-5 "><img src="{{ asset($section->image) }}">
                                </figure>
                            </div>
                            <!--/.row -->
                        </div>
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </section>
        @endif
    @endforeach

@endsection
