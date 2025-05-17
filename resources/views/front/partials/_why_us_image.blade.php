
<div class="container-fluid px-5">
    <div class="row gx-md-2 mb-5 mb-md-5">
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
