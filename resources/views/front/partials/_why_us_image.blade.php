@php
    $colors = [
        'border-soft-yellow',
        'border-soft-blue',
        'border-soft-red',
        'border-soft-green',
        'border-soft-purple',
        'border-soft-orange',
        'border-soft-pink',
        'border-soft-teal',
        'border-soft-cyan',
        'border-soft-gray',
    ];
@endphp

<div class="container-fluid px-5">
    <div class="row gx-md-2 mb-5 mb-md-5">
        @foreach ($why_us_images as $i => $why_us)
            @php
                $colorClass = $colors[$i % count($colors)];
            @endphp

            <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg card-border-bottom {{ $colorClass }} h-100 hover-card">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/admin/uploads/why_us_image/' . $why_us->image) }}"
                            class="svg-inject icon-svg icon-svg-md mb-3" alt="Why Us Image" />
                        <h4>{!! $why_us->title !!}</h4>
                        <p class="mb-2">{!! $why_us->description !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
