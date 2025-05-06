<!-- resources\views\front\page-detail.blade.php -->
@extends('front.layouts.master')
@section('title', $page->title)
@section('content')


@if ($page->elements->isNotEmpty())
    @include('front.partials._element-features-1', ['element' => $page->elements[0]])
@endif


@if ($page->elements->isNotEmpty())
    @include('front.partials._element-features-2', ['elements' => $page->elements])
@endif


@if ($page->elements->isNotEmpty())
    @include('front.partials._element-features-3', ['elements' => $page->elements])
@endif


@if ($page->blocks->isNotEmpty())
    @include('front.partials._block', ['blocks' => $page->blocks])
@endif
{{-- Hero Section --}}

@endsection