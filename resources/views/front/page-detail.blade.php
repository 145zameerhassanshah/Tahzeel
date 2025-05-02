<!-- resources\views\front\page-detail.blade.php -->
@extends('front.layouts.master')
@section('title', $page->title)
@section('content')

{{-- Hero Section --}}
@include('front.partials._hero_section')


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
@php($section = $page->sectionTitles->where('type', 'why_us_image')->first())
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
@php($call_to_actions = $page->callToActions)
@if ($call_to_actions->isNotEmpty())
@include('front.partials._cta', ['call_to_actions' => $call_to_actions])
@endif


{{-- Document Required Section --}}
@php($section = $page->sectionTitles->where('type', 'document')->first())
@if ($section)
@include('front.partials._section_title', ['section' => $section])
@endif
@if ($page->documentRequireds->isNotEmpty())
@include('front.partials._docs', [
'document_requireds' => $page->documentRequireds,
])
@endif


{{-- Feature Image Section --}}
@php($section = $page->sectionTitles->where('type', 'feature_image')->first())
@if ($section)
@include('front.partials._section_title', ['section' => $section])
@endif
@include('front.partials._feature_image');


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



@php($section = $page->sections->where('type', 'ltr')->first())
@if ($section)
@include('front.partials._left_section',['section' => $section]);
@endif


@php($section = $page->sections->where('type', 'rtl')->first())
@if ($section)
@include('front.partials._right_section',['section' => $section]);
@endif

{{-- @include('front.partials._left_section');
@include('front.partials._right_section'); --}}

@endsection