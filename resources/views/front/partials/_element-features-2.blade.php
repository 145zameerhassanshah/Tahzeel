<section class="wrapper bg-light">
    <div class="container py-16 py-md-18">
        <div class="row d-flex align-items-start gy-10 mb-18 mb-md-20">
            <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                <h3 class="display-2 mb-5">{{ $element->title }}</h3>
                <p class="mb-7">Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus
                    auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                <a href="#" class="btn btn-lg btn-primary btn-icon btn-icon-end">More Details <i
                        class="uil uil-arrow-up-right"></i></a>
            </div>
            <!-- /column -->
            <div class="col-lg-6 ms-auto">
                @php
                    $colors = [
                        'bg-pale-grape',
                        'bg-pale-green',
                        'bg-pale-pink',
                        'bg-pale-yellow',
                        'bg-pale-blue',
                        'bg-pale-leaf',
                        'bg-pale-violet',
                        'bg-pale-purple',
                        'bg-pale-sky',
                    ];
                    $icons = [
                        '3d.svg',
                        'alarm.svg',
                        'audience.svg',
                        'badge.svg',
                        '3d.svg',
                        '3d.svg',
                        '3d.svg',
                        '3d.svg',
                        '3d.svg',
                        '3d.svg',
                        '3d.svg',
                    ];
                @endphp
                        @foreach ($element->features as $index => $feature)
                <div class="card bg-soft-fuchsia mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="{{ asset('uploads/tmp/ext1.jpeg') }}"
                                class="icon-svg icon-svg-md text-fuchsia me-5" alt="">
                        </div>
                        <div>
                            <h3 class="fs-21 mb-2">{{ $feature->title }}</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non
                                metus auctor eget lacinia odio sem aget elit.</p>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                @endforeach
                <!-- /.card -->
                <div class="card bg-soft-aqua mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="{{ asset('uploads/tmp/ext1.jpeg') }}" class="icon-svg icon-svg-md text-aqua me-5"
                                alt="">
                        </div>
                        <div>
                            <h3 class="fs-21 mb-2">Strategy &amp; Planning</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non
                                metus auctor eget lacinia odio sem aget elit.</p>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-yellow mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="{{ asset('uploads/tmp/ext1.jpeg') }}"
                                class="icon-svg icon-svg-md text-yellow me-5" alt="">
                        </div>
                        <div>
                            <h3 class="fs-21 mb-2">App Design</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non
                                metus auctor eget lacinia odio sem aget elit.</p>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-leaf mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="{{ asset('uploads/tmp/ext1.jpeg') }}" class="icon-svg icon-svg-md text-leaf me-5"
                                alt="">
                        </div>
                        <div>
                            <h3 class="fs-21 mb-2">Brand Design</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non
                                metus auctor eget lacinia odio sem aget elit.</p>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-orange mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="{{ asset('uploads/tmp/ext1.jpeg') }}"
                                class="icon-svg icon-svg-md text-orange me-5" alt="">
                        </div>
                        <div>
                            <h3 class="fs-21 mb-2">Motion Graphic</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non
                                metus auctor eget lacinia odio sem aget elit.</p>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-grape">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="{{ asset('uploads/tmp/ext1.jpeg') }}" class="icon-svg icon-svg-md text-grape me-5"
                                alt="">
                        </div>
                        <div>
                            <h3 class="fs-21 mb-2">Web Design</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, nulla non
                                metus auctor eget lacinia odio sem aget elit.</p>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
        </div>
    </div>
    <!-- /.container -->
</section>
