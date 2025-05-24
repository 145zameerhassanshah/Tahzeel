@foreach ($call_to_actions as $item)
<section class="wrapper bg-leaf bg-lines mt-12">
    <div class="container py-12 py-md-12 text-center ">
        <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                <h3 class="display-3 text-white mb-6">{{ $item->title }}</h3>
                <h2 class="fs-16  text-white mb-10">{{ $item->subtitle }}</h2>
                <a href="{{ $item->button_link }}" class="btn btn-gradient gradient-1 rounded-pill me-1 mb-2 mb-md-0"><img
                        src="" alt="">
                    <p class="ms-2 pt-4">{{ $item->button_text }}</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endforeach
