@if ($page->featureImages->isNotEmpty())
<div class="row gx-md-5 mb-5 mb-md-5">
    @foreach ($page->featureImages as $feature)
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-yellow h-100 hover-card">
            <div class="card-body">
                <img src="{{ asset('assets/admin/uploads/feature_image/'. $feature->image) }}"
                    class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                <h4>{{ $feature->title }}</h4>
                <p class="mb-2">{{ $feature->subtitle }}</p>
                <p class="mb-2">{{ $feature->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif