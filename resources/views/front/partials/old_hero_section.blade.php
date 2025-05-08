@if ($page->heroSections->isNotEmpty())
@foreach ($page->heroSections as $hero_section)
<section class="wrapper image-wrapper bg-image bg-overlay-300"
    data-image-src="{{ asset('uploads/hero_section/' . $hero_section->background_image) }}">
    <div class="container pt-17 pb-19 pt-md-18 pb-md-17">
        <div class="row text-start">
            <div class="col-lg-8 col-xl-8 col-xxl-8 me-auto" data-cues="slideInDown" data-group="page-title">
                <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 pt-12">
                    {!! $hero_section->title ?? '' !!}
                </h1>
                <p class="fs-24 text-white lh-sm mb-7 mx-md-14 mx-lg-0 pe-15 d-none d-sm-block">
                    {!! $hero_section->subtitle ?? '' !!}
                </p>
            </div>
        </div>
    </div>
</section>
@endforeach
@endif
