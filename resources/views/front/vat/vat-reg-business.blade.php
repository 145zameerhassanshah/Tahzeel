@extends('front.layouts.master')
@section('title', $page->title)
@section('content')

@include('front.partials._hero_section')


@php($introSection = $page->introductionSections->first())
@if ($introSection)
@include('front.partials._intro_three_images', ['introSection' => $introSection])
@endif


@php($features = $page->features)
@if ($features)
@include('front.partials._features', ['features' => $features])
@endif


@if ($page->faqs->isNotEmpty())
@include('front.partials._faqs_1', ['faqs' => $page->faqs])
@endif


@if ($page->whyChooseUs->isNotEmpty())
@include('front.partials._whyChoose', ['whyChooseUs' => $page->whyChooseUs])
@endif



@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-1', ['element' => $page->elements[0]])
@include('front.partials._element-features-2', ['element' => $page->elements[0]])
@endif


@if ($page->blocks->isNotEmpty())
@include('front.partials._block', ['block' => $page->blocks[0]])
@endif


@php($testimonials = $page->testimonials)
@if ($testimonials->isNotEmpty())
@include('front.partials.clients-2', ['testimonials' => $testimonials])
@endif



@if (isset($feature_images) && isset($feature_title->title))
@include('front.partials._feature_image')
@endif


@if ($page->featureImages->isNotEmpty())
@include('front.partials._feature_image', ['featureImages' => $page->featureImages])
@endif



@if ($page->procedures->isNotEmpty())
@include('front.partials._procedures', ['procedures' => $page->procedures])
@endif


@if ($page->documentRequireds->isNotEmpty())
@include('front.partials._docs', ['documentRequireds' => $page->documentRequireds])
@endif


{{-- Display Key Features --}}
@if (isset($feature_title->title))
<div class="container">
    <div class="row text-center mt-10 mb-12">
        <div class="col">
            <h2 class="display-5">{!! $feature_title->title !!}</h2>
            <p class="mx-5">{!! $feature_title->subtitle !!}</p>
        </div>
    </div>
    <div class="row gx-md-5 mb-5 mb-md-5">
        @foreach ($features as $feature)
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-lg card-border-bottom border-soft-yellow h-100 hover-card">
                <div class="card-body">
                    <i class="{{ $feature->icon }}"></i>
                    <h4>{{ $feature->title }}</h4>
                    <p class="mb-2">{{ $feature->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

{{-- Display FAQ Section (if defined) --}}
@if (isset($faq_title))
<div class="wrapper">
    <div class="container">
        <div class="row d-flex justify-content-center mb-10 mt-10">
            <div class="col-md-8 text-center">
                <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{{ $faq_title->subtitle }}</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mb-5">{{ $faq_title->title }}</h3>
                <p class="lead fs-lg mb-8">Having the right documents is key to a smooth VAT process. <span
                        class="underline green">Tah-zeel</span> simplifies every step, ensuring FTA compliance for
                    registration, filing, and deregistration.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="accordion accordion-wrapper" id="accordionIconExample">
                    @foreach ($faqs as $faq)
                    <div class="card accordion-item icon">
                        <div class="card-header" id="headingIcon{{ $loop->index }}">
                            <button class="accordion-button" data-bs-toggle="collapse"
                                data-bs-target="#collapseIcon{{ $loop->index }}" aria-expanded="true"
                                aria-controls="collapseIcon{{ $loop->index }}">
                                <span><i class="bi bi-passport"></i></span>{{ $faq->question }}
                            </button>
                        </div>
                        <div id="collapseIcon{{ $loop->index }}" class="accordion-collapse collapse"
                            aria-labelledby="headingIcon{{ $loop->index }}" data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{{ $faq->answer }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@php($callToActions = $page->callToActions)
@if ($callToActions->isNotEmpty())
@include('front.partials._cta')
@endif

@include('front.partials.affiliations')

@include('front.partials.cta-1')

@include('front.partials.contact-us')

@include('front.partials.amr-services-cards')
@endsection