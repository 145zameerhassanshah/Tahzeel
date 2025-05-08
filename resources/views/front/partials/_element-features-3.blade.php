<section class="wrapper bg-light">
  <div class="container pt-19 pt-md-21 pb-16 pb-md-18">
    <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-18 align-items-center">
      <div class="col-md-8 col-lg-6 position-relative">
        <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%;"></div>
        <figure><img src="{{ asset($element->image) }}" alt=""></figure>
      </div>
      <div class="col-lg-5 col-xl-4 offset-lg-1">
        <h2 class="fs-16 text-uppercase text-line text-primary mb-3">
          {{ $element->title }}
        </h2>
        <h3 class="display-4 mb-7">
          {{ $element->subtitle }}
        </h3>
        @foreach ($element->features as $index => $feature)
        <div class="d-flex flex-row mb-6">
          <div>
            <span class="icon btn btn-block btn-soft-primary pe-none me-5">
              <span class="number fs-18">{{ $index + 1 }}</span>
            </span>
          </div>
          <div>
            <h4 class="mb-1">{{ $feature->title }}</h4>
            <p class="mb-0">{{ $feature->description }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>