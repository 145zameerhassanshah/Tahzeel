@extends('front.layouts.master')
@section('title', $page->title)
@section('content')

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-1', ['element' => $page->elements[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-2', ['element' => $page->elements[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-3', ['element' => $page->elements[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-4', ['element' => $page->elements[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-5', ['element' => $page->elements[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-6', ['element' => $page->elements[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-7', ['element' => $page->elements[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-8', ['element' => $page->elements[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-9',  ['block' => $page->blocks[0]])
@endif

@if ($page->elements->isNotEmpty())
@include('front.partials._element-features-10', ['element' => $page->elements[0]])
@endif

@endsection