<section class="wrapper bg-light">
    <div class="container py-14 py-md-18">
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center mb-10 mb-md-13">
            <div class="col-lg-6 position-relative">
                <div class="btn btn-circle btn-primary pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                    <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg" style="visibility: visible;">20+</span></h3>
                    <p>Year Experience</p>
                </div>
                <div class="row gx-md-5 gy-5 align-items-center">
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-10 offset-md-2">
                                <figure class="rounded"><img src="{{ asset($element->image) }}" alt=""></figure>
                            </div>
                            <div class="col-md-12">
                                <figure class="rounded"><img src="{{ asset($element->image) }}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <figure class="rounded"><img src="{{ asset($element->image) }}" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="display-4 mb-5">{!! $element->title !!}</h3>
                <p class="mb-7">{!! $element->description !!}</p>
                @php
                $featureChunks = $element->features->chunk(ceil($element->features->count() / 2));
            @endphp
            
            <div class="row gy-3">
                @foreach ($featureChunks as $chunk)
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            @foreach ($chunk as $feature)
                                <li>
                                    <span><i class="uil uil-check"></i></span>
                                    <span>{!! $feature->title !!}</span>
                                </li>
                                <li class="mt-3">
                                    <span><i class="uil uil-check"></i></span>
                                    <span>{!! $feature->description !!}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
                        </div>
        </div>
    </div>
</section>