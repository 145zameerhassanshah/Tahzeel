@extends('front.layouts.master')
@section('title', $page->title)
@section('content')


    {{-- Hero Section --}}
    @include('front.partials._hero_section')
    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block', ['block' => $page->blocks[0]])
    @endif


    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-1', ['element' => $page->elements[0]])
    @endif


    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-1', ['element' => $page->elements[2]])
    @endif
    
    @include('front.partials._cta3')

    @include('front.partials.clients')

    @include('front.partials.why-choose')

@endsection
