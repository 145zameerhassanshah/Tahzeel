@php
$why_us_image_title = $section_titles->where('type', 'why_us_image')->first();
@endphp
<div class="container">
    @if(isset( $why_us_image_title->title ))
    <div class="row text-center mt-10 mb-12">
        <div class="col">
            <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mt-12">{{ $why_us_image_title->title }}</h3>
            <p class="lead fs-lg mb-8"><span class="underline green">{{ $why_us_image_title->subtitle }}</p>
        </div>
    </div>
    @endif
    <div class="row gx-md-5 mb-5 mb-md-5">

        @foreach ($why_us_images as $why_us)

        <div class="col-md-6 col-xl-3 ">
            <div class="card shadow-lg card-border-bottom border-soft-yellow h-100 hover-card ">
                <div class="card-body">
                    <img src="{{ asset('assets/admin/uploads/why_us_image/'.$why_us->image) }}"
                        class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                    <h4>{!! $why_us->title !!}</h4>
                    <p class="mb-2">{!! $why_us->description !!}</p>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>

        @endforeach

    </div>
    <!--/.row -->
</div>
