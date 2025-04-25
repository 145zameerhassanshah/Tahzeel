<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gy-10 align-items-center">
            <div class="col-lg-6 offset-lg-1 order-lg-2 position-relative">
                <figure class="rounded"><img class="img-fluid" src="{{ asset('assets/static/happy-family2.webp') }}"  alt="" /></figure>
                        <!-- srcset="{{ asset('front/dev/assets/img/personal/happy-family2.webp') }}" -->
                <div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%; left: -7%">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex flex-row align-items-center">
                            <div>
                                <img src="{{ asset('front/dev/assets/img/icons/solid/cloud-group.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm solid-duo text-green-red me-3"
                                    alt="" />
                            </div>
                            <div>
                                <h3 class="fs-25 counter mb-0 text-success">2500+</h3>
                                <p class="fs-16 lh-sm mb-0 text-nowrap">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card shadow-lg position-absolute text-center d-none d-md-block"
                    style="bottom: 10%; left: -10%;">
                    <div class="card-body p-6">
                        <div class="progressbar semi-circle green mb-3" data-value="80"></div>
                        <h4 class="mb-0">Time Saved</h4>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h2 class="fs-16 text-uppercase text-success mb-3">
                    {!! __('home-page.about_title') !!}</h2>
                <h3 class="display-4 mb-4 me-lg-n5">
                    {!! __('home-page.about_subtitle') !!}</h3>
                <p class="mb-6">
                    {!! __('home-page.about_description') !!}</p>
                <ul class="icon-list bullet-bg bullet-soft-red">
                    <li><i class="uil uil-check"></i><b>{!! __('home-page.about_benefit1_description') !!}</b> {!! __('home-page.about_benefit1') !!}</li></li>
                    <li><i class="uil uil-check"></i><b>{!! __('home-page.about_benefit2_description') !!}</b> {!! __('home-page.about_benefit2') !!}</li></li>
                    <li><i class="uil uil-check"></i><b>{!! __('home-page.about_benefit3_description') !!}</b> {!! __('home-page.about_benefit3') !!}</li></li>
                </ul>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
