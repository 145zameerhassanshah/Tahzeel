@extends('front.layouts.master')
@section('title', $page->title)
@section('content')

    @include('front.partials._hero_section')


    @php($section = $page->sections->where('type', 'L-2-R')->first())
    @if ($section)
        @include('front.partials._left_section', ['section' => $section]);
    @endif




    {{-- Why Us Image --}}
    @php($section = $page->sectionTitles->where('type', 'why_us_image')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif

    @php($why_us_images = $page->whyUsImages)
    @if ($why_us_images->isNotEmpty())
        @include('front.partials._why_us_image', ['why_us_images' => $why_us_images])
    @endif


    @if ($page->blocks->has(0))
        @include('front.partials._block2', ['block' => $page->blocks[0]])
    @endif


    @if ($page->blocks->has(1))
        @include('front.partials._block2', ['block' => $page->blocks[1]])
    @endif


    {{-- Call To Action --}}
    @php($call_to_actions = $page->callToActions)
    @if ($call_to_actions->isNotEmpty())
        @include('front.partials._cta', ['call_to_actions' => $call_to_actions])
    @endif


    @if ($page->elements->has(0))
        @include('front.partials._element-features-2', ['element' => $page->elements[0]])
    @endif


    @if ($page->elements->has(1))
        @include('front.partials._element-features-2', ['element' => $page->elements[1]])
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


    @include('front.partials.counter')

    @include('front.partials._faqs', ['faqs' => $page->faqs])


    @include('front.partials.contact-us')


    @include('front.partials.affiliations')
@endsection
