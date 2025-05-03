@extends('admin.layouts.master')
@section('title', 'Add Elements')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Add New Element') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Elements') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

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
                                <div class="card-header">
                                    <h3 class="">{{ __('Add Element') }}</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Element Name -->
                                        <div class="col-md-4">
                                            <label for="element_name">Element Name<span class="text-danger">*</span></label>
                                            <input type="text" id="element_name" class="form-control" name="element_name" placeholder="Element Name" value="{{ old('element_name') }}" required>
                                            @error('element_name')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <!-- Icon -->
                                        <div class="col-md-4">
                                            <label for="icon">{{ __('Icon') }}<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="custom-file-label" for="icon">{{ __('Choose New Image') }}</label>
                                                    <input type="file" class="custom-file-input up-img form-control" name="icon" id="icon">
                                                    <img class="mw-400 mb-3 show-img img-demo mt-2" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                                    @error('icon')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="col-md-4">
                                            <label for="image">{{ __('Image') }}<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="custom-file-label" for="image">{{ __('Choose New Image') }}</label>
                                                    <input type="file" class="custom-file-input up-img form-control" name="image" id="image">
                                                    <img class="mw-400 mb-3 show-img img-demo mt-2" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                                    @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Title Subtitle Description Fields -->
                                        <div class="col-md-12 mb-3">
                                            <div id="title_subtitle_desc_container">
                                                <div class="col-md-12 mb-3">
                                                    <!-- <label>Title Subtitle Description</label> -->
                                                    <div id="features-container">
                                                        <div class="row mb-3 feature-group">
                                                            <div class="col-md-5">
                                                                <input type="text" name="title[${titleIndex}][en]" class="form-control" placeholder="Title in English" required>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="title[${titleIndex}][ar]" class="form-control" placeholder="Title in Arabic" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3 feature-group">
                                                            <div class="col-md-5">
                                                                <input type="text" name="subtitle[${subtitleIndex}][en]" class="form-control" placeholder="Subtitle in English" required>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="subtitle[${subtitleIndex}][ar]" class="form-control" placeholder="Subtitle in Arabic" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3 feature-group">
                                                            <div class="col-md-5">
                                                                <input type="text" name="description[${descriptionIndex}][en]" class="form-control" placeholder="Description in English" required>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="description[${descriptionIndex}][ar]" class="form-control" placeholder="Description in Arabic" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary mt-2" id="add_title_subtitle_desc">Add Tilte Subilte Description</button>
                                            <button type="submit" class="btn btn-secondary mt-5">Save</button>
                                        </div>
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
        let titleIndex = 0;
        let subtitleIndex = 0;
        let descriptionIndex = 0;
        // Function to add Title Subtitle Description row
        $('#add_title_subtitle_desc').click(function() {
            const featureRowHTML = `
                <div class="row mb-3 feature-group">
                    <div class="col-md-5">
                        <input type="text" name="title[${titleIndex}][en]" class="form-control" placeholder="Title in English" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="title[${titleIndex}][ar]" class="form-control" placeholder="Title in Arabic" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm remove_feature_group">Remove</button>
                    </div>
                </div>

                <div class="row mb-3 feature-group">
                    <div class="col-md-5">
                        <input type="text" name="subtitle[${subtitleIndex}][en]" class="form-control" placeholder="Subtitle in English" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="subtitle[${subtitleIndex}][ar]" class="form-control" placeholder="Subtitle in Arabic" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm remove_feature_group">Remove</button>
                    </div>
                </div>

                <div class="row mb-3 feature-group">
                    <div class="col-md-5">
                        <input type="text" name="description[${descriptionIndex}][en]" class="form-control" placeholder="Description in English" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="description[${descriptionIndex}][ar]" class="form-control" placeholder="Description in Arabic" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm remove_feature_group">Remove</button>
                    </div>
                </div>`;
            // Append the new feature row to the container
            $('#title_subtitle_desc_container').append(featureRowHTML);
            // Increment the indices after adding the new rows
            titleIndex++;
            subtitleIndex++;
            descriptionIndex++;
        });
        // Event listener for removing a feature-group row
        $(document).on('click', '.remove_feature_group', function() {
            $(this).closest('.feature-group').remove();
        });
    });
</script>
@endsection