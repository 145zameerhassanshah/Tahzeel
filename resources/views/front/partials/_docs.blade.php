<!-- resources\views\front\partials\_docs.blade.php -->
<div class="wrapper">
    <div class="container">
        <div class="row d-flex justify-content-center mb-10 mt-10">
            @if($document_title)
            <h2 class="fs-15 text-uppercase text-red mb-3 mt-12">{!! $document_title->subtitle !!}</h2>
            <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mb-5">{!! $document_title->title !!}</h3>
            @endif
        </div>
        <div class="row">
            <div class="col">
                <div class="accordion accordion-wrapper" id="accordionIconExample">
                    @foreach($document_requireds as $index => $doc)
                    <div class="card accordion-item icon">
                        <div class="card-header" id="headingIcon{{ $index }}">
                            <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseIcon{{ $index }}"
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="collapseIcon{{ $index }}">
                                {{-- <span><i class="{{ $doc->icon }}"></i></span>{{ $doc->title }} --}}
                                <img style="width: 20px; height:auto;" src="{{ asset('assets/admin/uploads/document/' . $doc->icon) }}" alt="" class="me-2">{{ $doc->title }}
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseIcon{{ $index }}"
                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                            aria-labelledby="headingIcon{{ $index }}"
                            data-bs-parent="#accordionIconExample">
                            <div class="card-body">
                                <p>{{ $doc->description }}</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    @endforeach
                </div>
                <!--/.accordion -->
            </div>
        </div>
    </div>
</div>