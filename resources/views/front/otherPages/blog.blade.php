@extends('front.layouts.master')
@section('title', 'Blog')
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300"
    data-image-src="{{ asset('assets/static/dubai.webp') }}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
        <div class="row">
            <div class="col-lg-8 col-xl-9 col-xxl-8 mx-auto" data-cues="slideInDown" data-group="page-title">
                <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">Your <span
                        class="underline-3 style-2 yellow">Trusted</span> Visa Consultancy Resource </h1>
                <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10">Discover expert insights, tips, and updates
                    to navigate your visa journey in Dubai with confidence.
                    Feel free to modify it to better suit your client’s brand voice!</p>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                <h2 class="fs-15 text-uppercase text-primary text-center">Our News</h2>
                <h3 class="display-4 mb-6 text-center">Here are the latest company news from our blog that got the
                    most attention.</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
            <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;">
            </div>
            <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true"
                data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($blogs as $blog)
                        <div class="swiper-slide">
                            <div class="item-inner">
                                <article>
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                            <a href="#">
                                                <img src="{{ asset('front/dist/assets/img/photos/b4.jpg') }}" alt="" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">{{ __('Read More') }}</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">
                                                        @php
                                                        $category = $bCategories->firstWhere('id', $blog->bcategory_id);
                                                        @endphp
                                                        {{ $category ? $category->name : __('Uncategorized') }}
                                                    </a>
                                                </div>
                                                <h2 class="post-title h3 mt-1 mb-3">
                                                    <a class="link-dark" href="#">{{ $blog->title }}</a>
                                                </h2>
                                            </div>
                                            <div class="post-content">
                                                {!! Str::limit($blog->content,150) !!}
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <span>{{ $blog->created_at->format('d M Y') }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.position-relative -->
    </div>
    <!-- /.container -->
</section>
@endsection