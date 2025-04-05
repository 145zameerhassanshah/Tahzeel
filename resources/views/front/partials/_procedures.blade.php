<section class="wrapper bg-light">
    <div class="container-fluid py-4 py-md-8">

        <div class="row text-center">
            <div class="col-lg-9 mx-auto">

                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mt-12">{{ $procedure_title->subtitle }}</h3>
                <p class="lead fs-lg mb-8"><span class="underline green">{{ $procedure_title->title }}</p>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-10">

                    @foreach ($procedures as $procedure)
                        <div class="col-md-3"> <i class="{{ $procedure->icon }}"></i>
                            <h4 class="mb-1">{{ $procedure->title }}</h4>
                            <p class="mb-5 mb-md-0 text-justify">{{ $procedure->subtitle }}</p>
                            <p class="mb-5 mb-md-0 text-justify">{{ $procedure->description }}</p>
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