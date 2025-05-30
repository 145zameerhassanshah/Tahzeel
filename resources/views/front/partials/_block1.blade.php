<section class="wrapper bg-light mb-5 pb-5">
    <div class="container mb-5 pb-5">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-19">
            <div class="col-md-8 col-lg-6 position-relative">
                <a href="@@webRoot/assets/media/movie.mp4" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                <figure><img class="w-auto" src="{{ asset($block->image) }}" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 offset-lg-1">
                <h2 class="fs-15 text-uppercase text-muted mb-3">{!! $block->title !!}</h2>
                <h3 class="display-4 mb-6">{!! $block->subtitle !!}</h3>
                <p class="mb-6">{!!$block->description!!}</p>
                @php
                $featureChunks = $block->features->chunk(ceil($block->features->count() / 2));
                @endphp

                <div class="row gy-3 gx-xl-8">
                    @foreach ($featureChunks as $chunk)
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            @foreach ($chunk as $index => $feature)
                            <li @if($index> 0) class="mt-3" @endif>
                                <span><i class="uil uil-check"></i></span>
                                <span>{!! $feature->title !!}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
    </div>
    <!--/.row -->
</section>
