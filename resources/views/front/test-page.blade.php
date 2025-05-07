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
<<<<<<< HEAD


@if ($page->blocks->isNotEmpty())
    @include('front.partials._block', ['block' => $page->blocks [0]])
@endif

@if ($page->blocks->isNotEmpty())
    @include('front.partials._block1', ['block' => $page->blocks [0]])
@endif
@if ($page->blocks->isNotEmpty())
    @include('front.partials._block2', ['block' => $page->blocks [0]])
@endif
@if ($page->blocks->isNotEmpty())
    @include('front.partials._block3', ['block' => $page->blocks [0]])
@endif



{{-- Hero Section --}}



@endsection
=======
<!-- _element-features-7 -->
@endsection
>>>>>>> d555d885f24a1bb0d5fcec113fdb9b0008b00fd9
