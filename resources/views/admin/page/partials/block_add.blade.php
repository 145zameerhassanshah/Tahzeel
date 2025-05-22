@extends('admin.layouts.master')
@section('title', 'Page Detail')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Add Element') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.block.store', ['slug' => $slug]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <!-- Title Fields -->
                                <div class="col-md-6 mb-3">
                                    <label for="title_en">{{ __('Title (English)') }}<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="title_en" class="form-control" name="title[en]"
                                        placeholder="Enter Title in English" value="{{ old('title.en') }}" required>
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="title_ar">{{ __('Title (Arabic)') }}<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="title_ar" class="form-control" name="title[ar]"
                                        placeholder="Enter Title in Arabic" value="{{ old('title.ar') }}" required>
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- SubTitle Fields -->
                                <div class="col-md-6 mb-3">
                                    <label for="subtitle_en">{{ __('Subtitle (English)') }}<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="subtitle_en" class="form-control" name="subtitle[en]"
                                        placeholder="Enter Subtitle in English" value="{{ old('subtitle.en') }}" required>
                                    @error('subtitle.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="subtitle_ar">{{ __('Subtitle (Arabic)') }}<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="subtitle_ar" class="form-control" name="subtitle[ar]"
                                        placeholder="Enter Subtitle in Arabic" value="{{ old('subtitle.ar') }}" required>
                                    @error('subtitle.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="image">{{ __('Image') }}</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="image">{{ __('Choose New Image') }}</label>
                                            <input type="file" class="custom-file-input up-img form-control"
                                                name="image" id="image">
                                            <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <!-- Icon -->
                                <div class="col-md-6">
                                    <label for="icon">{{ __('Icon') }}</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="icon">{{ __('Choose New Icon') }}</label>
                                            <input type="file" class="custom-file-input up-img form-control"
                                                name="icon" id="icon">
                                            <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                            @error('icon')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Features Fields -->
                                <div class="col-md-12 mb-3">
                                    <label>{{ __('Features') }}</label>
                                    <div id="features-container"></div>
                                    <button type="button" class="btn btn-secondary mt-2" id="add-feature">Add
                                        Feature</button>
                                </div>

                                <!-- Description Fields -->
                                <div class="col-md-12 mb-3">
                                    <label for="description_en">{{ __('Description (English)') }}</label>
                                    <textarea id="description_en" class="form-control summernote" name="description[en]"
                                        placeholder="Enter Description in English" rows="6">{{ old('description.en') }}</textarea>
                                    @error('description.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="description_ar">{{ __('Description (Arabic)') }}</label>
                                    <textarea id="description_ar" class="form-control summernote" name="description[ar]"
                                        placeholder="Enter Description in Arabic" rows="6">{{ old('description.ar') }}</textarea>
                                    @error('description.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-sm btn-primary mt-2 float-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            let featureIndex = 0;

            function addFeatureRow(index) {
                $('#features-container').append(`
            <div class="row mb-3 feature-group border rounded p-2">
                <div class="col-md-4">
                    <input type="text" name="features[${index}][en]" class="form-control" placeholder="Title in English" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="features[${index}][ar]" class="form-control" placeholder="Title in Arabic" required>
                </div>
                <div class="col-md-2">
                    <input type="number" name="features[${index}][order]" class="form-control" placeholder="Order No" required>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" class="btn btn-danger btn-sm remove-feature">Remove</button>
                </div>
            </div>
        `);
            }

            // Add initial feature row on page load
            addFeatureRow(featureIndex);
            featureIndex++;

            // Add more feature rows
            $('#add-feature').click(function() {
                addFeatureRow(featureIndex);
                featureIndex++;
            });

            // Remove feature row
            $(document).on('click', '.remove-feature', function() {
                $(this).closest('.feature-group').remove();
            });
        });
    </script>
@endsection
