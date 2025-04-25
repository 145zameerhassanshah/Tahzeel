@extends('front.layouts.master')

@section('title', $page->title)

@section('content')


@include('front.partials._hero_section')



@php( $section = $page->sectionTitles->where('type', 'why_us_image')->first() )
@if($section)
    @include('front.partials._section_title', ['section' => $section])
@endif


@php( $section = $page->sectionTitles->where('type', 'procedure')->first() )
@if($section)
    @include('front.partials._section_title', ['section' => $section])
@endif

@include('front.partials._procedures')







<div class="my-5 py-5"></div>

@endsection
