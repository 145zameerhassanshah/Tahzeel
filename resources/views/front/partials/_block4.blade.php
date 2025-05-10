<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
    <div class="col-lg-6 position-relative">
      <div class="shape rounded bg-pale-red rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate3d(0px, 0px, 0px) translate(-50%, -50%); z-index: 0;"></div>
      <div class="row gx-md-5 gy-5 position-relative">
        <div class="col-6">
          <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="300" src="{{ asset('front/dev/assets/img/demos/sa5.jpg') }}"  alt="" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
          <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn" data-delay="600" src="{{ asset('front/dev/assets/img/demos/sa6.jpg') }}"  alt="" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
        </div>
        <!-- /column -->
        <div class="col-6">
          <img class="img-fluid rounded shadow-lg my-5" data-cue="fadeIn" data-delay="900" src="{{ asset('front/dev/assets/img/demos/sa7.jpg') }}"  alt="" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
          <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200" src="{{ asset('front/dev/assets/img/demos/sa8.jpg') }}"  alt="" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!--/column -->
    <div class="col-lg-6">
      <h3 class="display-4 mb-5">{!! $block->title !!}</h3>
      <p class="mb-5">{!!$block->description!!}</p>
      @php
      $featureChunks = $block->features->chunk(ceil($block->features->count() / 2));
  @endphp
  
  <div class="row gy-3">
      @foreach ($featureChunks as $chunk)
          <div class="col-xl-6">
              <ul class="icon-list bullet-bg bullet-soft-red mb-0">
                  @foreach ($chunk as $index => $feature)
                      <li @if($index > 0) class="mt-3" @endif>
                          <span><i class="uil uil-check"></i></span>
                          <span>{!! $feature->title !!}</span>
                      </li>
                  @endforeach
              </ul>
          </div>
      @endforeach
  </div>
        <!--/.row -->
    </div>
    <!--/column -->
  </div>