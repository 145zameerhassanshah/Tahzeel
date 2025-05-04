@php
    $images = json_decode($introSection->images, true);
@endphp
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
            <div class="col-lg-6">
                <div class="row gx-md-5 gy-5">
                    @if (!empty($images[0]))
                        <div class="col-12 d-none d-md-block">
                            <figure class="rounded mx-5">
                                <img src="{{ asset($images[0]) }}" alt="">
                            </figure>
                        </div>
                    @endif

                    @if (!empty($images[1]))
                        <div class="col-md-6">
                            <figure class="rounded d-none d-md-block">
                                <img src="{{ asset($images[1]) }}" alt="">
                            </figure>
                        </div>
                    @endif

                    @if (!empty($images[2]))
                        <div class="col-md-6">
                            <figure class="rounded">
                                <img src="{{ asset($images[2]) }}" alt="">
                            </figure>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-red mb-3">{!! $introSection->subtitle !!}</h2>
                <h3 class="display-3 mb-8">{!! $introSection->title !!}</h3>
                <p class="mb-3">{{ $introSection->description }}</p>
            </div>
        </div>
    </div>
</section>
