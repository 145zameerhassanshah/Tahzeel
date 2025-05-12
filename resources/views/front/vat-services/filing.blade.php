@extends('front.layouts.master')
@section('title', $page->title)
@section('content')
    @include('front.partials._hero_section')

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-1', ['element' => $page->elements[0]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-2', ['element' => $page->elements[0]])
    @endif

    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block', ['block' => $page->blocks[0]])
    @endif

    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block1', ['block' => $page->blocks[1]])
    @endif

    @php($testimonials = $page->testimonials)
    @if ($testimonials->isNotEmpty())
        @include('front.partials.clients-2', ['testimonials' => $testimonials])
    @endif

    @include('front.partials.counter')

    @include('front.partials.clients')

    @include('front.partials.why-choose')
    
    @php($callToActions = $page->callToActions)
    @if ($callToActions->isNotEmpty())
        @include('front.partials._cta', ['item' => $callToActions])
    @endif

    @php($testimonials = $page->testimonials)
    @if ($testimonials->isNotEmpty())
        @include('front.partials._faqs', ['testimonials' => $testimonials])
    @endif

    @php($faqs = $page->faqs)
    @if ($faqs->isNotEmpty())
        @include('front.partials._faqs_1', ['faq' => $faqs])
    @endif

    @include('front.partials.contact-us')
@endsection