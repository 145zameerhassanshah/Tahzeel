<div class="container">
    <div class="row text-center mt-10 mb-12">
        <div class="col">
            {!! __('about-us.feature_title') !!}
            <p>{!! __('about-us.feature_subtitle') !!}</p>
        </div>
    </div>
    <div class="row gx-md-5 mb-5 mb-md-5">
        @foreach ($why_choose_us as $why_choose)
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-lg card-border-bottom border-soft-yellow h-100 hover-card">
                <div class="card-body">
                    <img src="{{ asset('front/dev/assets/img/personal/boxes.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                    <h4>{{ $why_choose->title }}</h4>
                    <h4>{{ $why_choose->subtitle }}</h4>
                    <p class="mb-2">{{ $why_choose->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>