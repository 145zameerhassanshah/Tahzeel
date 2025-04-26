<!-- resources\views\front\page-detail.blade.php -->
@extends('front.layouts.master')
@section('title', $page->title)
@section('content')

    {{-- Hero Section --}}
    @include('front.partials._hero_section')
    @php($section = $page->sectionTitles->where('type', 'hero_section')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif

    {{-- Introduction Section --}}
    @php($section = $page->sectionTitles->where('type', 'intro_section')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif
    @php($introSection = $page->introductionSections->first())
    @if ($introSection)
        @include('front.partials._intro_three_images', ['introSection' => $introSection])
    @endif


    {{-- Why Us Image --}}
    @php($section = $page->sectionTitles->where('type', 'whyUsImages')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif

    @php($why_us_images = $page->whyUsImages)
    @if ($why_us_images->isNotEmpty())
        @include('front.partials._why_us_image', ['why_us_images' => $why_us_images])
    @endif


    {{-- Procedure --}}
    @php($section = $page->sectionTitles->where('type', 'procedure')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif
    @include('front.partials._procedures')

    {{-- Call To Action --}}
    @php($section = $page->sectionTitles->where('type', 'call_to_action')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif

    @php($call_to_actions = $page->callToActions)
    @if ($call_to_actions->isNotEmpty())
        @include('front.partials._cta', ['call_to_actions' => $call_to_actions])
    @endif


    {{-- Document Required Section --}}
    @php($section = $page->sectionTitles->where('type', 'document_required')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif
    @php($document_requireds = $page->documentRequireds)
    @if ($document_requireds->isNotEmpty())
        @include('front.partials._docs', [
            'document_requireds' => $document_requireds,
            'document_title' => $section,
        ])
    @endif


    {{-- Feature Image Section --}}
    @php($feature_title = $page->sectionTitles->where('type', 'feature_image')->first())
    @if ($feature_title)
        @include('front.partials._section_title', ['section' => $feature_title])

        @php($feature_images = $page->featureImages)
        @if ($feature_images->isNotEmpty())
            @include('front.partials._feature_image', [
                'feature_images' => $feature_images,
                'feature_title' => $feature_title,
            ])
        @else
            <p>No feature images available.</p>
        @endif
    @endif


    {{-- Why Choose Us --}}
    @php($section = $page->sectionTitles->where('type', 'why_choose_us')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif
    @php($why_choose_us = $page->whyChooseUs)
    @if ($why_choose_us->isNotEmpty())
        @include('front.partials._whyChoose', ['why_choose_us' => $why_choose_us])
    @endif


    {{-- Testimonials --}}
    @php($section = $page->sectionTitles->where('type', 'testimonial')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif
    @php($testimonials = $page->testimonials)
    @if ($testimonials->isNotEmpty())
        @include('front.partials.clients-2', ['testimonials' => $testimonials])
    @endif

@endsection
