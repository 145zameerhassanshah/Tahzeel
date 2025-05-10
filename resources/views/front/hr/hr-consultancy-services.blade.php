@extends('front.layouts.master')
@section('title', $page->title)
@section('content')


    {{-- Hero Section --}}
    @include('front.partials._hero_section')

    @if ($page->blocks->isNotEmpty())
         @include('front.partials._block', ['block' => $page->blocks[0]])
    @endif

    @include('front.partials.cta-1')

    @include('front.partials.why-choose')

    <section class="wrapper">
  <section class="wrapper">
  <div class="container py-14 py-md-16">
    <div class="row d-flex align-items-start gy-10">
      <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
        <h3 class="display-2 mb-5">The service I offer is specifically designed to meet your needs.</h3>
        <p class="mb-7">Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <a href="#" class="btn btn-lg btn-primary btn-icon btn-icon-end">More Details <i class="uil uil-arrow-up-right"></i></a>
      </div>
      <!-- /column -->
      <div class="col-lg-6 ms-auto">

        <div class="card mb-6" style="background-image: url('{{ asset('assets/static/domestic-bg.webp') }}'); background-size: cover; background-position: center;">
          <div class="card-body d-flex flex-row bg-white bg-opacity-75 p-4 rounded">
            <div>
              <img src="./assets/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-fuchsia me-5" alt="" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">User Research</h3>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non metus auctor eget lacinia odio sem aget elit.</p>
            </div>
          </div>
        </div>

        <div class="card mb-6" style="background-image: url('{{ asset('assets/static/about-bg.webp') }}'); background-size: cover; background-position: center;">
          <div class="card-body d-flex flex-row bg-white bg-opacity-75 p-4 rounded">
            <div>
              <img src="./assets/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md text-aqua me-5" alt="" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">Strategy & Planning</h3>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non metus auctor eget lacinia odio sem aget elit.</p>
            </div>
          </div>
        </div>

        <div class="card mb-6" style="background-image: url('{{ asset('assets/static/ded-businessLicenseBG.webp') }}'); background-size: cover; background-position: center;">
          <div class="card-body d-flex flex-row bg-white bg-opacity-75 p-4 rounded">
            <div>
              <img src="./assets/img/icons/lineal/smartphone.svg" class="svg-inject icon-svg icon-svg-md text-yellow me-5" alt="" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">App Design</h3>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non metus auctor eget lacinia odio sem aget elit.</p>
            </div>
          </div>
        </div>

        <div class="card mb-6" style="background-image: url('{{ asset('assets/static/brand-bg.webp') }}'); background-size: cover; background-position: center;">
          <div class="card-body d-flex flex-row bg-white bg-opacity-75 p-4 rounded">
            <div>
              <img src="./assets/img/icons/lineal/design.svg" class="svg-inject icon-svg icon-svg-md text-leaf me-5" alt="" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">Brand Design</h3>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non metus auctor eget lacinia odio sem aget elit.</p>
            </div>
          </div>
        </div>

        <div class="card mb-6" style="background-image: url('{{ asset('assets/static/motion-bg.webp') }}'); background-size: cover; background-position: center;">
          <div class="card-body d-flex flex-row bg-white bg-opacity-75 p-4 rounded">
            <div>
              <img src="./assets/img/icons/lineal/video-editing.svg" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">Motion Graphic</h3>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non metus auctor eget lacinia odio sem aget elit.</p>
            </div>
          </div>
        </div>

        <div class="card" style="background-image: url('{{ asset('assets/static/web-bg.webp') }}'); background-size: cover; background-position: center;">
          <div class="card-body d-flex flex-row bg-white bg-opacity-75 p-4 rounded">
            <div>
              <img src="./assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-grape me-5" alt="" />
            </div>
            <div>
              <h3 class="fs-21 mb-2">Web Design</h3>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non metus auctor eget lacinia odio sem aget elit.</p>
            </div>
          </div>
        </div>

      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

  <!-- /.container -->
</section>
<!-- /section -->


    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-2', ['element' => $page->elements[0]])
    @endif

    @include('front.partials.cta-2')

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-6', ['element' => $page->elements[1]])
    @endif

    @if ($page->elements->isNotEmpty())
        @include('front.partials._element-features-1', ['element' => $page->elements[2]])
    @endif
    
    @include('front.partials._cta3')

    @include('front.partials.clients')

    @include('front.partials.counter')

    @include('front.partials._faqs')

    @include('front.partials.cta-2')

    @include('front.partials.contact-us')


@endsection
