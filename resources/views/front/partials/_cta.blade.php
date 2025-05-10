@foreach ($callToActions as $item)
<section class="wrapper bg-dark bg-lines mt-12">
    <div class="container py-15 py-md-17 text-center ">
        <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                <h2 class="fs-16 text-uppercase text-white mb-3">{{ $item->subtitle }}</h2>
                <h3 class="display-3 text-white mb-6">{{ $item->title }}</h3>
                <a href="{{ $item->button_link }}" class="btn btn-white fw-normal py-0"><img
                        src="" alt="">
                    <p class="ms-2 pt-4">{{ $item->button_text }}</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endforeach