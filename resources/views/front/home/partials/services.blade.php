<section class="wrapper bg-soft-green">
    <div class="container mt-14 pb-18 mt-md-16 pb-md-22 text-center">
        <div class="row justify-content-center mt-15 mb-12">
            <div class="col-md-6 col-sm-12 text-center">
                <h2 class="display-5">Comprehensive Services Tailored for You by <span
                        class="text-gradient gradient-6 display-1">Tah-zeel</span></h2>
                <p class="">
                    At Tah-zeel, we provide a wide range of visa, business, and legal solutions to meet your unique
                    needs, ensuring efficiency and peace of mind at every step.
                </p>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="pricing-wrapper position-relative mt-n22 mt-md-n24">
            <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;">
            </div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1"
                style="bottom: 0.5rem; left: -2.5rem;"></div>

            <div class="row gy-6">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing card text-center h-100">
                            <div class="card-header">
                                <img src="{{ asset($service->icon) }}"
                                    class=" card-img-top w-50 text-center justify-content-center" alt="" />
                            </div>
                            <div class="card-body pt-4 pb-4 h-100 d-flex flex-column align-items-center">

                                <ul class="icon-list bullet-bg bullet-soft-red mt-4 mb-4 text-start align-items-center">
                                    @foreach ($service->serviceFeatures as $feature)
                                        <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="#"
                                                        class="hover-black">{{ $feature->name }}</a>
                                                </strong></span></li>
                                    @endforeach
                                </ul>
                                <a href="{{ route('front.service.detail', $service->slug) }}" class="btn btn-red rounded-pill mt-auto">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
