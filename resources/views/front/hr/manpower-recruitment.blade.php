@extends('front.layouts.master')
@section('title', $page->title)
@section('content')


    {{-- Hero Section --}}
    @include('front.partials._hero_section')


    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-1', ['element' => $page->elements[0]])
    @endif



    @include('front.partials.counter')
    @include('front.partials.clients')

    @include('front.partials.why-choose')

@endsection
