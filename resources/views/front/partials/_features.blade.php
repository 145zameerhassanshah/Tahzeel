<!-- \resources\views\front\partials\_features.blade.php -->
@if ($features->isNotEmpty())
<div class="container mb-5 pb-5">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 mx-auto text-center">
            <h2 class="text-uppercase text-muted mb-3">What We Do?</h2>
            <h3 class="display-4 mb-10">The service we offer is specifically designed to meet your needs.</h3>
        </div>
    </div>

    <div class="row text-center">
        @foreach ($features as $feature)
        <div class="col-lg-12 col-md-12 col-12 mx-auto text-center">
            <div class="icon btn btn-circle btn-lg btn-light pe-none mb-5">
                <i style="font-size: 40px; color:black;" class="{{ $feature->icon }}"></i>
            </div>
            <h4>{!! $feature->title !!}</h4>
            <p class="mb-3">{!! $feature->subtitle !!}</p>
            <p class="mb-3">{!! $feature->description !!}</p>
            <!-- @if ($feature->subtitle) <a href="#" class="more hover">{{ $feature->getTranslation('subtitle', app()->getLocale()) }}</a> @endif -->
        </div>
        @endforeach
    </div>
</div>
@endif