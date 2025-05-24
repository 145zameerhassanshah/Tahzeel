<!--Start Testimonial-->
<section class="wrapper bg-light">
  <div class="container py-5 py-md-5">
    <div class="row gx-xl-12 gy-10 align-items-center">
      <div class="col-xl-4">
        {!! __('testimonials.testimonial_title') !!}
        <p class="lead fs-lg mb-6">{!! __('testimonials.testimonial_sub_title') !!}</p>
        <a href="{{ route('front.contact.us') }}" class="btn btn-red rounded-pill text-white">{{ __('buttons.apply_now') }}</a>
      </div>
      <!-- /column -->
      <div class="col-xl-8">
        <div class="position-relative">
          <div class="shape rounded-circle bg-soft-green rellax w-16 h-16" data-rellax-speed="1" style="top: -0.7rem; right: -1.7rem;"></div>
          <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; left: -1.4rem;"></div>
          <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                <div class="swiper-slide">
                  <div class="item-inner">
                    <div class="card">
                      <div class="card-body">
                        <blockquote class="icon mb-0">
                          <p>“{{ $testimonial->feedback }}”</p>
                          <div class="blockquote-details">
                            <img class="rounded-circle w-12" src="{{ asset('assets/admin/uploads/testimonial/' . $testimonial->image) }}" alt="" />
                            <div class="info">
                              <h5 class="mb-1">{{ $testimonial->name }}</h5>
                              <p class="mb-0">{{ $testimonial->designation }}</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.item-inner -->
                </div>
                @endforeach
                <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /.position-relative -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<!-- End Testimonial-->
