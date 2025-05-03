<!-- \resources\views\front\partials\_features.blade.php -->
@if ($features->isNotEmpty())
<div class="row">
    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
        <h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>
        <h3 class="display-4 mb-10">The service we offer is specifically designed to meet your needs.</h3>
    </div>
</div>

<div class="row gx-md-8 gy-8 text-center mb-14 mb-md-17">
    @foreach ($features as $feature)
    <div class="col-md-6 col-lg-3">
        <!-- <div class="icon btn btn-circle btn-lg btn-light pe-none mb-5"> -->
        <i style="font-size: 40px; color:black;" class="{{ $feature->icon }}"></i>
        <!-- </div> -->
        <h4>{!! $feature->getTranslation('title', app()->getLocale()) !!}</h4>
        <p class="mb-3">{{ $feature->getTranslation('subtitle', app()->getLocale()) }}</p>
        <p class="mb-3">{{ $feature->getTranslation('description', app()->getLocale()) }}</p>
        <!-- @if ($feature->subtitle) <a href="#" class="more hover">{{ $feature->getTranslation('subtitle', app()->getLocale()) }}</a> @endif -->
    </div>
    @endforeach
</div>
@endif