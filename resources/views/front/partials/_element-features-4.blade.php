<section class="wrapper bg-light">
    <div class="container py-14 py-md-18">
        <div class="row gy-10 gy-sm-13 gx-lg-8 align-items-center">
            <div class="col-lg-7 order-lg-2">
                <div class="row gx-md-5 gy-5">
                    <div class="col-lg-12 align-self-end">
                        <figure class="rounded">
                            <img src="{{ asset($element->image) }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5">
                <h3 class="display-4 mb-7">
                    {{ $element->title }}
                </h3>
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
                                {{ $feature->title }}
                            </button>
                        </div>
                        <div id="{{ $collapseId }}"
                            class="accordion-collapse collapse"
                            aria-labelledby="{{ $headingId }}"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{ $feature->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>