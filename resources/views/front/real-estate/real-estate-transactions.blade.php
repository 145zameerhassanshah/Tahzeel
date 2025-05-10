@extends('front.layouts.master')
@section('title', $page->title)
@section('content')

{{-- Hero Section --}}
@include('front.partials._hero_section')

<<<<<<< HEAD

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-1', ['element' => $page->elements[0]])
@endif

@php($testimonials = $page->testimonials)
@if ($testimonials->isNotEmpty())
@include('front.partials.clients-2', ['testimonials' => $testimonials])
=======
@if ($page->blocks->isNotEmpty())
@include('front.partials._block', ['block' => $page->blocks[0]])
>>>>>>> c79feb3a1a724d80072667e2708bffdebd602ba4
@endif


@include('front.partials.counter')
@include('front.partials.clients')

@include('front.partials.why-choose')

@endsection