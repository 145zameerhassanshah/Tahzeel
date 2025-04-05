@extends('front.layouts.master')
@section('title', 'Vat Registration for Business')
@section('content')


@if(isset($hero_sections))
    @foreach($hero_sections as $hero_section)
        @include('front.partials._hero_section')
    @endforeach
@endif


@if(isset($intro_sections))
    @foreach($intro_sections as $intro_section)
        @include('front.partials._intro_three_images')
    @endforeach
@endif

@php
    $document_title = $section_titles->where('type', 'document')->first();
@endphp
@if(isset($document_requireds) && isset($document_title->title))
    @include('front.partials._docs')
@endif

@php
    $feature_title = $section_titles->where('type', 'feature')->first();
@endphp

@if (isset($feature_images) && isset($feature_title->title))
    @include('front.partials._feature_image')
@endif

@php
    $procedure_title = $section_titles->where('type', 'procedure')->first();
@endphp

@if (isset($procedures) && isset($procedure_title))
    @include('front.partials._procedures')
@endif
    {{-- Key Features --}}

    @if (isset($feature_title->title))
        <div class="container">
            <div class="row text-center mt-10 mb-12">
                <div class="col">
                    <h2 class="display-5">{!! $feature_title->title !!}</h2>asdfghhhjjkk
                    <p class="mx-5">
                        {!! $feature_title->subtitle !!}
                    </p>
                </div>
            </div>
            <div class="row gx-md-5 mb-5 mb-md-5">

                @foreach ($features as $feature)
                    <div class="col-md-6 col-xl-3 ">
                        <div class="card shadow-lg card-border-bottom border-soft-yellow h-100 hover-card ">
                            <div class="card-body">
                                <i class="{{ $feature->icon }}"></i>
                                <h4>{{ $feature->title }}</h4>
                                <p class="mb-2">{{ $feature->description }}</p>

                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                @endforeach

                <!--/column -->
            </div>
            <!--/.row -->

        </div>
    @endif
     {{-- end features  --}}

     @if($procedures)

        @include('front.partials._procedures')
     @endif


    <div class="wrapper">
        <div class="container">
            <div class="row d-flex justify-content-center mb-10 mt-10">
                <div class="col-md-8 text-center">
                    @php
                        $faq_title = $section_titles->where('type', 'faq')->first();
                    @endphp
                    <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{{ $faq_title->subtitle }}</h2>
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mb-5">{{ $faq_title->title }}</h3>
                    <p class="lead fs-lg mb-8"> Having the right documents is key to a smooth VAT process.  <span class="underline green">Tah-zeel</span> simplifies every step, ensuring FTA compliance for registration, filing, and deregistration.

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="accordion accordion-wrapper" id="accordionIconExample">
                        @foreach ($faqs as $faq)
                        <div class="card accordion-item icon">
                            <div class="card-header" id="headingIconOne">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIconOne"
                                    aria-expanded="true" aria-controls="collapseIconOne"><span><i
                                            class="bi bi-passport"></i></span>{{ $faq->question }}</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseIconOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingIconOne" data-bs-parent="#accordionIconExample">
                                <div class="card-body">
                                    <p>{{ $faq->answer }}</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        @endforeach
                    </div>
                    <!--/.accordion -->
                </div>
            </div>
        </div>
    </div>

@if ($call_to_actions)
    @include('front.partials._cta')
@endif

@if ($testimonials)
@php
    $testimonial_title = $section_titles->where('type', 'testimonial')->first();
@endphp
    @include('front.partials._clients')
@endif


@include('front.partials.affiliations')

@include('front.partials.cta-1')

@include('front.partials.contact-us')

@include('front.partials.amr-services-cards')

@endsection
