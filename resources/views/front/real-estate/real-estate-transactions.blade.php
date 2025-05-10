@extends('front.layouts.master')
@section('title', $page->title)
@section('content')


    {{-- Hero Section --}}
    @include('front.partials._hero_section')

@if ($page->blocks->isNotEmpty())
@include('front.partials._block', ['block' => $page->blocks[0]])
@endif



    @php($testimonials = $page->testimonials)
    @if ($testimonials->isNotEmpty())
        @include('front.partials.clients-2', ['testimonials' => $testimonials])
    @endif



    @include('front.partials.counter')
    @include('front.partials.clients')

    @include('front.partials.why-choose')

@endsection
