@extends('front.layouts.master')
@section('title', $page->title)
@section('content')


    {{-- Hero Section --}}
    @include('front.partials._hero_section')
    @if ($page->blocks->isNotEmpty())
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

{{-- industries we serve section --}}
@if ($page->elements->isNotEmpty() && isset($page->elements[2]))
    {{-- industries we serve section --}}
    <h2 class="text-center">Industries we serve</h2>
    @include('front.partials._element-features-2', ['element' => $page->elements[2]])
@endif

@php($callToActions = $page->callToActions)
@if ($callToActions->isNotEmpty())
@include('front.partials._cta', ['item' => $callToActions])
@endif

     @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-6', ['element' => $page->elements[0]])
    @endif 
         @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-1', ['element' => $page->elements[0]])
    @endif 

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

    @include('front.partials._faqs')

@php($callToActions = $page->callToActions)
@if ($callToActions->isNotEmpty())
@include('front.partials._cta', ['item' => $callToActions])
@endif

        @include('front.partials.contact-Us')


    @include('front.partials.clients')

    @include('front.partials.why-choose')

@endsection
