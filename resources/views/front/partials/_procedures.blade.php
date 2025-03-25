<section class="wrapper bg-light">
    <div class="container-fluid py-4 py-md-8">

        <div class="row text-center">
            <div class="col-lg-9 mx-auto">

                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mt-12">Simple & Efficient VAT Processing with <span class="text-gradient gradient-6 display-1">Tah-zeel’s </span>

                </h3>
                <p class="lead fs-lg mb-8"><span class="underline green">Tah-zeel </span>simplifies VAT processing, ensuring fast registration and compliance with expert guidance. </p>
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