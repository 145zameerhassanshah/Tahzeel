<div class="container">
    <div class="row gx-md-5 mb-5 mb-md-5">
        @php
            $colors = ['border-soft-yellow', 'border-soft-blue', 'border-soft-red', 'border-soft-green','border-soft-purple',
        'border-soft-orange',
        'border-soft-pink',
        'border-soft-teal',
        'border-soft-cyan',
        'border-soft-gray'
];
        @endphp
        @foreach ($why_choose_us as $index => $whyChoose)
        @php
            $colorClass = $colors[$index % count($colors)]; // rotate colors
        @endphp
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow-lg card-border-bottom {{ $colorClass }} h-100 hover-card">
                <div class="card-body">
                    <img src="{{ asset('front/dev/assets/img/personal/boxes.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                    <h4>{{ $whyChoose->title }}</h4>
                    <h4>{{ $whyChoose->subtitle }}</h4>
                    <p class="mb-2">{{ $whyChoose->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
