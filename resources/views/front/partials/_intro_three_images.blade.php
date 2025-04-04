<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
            <div class="col-lg-6">
                <div class="row gx-md-5 gy-5">
                    <div class="col-12 d-none d-md-block">
                        @if(isset($intro_section->images[0]))
                            <figure class="rounded mx-5 ">
                                <img src="{{ asset($intro_section->images[0]) }}" srcset="{{ asset($intro_section->images[0]) }}" alt="">
                            </figure>
                        @endif
                    </div>
                    <!--/column -->
                    @if(isset($intro_section->images[1]))
                        <div class="col-md-6">
                            <figure class="rounded d-none d-md-block">
                                <img src="{{ asset($intro_section->images[1]) }}" srcset="{{ asset($intro_section->images[1]) }}" alt="">
                            </figure>
                        </div>
                    @endif
                    <!--/column -->
                    @if(isset($intro_section->images[2]))
                        <div class="col-md-6">
                            <figure class="rounded">
                                <img src="{{ asset($intro_section->images[2]) }}" srcset="{{ asset($intro_section->images[2]) }}" alt="">
                            </figure>
                        </div>
                    @endif
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-red mb-3">{!! $intro_section->subtitle !!}</h2>
                <h3 class="display-3 mb-8">{!! $intro_section->title !!}</h3>
                <p class="mb-3">{{ $intro_section->description }}</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
    </section>
