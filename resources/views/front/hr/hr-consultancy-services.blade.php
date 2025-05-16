@extends('front.layouts.master')
@section('title', $page->title)
@section('content')


    {{-- Hero Section --}}
    @include('front.partials._hero_section')


    @if ($page->blocks->has(0))
        <div class="py-2"></div>
        @include('front.partials._block', ['block' => $page->blocks[0]])
    @endif


    @include('front.partials.cta-1')



    {{-- Why Choose Us --}}
    @php($section = $page->sectionTitles->where('type', 'why_choose_us')->first())
    @if ($section)
        @include('front.partials._section_title', ['section' => $section])
    @endif

    @php($why_choose_us = $page->whyChooseUs)

    @if ($why_choose_us->isNotEmpty())
        @include('front.partials._whyChoose', ['why_choose_us' => $why_choose_us])
    @endif


    @php($callToActions = $page->callToActions)
    @if ($callToActions->isNotEmpty())
        @include('front.partials._cta', ['item' => $callToActions])
    @endif


    @if ($page->elements->has(0))
        @include('front.partials._element-features-6', ['element' => $page->elements[0]])
    @endif

    @if ($page->elements->has(1))
        @include('front.partials._element-features-1', ['element' => $page->elements[1]])
    @endif


    @include('front.partials.industriesWeServe')

    @include('front.partials.availableManpower')

    @include('front.partials._cta3')


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

    @php($callToActions = $page->callToActions)
    @if ($callToActions->isNotEmpty())
        @include('front.partials._cta', ['item' => $callToActions])
    @endif

    @include('front.partials.contact-us')


    @include('front.partials.clients')

    @include('front.partials.why-choose')

@endsection
