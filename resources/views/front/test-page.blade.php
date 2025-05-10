@extends('front.layouts.master')
@section('title', $page->title)
@section('content')

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-1', ['element' => $page->elements[0]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-2', ['element' => $page->elements[1]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-3', ['element' => $page->elements[2]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-4', ['element' => $page->elements[3]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-5', ['element' => $page->elements[4]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-6', ['element' => $page->elements[5]])
    @endif


    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-7', ['element' => $page->elements[6]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-8', ['element' => $page->elements[7]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-9', ['element' => $page->elements[8]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-10', ['element' => $page->elements[10]])
    @endif



    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block', ['block' => $page->blocks[0]])
    @endif

    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block1', ['block' => $page->blocks[1]])
    @endif

    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block2', ['block' => $page->blocks[2]])
    @endif


    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block4', ['block' => $page->blocks[3]])
    @endif

    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block5', ['block' => $page->blocks[4]])
    @endif

    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block6', ['block' => $page->blocks[5]])
    @endif

    @if ($page->blocks->isNotEmpty())
        @include('front.partials._block3', ['block' => $page->blocks[6]])
    @endif







    @endsection
