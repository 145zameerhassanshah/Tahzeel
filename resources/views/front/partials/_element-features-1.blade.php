<section class="wrapper bg-light">
  <div class="container py-16 py-md-18">
    <div class="row text-center">
      <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
        <img src="{{ asset('front/dist/assets/img/svg/doodle3.svg') }}" class="h-11 position-absolute d-none d-lg-block" style="top: -20%; right: -12%" alt="">
        <img src="{{ asset('front/dist/assets/img/svg/doodle9.svg') }}" class="h-17 position-absolute d-none d-lg-block" style="bottom: 5%; left: -17%" alt="">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">{{ $element->title }}</h2>
        <h3 class="display-3 mb-12 text-center">{!! $element->subtitle !!}</h3>
      </div>
    </div>
    <div class="row d-flex align-items-start mb-19">
      <!-- <figure class="rounded"><img src="{{ asset('uploads/tmp/ext6.png') }}" alt=""></figure> -->
      <div class="col-lg-6 position-lg-sticky" style="top: 8rem;">
        <figure><img src="{{ asset($element->image) }}" alt=""></figure>
      </div>
      @php
      $colors = ['bg-pale-grape','bg-pale-green','bg-pale-pink','bg-pale-yellow','bg-pale-blue','bg-pale-leaf','bg-pale-violet','bg-pale-purple','bg-pale-sky'];
      $icons = ['3d.svg','alarm.svg','audience.svg','badge.svg','calendar.svg','currency.svg','server.svg','devices.svg','search.svg'];
      @endphp
      <div class="col-lg-5 ms-auto">
        @foreach ($element->features as $index => $feature)
        @php
        $color = $colors[$index % count($colors)];
        $icon = $icons[$index % count($icons)];
        @endphp
        <div class="d-flex flex-row mb-8">
          <div>
            <div class="svg-bg svg-bg-lg rounded-xl me-5 {{ $color }}">
              <img src="{{ asset('front/dist/assets/img/icons/solid/' . $icon) }}" class="icon-svg solid text-navy" alt="">
            </div>
          </div>
          <div>
            <h4 class="fs-20">{{ $feature->title }}</h4>
            <p>{{ $feature->description }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>