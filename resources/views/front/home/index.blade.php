@extends('front.layouts.master')
@section('title', 'Home')
@section('content')

    @include('front.home.partials.banner')
    
    @include('front.home.partials.services')
    
    @include('front.partials.about')

    @include('front.partials.why-choose')
    
    @include('front.partials.counter')

    @include('front.partials.clients')

    @include('front.partials.affiliations')

    @include('front.partials.contact-us')
    
@endsection