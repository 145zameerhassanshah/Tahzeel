<section class="wrapper bg-light wrapper-border mb-15">
    <div class="container-fluid py-2 py-md-4">
        <div class="row d-flex justify-content-center mt-5 mb-12">
            <div class="col-md-8 text-center">
                {!! __('home-page.affiliations_title') !!}
                <!-- <h2 class="display-5"><span class="text-gradient gradient-6 fw-bolder">Tah-zeel:</span> Trusted by Government Authorities</h2> -->
                <p>
                    {!! __('home-page.affiliations_subtitle') !!}
                </p>
            </div>
        </div>
        <div class="swiper-container clients mb-0" data-margin="5" data-dots="false" data-loop="true"
            data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="5000" data-items-xxl="5"
            data-items-xl="4" data-items-lg="4" data-items-md="3" data-items-xs="2">
            <div class="swiper">
                <div class="swiper-wrapper ticker">
                    <div class="swiper-slide px-5"><img src="{{ asset('assets/static/govrt-1.svg') }}" alt=""></div>
                    <div class="swiper-slide px-5"><img src="{{ asset('assets/static/govrt-2.svg') }}" alt=""></div>
                    <div class="swiper-slide px-5"><img src="{{ asset('assets/static/govrt-3.svg') }}" alt=""></div>
                    <div class="swiper-slide px-5"><img src="{{ asset('assets/static/govrt-4.svg') }}" alt=""></div>
                    <div class="swiper-slide px-5"><img src="{{ asset('assets/static/govrt-1.svg') }}" alt=""></div>
                    <div class="swiper-slide px-5"><img src="{{ asset('assets/static/govrt-2.svg') }}" alt=""></div>
                    <div class="swiper-slide px-5"><img src="{{ asset('assets/static/govrt-3.svg') }}" alt=""></div>
                    <div class="swiper-slide px-5"><img src="{{ asset('assets/static/govrt-4.svg') }}" alt=""></div>
                </div>
                <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
</section>