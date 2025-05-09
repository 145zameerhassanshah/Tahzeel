@extends('front.layouts.master')
@section('title', $page->title)
@section('content')


    {{-- Hero Section --}}
    @include('front.partials._hero_section')
    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block', ['block' => $page->blocks[0]])
    @endif

    @if ($page->blocks->isNotEmpty())
         @include('front.partials._block', ['block' => $page->blocks[0]])
    @endif

    @include('front.partials.cta-1')

    @include('front.partials.why-choose')

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-2', ['element' => $page->elements[0]])
    @endif

    @include('front.partials.cta-2')

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-6', ['element' => $page->elements[1]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-1', ['element' => $page->elements[1]])
    @endif
    
    @include('front.partials._cta3')

    @include('front.partials.clients')

    @include('front.partials.counter')

    @include('front.partials._faqs')

    @include('front.partials.cta-2')

    @include('front.partials.contact-us')


@endsection
