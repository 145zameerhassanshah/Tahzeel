<section class="wrapper bg-light">
  <div class="container py-16 py-md-18">
    <div class="row text-center">
      <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
        <img src="{{ asset('front/dist/assets/img/svg/doodle3.svg') }}" class="h-11 position-absolute d-none d-lg-block" style="top: -20%; right: -12%" alt="">
        <img src="{{ asset('front/dist/assets/img/svg/doodle9.svg') }}" class="h-17 position-absolute d-none d-lg-block" style="bottom: 5%; left: -17%" alt="">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">{{ $element->title }}</h2>
        <h3 class="display-3 mb-12 text-center">{!! $element->subtitle !!}</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row d-flex align-items-start mb-19">
      <div class="col-lg-6 position-lg-sticky" style="top: 8rem;">

        <figure><img src="{{ asset($element->image) }}" alt=""></figure>
      </div>
      <!-- /column -->
      <div class="col-lg-5 ms-auto">
        <div class="d-flex flex-row mb-8">
          <div>
            <div class="svg-bg svg-bg-lg bg-pale-grape rounded-xl me-5">
              <img src="{{ asset($element->icon) }}" class="icon-svg solid text-navy" alt="">
            </div>
          </div>
          <div>
            <h4 class="fs-20">Scheduled Transactions</h4>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-8">
          <div>
            <div class="svg-bg svg-bg-lg bg-pale-green rounded-xl me-5">
              <img src="{{ asset('uploads/tmp/ext2.jpg') }}" class="icon-svg solid text-navy" alt="">
            </div>
          </div>
          <div>
            <h4 class="fs-20">Multiple Currencies</h4>
            <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-8">
          <div>
            <div class="svg-bg svg-bg-lg bg-pale-pink rounded-xl me-5">
              <img src="{{ asset('uploads/tmp/ext2.jpg') }}" class="icon-svg solid text-navy" alt="">
            </div>
          </div>
          <div>
            <h4 class="fs-20">Database Management</h4>
            <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-8">
          <div>
            <div class="svg-bg svg-bg-lg bg-pale-yellow rounded-xl me-5">
              <img src="{{ asset('uploads/tmp/ext2.jpg') }}" class="icon-svg solid text-navy" alt="">
            </div>
          </div>
          <div>
            <h4 class="fs-20">Sync Between Devices</h4>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-8">
          <div>
            <div class="svg-bg svg-bg-lg bg-pale-blue rounded-xl me-5">
              <img src="{{ asset('uploads/tmp/ext2.jpg') }}" class="icon-svg solid text-navy" alt="">
            </div>
          </div>
          <div>
            <h4 class="fs-20">Smart Search</h4>
            <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-8">
          <div>
            <div class="svg-bg svg-bg-lg bg-pale-leaf rounded-xl me-5">
              <img src="{{ asset('uploads/tmp/ext2.jpg') }}" class="icon-svg solid text-navy" alt="">
            </div>
          </div>
          <div>
            <h4 class="fs-20">Detailed Reports</h4>
            <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
          </div>
        </div>
      </div>
      <!-- /column -->
    </div>
  </div>
  <!-- /.container -->
</section>
