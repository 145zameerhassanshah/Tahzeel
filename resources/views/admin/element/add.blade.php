@extends('admin.layouts.master')
@section('title', 'Add New Element')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{ route('admin.element.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-0">{{ $page->title }} - Add New Element</h5>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.element.index', $page->id) }}" class="btn btn-primary btn-sm">
                                            {{ __('Element List') }}
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">

                                        <input type="hidden" name="page_id" value="{{ $page->id }}">

                                        <!-- Title Fields -->
                                        <div class="col-md-6 mb-3">
                                            <label for="title_en">{{ __('Title (English)') }}<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="title_en" class="form-control" name="title[en]"
                                                placeholder="Enter Title in English" value="{{ old('title.en') }}"
                                                required>
                                            @error('title.en')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="title_ar">{{ __('Title (Arabic)') }}<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="title_ar" class="form-control" name="title[ar]"
                                                placeholder="Enter Title in Arabic" value="{{ old('title.ar') }}"
                                                required>
                                            @error('title.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- SubTitle Fields -->
                                        <div class="col-md-6 mb-3">
                                            <label for="subtitle_en">{{ __('Subtitle (English)') }}<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="subtitle_en" class="form-control"
                                                name="subtitle[en]" placeholder="Enter Subtitle in English"
                                                value="{{ old('subtitle.en') }}" required>
                                            @error('subtitle.en')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="subtitle_ar">{{ __('Subtitle (Arabic)') }}<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="subtitle_ar" class="form-control"
                                                name="subtitle[ar]" placeholder="Enter Subtitle in Arabic"
                                                value="{{ old('subtitle.ar') }}" required>
                                            @error('subtitle.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <!-- image -->
                                        <div class="col-md-6">
                                            <label for="image">{{ __('Image') }}</label>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="custom-file-label"
                                                        for="image">{{ __('Choose New Image') }}</label>
                                                    <input type="file"
                                                        class="custom-file-input up-img form-control" name="image"
                                                        id="image">
                                                    <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                        src="{{ asset('assets/admin/img/img-demo.jpg') }}"
                                                        alt="">
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
                                                    <input type="file"
                                                        class="custom-file-input up-img form-control" name="icon"
                                                        id="icon">
                                                    <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                        src="{{ asset('assets/admin/img/img-demo.jpg') }}"
                                                        alt="">
                                                    @error('icon')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Features Fields -->
                                        <div class="col-md-12 mb-3">
                                            <label>{{ __('Features') }}</label>
                                            <div id="features-container">
                                                <div class="feature-group mb-3">
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <input type="text" name="features[${featureIndex}][en]" class="form-control" placeholder="Title in English" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" name="features[${featureIndex}][ar]" class="form-control" placeholder="Title in Arabic" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="number" name="features[${featureIndex}][order]" class="form-control" placeholder="Order No" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="text" name="features[${featureIndex}][description_en]" class="form-control" placeholder="Description Title in English">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" name="features[${featureIndex}][description_ar]" class="form-control" placeholder="Description Title in Arabic">
                                                        </div>
                                                        <div class="col-md-4 d-flex align-items-end">
                                                            <button type="button" class="btn btn-danger btn-sm remove-feature">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary mt-2"
                                                id="add-feature">Add Feature</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Description Fields -->
                        <div class="col-md-12 mb-3">
                            <label for="description_en">{{ __('Description (English)') }}<span
                                    class="text-danger">*</span></label>
                            <textarea id="description_en" class="form-control summernote" name="description[en]"
                                placeholder="Enter Description in English" rows="6" required>{{ old('description.en') }}</textarea>
                            @error('description.en')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description_ar">{{ __('Description (Arabic)') }}<span
                                    class="text-danger">*</span></label>
                            <textarea id="description_ar" class="form-control summernote" name="description[ar]"
                                placeholder="Enter Description in Arabic" rows="6" required>{{ old('description.ar') }}</textarea>
                            @error('description.ar')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>



                    </div>
            </div>
            <div class="card-footer">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg"
                        style="border-radius: 10px;">{{ __('Add Element') }}</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
</section>

@endsection
@section('js')
<script>
    $(document).ready(function() {
        let featureIndex = 0;

        $('#add-feature').click(function() {
            $('#features-container').append(`
                    <div class="row mb-3 feature-group">
                        <div class="col-md-4">
                            <input type="text" name="features[${featureIndex}][en]" class="form-control" placeholder="Title in English" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="features[${featureIndex}][ar]" class="form-control" placeholder="Title in Arabic" required>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="features[${featureIndex}][order]" class="form-control" placeholder="Order No" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="features[${featureIndex}][en]" class="form-control" placeholder="Description in English" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="features[${featureIndex}][ar]" class="form-control" placeholder="Description in Arabic" required>
                        </div>

                        <div class="col-md-4">
                            <button type="button" class="btn btn-danger btn-sm remove-feature">Remove</button>
                        </div>
                    </div>
                `);
            featureIndex++;
        });

        $(document).on('click', '.remove-feature', function() {
            $(this).closest('.feature-group').remove();
        });
    });
</script>
@endsection