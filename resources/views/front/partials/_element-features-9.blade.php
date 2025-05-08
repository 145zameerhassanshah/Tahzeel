<section class="wrapper bg-light angled upper-end lower-end">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                    style="top: 3rem; left: 5.5rem;"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                        <figure class="rounded shadow">
                            <img src="{{ asset($block->image) }}" alt="">
                        </figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow">
                            <img src="{{ asset($block->image) }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="{{ asset('front/dist/assets/img/icons/lineal/megaphone.svg') }}" class="icon-svg icon-svg-md mb-4" alt="">
                <h2 class="display-4 mb-3">{{ $block->title }}</h2>
                <p class="lead fs-lg">{!! $block->description !!}</p>
                <div class="row gy-3 gx-xl-8">
                    @php
                    $features = $block->features->values(); // reindex for even split
                    $half = ceil($features->count() / 2);
                    @endphp
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            @foreach ($features->slice(0, $half) as $feature)
                            <li class="mb-3">
                                <span><i class="uil uil-check"></i></span>
                                <span>{{ $feature->title }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            @foreach ($features->slice($half) as $feature)
                            <li class="mb-3">
                                <span><i class="uil uil-check"></i></span>
                                <span>{{ $feature->title }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>