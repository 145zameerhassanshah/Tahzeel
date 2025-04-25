@if ($page->procedures->isNotEmpty())
<section class="wrapper bg-light">
    <div class="container-fluid py-4 py-md-8">
        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">
                    @foreach ($page->procedures as $procedure)
                    <div class="col-md-3"> <img class="me-2" style="width: 20px; height:auto;" src="{{ asset('assets/admin/uploads/procedure/' . $procedure->image) }}" alt="">
                        <h4 class="mb-1"> {!! $procedure->title ?? '' !!}</h4>
                        <p class="mb-5 mb-md-0 text-justify">{!! $procedure->subtitle ?? '' !!}</p>
                        <p class="mb-5 mb-md-0 text-justify">{!! $procedure->description ?? '' !!}</p>
                    </div>
                    @endforeach
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endif
