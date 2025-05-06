<section class="wrapper bg-light" style="margin: 300px 0 300px 0;">
    <div class="container">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7 order-lg-2">
                <figure>
                    <img class="w-auto" src="{{ asset('uploads/tmp/ext4.jpeg') }}" alt="">
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h2 class="fs-16 text-uppercase text-muted mb-3">{{$block->title}}</h2>
                <h3 class="display-4 mb-5">{{$block->subtitle}}</h3>
                <p class="mb-6">{!!$block->description!!}</p>
                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        @foreach ($block->features as $index => $feature)
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>{{$feature->title}}</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>{{$feature->title}}</span></li>
                        </ul>
                    @endforeach
                </div>

                    <!--/column -->
                    <div class="col-xl-6">
                        @foreach ($block->features as $index => $feature)

                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>{{$feature->title}}</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>{{$feature->title}}</span></li>
                        </ul>
                    @endforeach
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->

            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>