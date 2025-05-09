<section class="wrapper bg-light">
    <div class="container py-16 py-md-18">
        <div class="row d-flex align-items-start gy-10 mb-18 mb-md-20">
            <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                <h3 class="display-2 mb-5">{!! $element->title !!}</h3>
                <p class="mb-7">{!! $element->description !!}</p>
                <a href="#" class="btn btn-lg btn-primary btn-icon btn-icon-end">More Details <i class="uil uil-arrow-up-right"></i></a>
            </div>
            <div class="col-lg-6 ms-auto">
                @php
                $colors = ['bg-soft-fuchsia','bg-soft-aqua','bg-soft-yellow','bg-soft-leaf','bg-soft-orange','bg-soft-grape'];
                $icons = ['3d.svg','alarm.svg','audience.svg','badge.svg','calendar.svg','currency.svg'];
                @endphp
                @foreach ($element->features as $index => $feature)
                @php
                $color = $colors[$index % count($colors)];
                $icon = $icons[$index % count($icons)];
                @endphp
                <div class="card {{ $color }} mb-6">
                    <div class="card-body d-flex flex-row">
                        <div><img src="{{ asset('front/dist/assets/img/icons/solid/' . $icon) }}" class="icon-svg icon-svg-md text-fuchsia me-5" alt=""></div>
                        <div>
                            <h3 class="fs-21 mb-2">{!! $feature->title !!}</h3>
                            <p class="mb-0">{!! $feature->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>