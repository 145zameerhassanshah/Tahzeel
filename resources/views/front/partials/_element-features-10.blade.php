<div class="container py-16 py-md-18">
    <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
        <div class="col-md-8 col-lg-6 offset-lg-1 order-lg-2 position-relative">
            <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="top: -2rem; right: -1.9rem; transform: translate3d(0px, -14px, 0px);"></div>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; left: -1.5rem; width: 85%; height: 90%; transform: translate3d(0px, 0px, 0px);"></div>
            <figure class="rounded"><img src="{{ asset($element->image) }}" alt=""></figure>
        </div>
        <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-line text-primary mb-3">{!! $element->title !!}</h2>
            <h3 class="display-4 mb-7">{!! $element->subtitle !!}</h3>
            <div class="accordion accordion-wrapper" id="accordionExample">
                @foreach ($element->features as $index => $feature)
                @php
                $collapseId = 'collapse' . $index;
                $headingId = 'heading' . $index;
                @endphp
                <div class="card plain accordion-item">
                    <div class="card-header" id="{{ $headingId }}">
                        <button class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#{{ $collapseId }}"
                            aria-expanded="false"
                            aria-controls="{{ $collapseId }}">
                            {!! $feature->title !!}
                        </button>
                    </div>
                    <div id="{{ $collapseId }}"
                        class="accordion-collapse collapse"
                        aria-labelledby="{{ $headingId }}"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <p>{!! $feature->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>