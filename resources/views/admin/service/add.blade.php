@extends('admin.layouts.master')
@section('title', 'Add Services')
@section('content')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Add New Services') }} </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Services') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-horizontal" action="{{ route('admin.service.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title mt-1">{{ __('Add Service') }}</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-12 mb-2">
                                                <label for="service_category_id"
                                                    class="control-label">{{ __('Service Category') }}<span
                                                        class="text-danger">*</span></label>
                                                <select id="service_category_id" name="service_category_id"
                                                    class="form-control">
                                                    <option value="" disabled selected>Select Service Category
                                                    </option>
                                                    @foreach ($service_categories as $service_category)
                                                        <option value="{{ $service_category->id }}">
                                                            {{ $service_category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('service_category_id'))
                                                    <p class="text-danger"> {{ $errors->first('service_category_id') }}
                                                    </p>
                                                @endif
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="name" class="control-label">{{ __('Name') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="name" class="form-control" name="name"
                                                    value="{{ old('name') }}" placeholder="{{ __('Enter Name') }}">
                                                @if ($errors->has('name'))
                                                    <p class="text-danger"> {{ $errors->first('name') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <label for="banner_title"
                                                    class="control-label">{{ __('Banner Title') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="banner_title" class="form-control"
                                                    name="banner_title" value="{{ old('banner_title') }}"
                                                    placeholder="{{ __('Enter Banner Title') }}">
                                                @if ($errors->has('banner_title'))
                                                    <p class="text-danger"> {{ $errors->first('banner_title') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <label for="banner_subtitle"
                                                    class="control-label">{{ __('Banner Subtitle') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="banner_subtitle" class="form-control"
                                                    name="banner_subtitle" value="{{ old('banner_subtitle') }}"
                                                    placeholder="{{ __('Enter Banner Subtitle') }}">
                                                @if ($errors->has('banner_subtitle'))
                                                    <p class="text-danger"> {{ $errors->first('banner_subtitle') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="description" class="control-label">{{ __('Description') }}<span
                                                        class="text-danger">*</span></label>
                                                <textarea type="text" rows="6" id="description" class="form-control" name="description"
                                                    placeholder="{{ __('Enter Description') }}">{{ old('description') }}</textarea>
                                                @if ($errors->has('description'))
                                                    <p class="text-danger"> {{ $errors->first('description') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="other_description"
                                                    class="control-label">{{ __('Other Description') }}</label>
                                                <textarea type="text" rows="6" id="other_description" class="form-control" name="other_description"
                                                    placeholder="{{ __('Other Description') }}">{{ old('other_description') }}</textarea>
                                                @if ($errors->has('other_description'))
                                                    <p class="text-danger"> {{ $errors->first('other_description') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-12">
                                                <label for="icon" class="control-label">{{ __('Icon') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-sm-12">
                                                    <img class="mw-400 mb-3 show-img img-demo"
                                                        src="{{ asset('assets/uploads/course-category/') }}"
                                                        alt="">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label"
                                                            for="icon">{{ __('Choose New Image') }}</label>
                                                        <input type="file" class="custom-file-input up-img" name="icon"
                                                            id="icon">
                                                    </div>
                                                    <p class="help-block text-info">
                                                        {{ __('Upload 150x150 (Pixel) Size icon for best quality. Only jpg, jpeg, png image is allowed.') }}
                                                    </p>
                                                    @if ($errors->has('icon'))
                                                        <p class="text-danger"> {{ $errors->first('icon') }} </p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="banner_image" class="control-label">{{ __('Banner Image') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-sm-12">
                                                    <img class="mw-400 mb-3 show-img img-demo"
                                                        src="{{ asset('assets/uploads/course-category/') }}"
                                                        alt="">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label"
                                                            for="banner_image">{{ __('Choose New Image') }}</label>
                                                        <input type="file" class="custom-file-input up-img" name="banner_image"
                                                            id="banner_image">
                                                    </div>
                                                    <p class="help-block text-info">
                                                        {{ __('Upload 2202x886 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}
                                                    </p>
                                                    @if ($errors->has('banner_image'))
                                                        <p class="text-danger"> {{ $errors->first('banner_image') }} </p>
                                                    @endif
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <label for="fname" class="control-label">{{ __('Feature Name') }}<span
                                                        class="text-danger">*</span></label>

                                                <div id="feature-names-container">
                                                    <div class="input-group mb-2 feature-input">
                                                        <input type="text" id="fname" class="form-control"
                                                            name="feature_names[]" placeholder="{{ __('Enter name') }}">
                                                        <div class="input-group-append">
                                                            <button type="button"
                                                                class="btn btn-success add-feature">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <button type="submit"
                                                class="btn btn-primary btn btn-sm">{{ __('Add') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title mt-1">{{ __('Add Service') }}</h3>
                                        <div class="card-tools">
                                            <a href="{{ route('admin.service.index') }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-12 mb-2">
                                                <label for="order_no" class="control-label">{{ __('Order No') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" id="order_no" class="form-control"
                                                    name="order_no" value="{{ old('order_no') }}"
                                                    placeholder="{{ __('Enter Order No') }}">
                                                @if ($errors->has('order_no'))
                                                    <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="status" class="control-label">{{ __('Status') }}<span
                                                        class="text-danger">*</span></label>
                                                <select id="status" name="status" class="form-control">
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="publish">Published</option>
                                                    <option value="draft">Draft</option>
                                                </select>
                                                @if ($errors->has('status'))
                                                    <p class="text-danger"> {{ $errors->first('status') }} </p>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title mt-1">{{ __('Meta Data') }}</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-12 mb-2">
                                                <label for="meta_title" class="control-label">{{ __('Meta Title') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="meta_title" class="form-control"
                                                    name="meta_title" value="{{ old('meta_title') }}"
                                                    placeholder="{{ __('Enter Meta Title') }}">
                                                @if ($errors->has('meta_title'))
                                                    <p class="text-danger"> {{ $errors->first('meta_title') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="meta_keywords"
                                                    class="control-label">{{ __('Meta Keywords') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="meta_keywords" class="form-control" id="meta-keywords-input"
                                                    name="meta_keywords" value="{{ old('meta_keywords') }}"
                                                    placeholder="{{ __('Enter Meta Keywords') }}">
                                                @if ($errors->has('meta_keywords'))
                                                    <p class="text-danger"> {{ $errors->first('meta_keywords') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="meta_description"
                                                    class="control-label">{{ __('Meta Description') }}</label>
                                                <textarea type="text" rows="6" id="meta_description" class="form-control" name="meta_description"
                                                    placeholder="{{ __('Meta Description') }}">{{ old('meta_description') }}</textarea>
                                                @if ($errors->has('meta_description'))
                                                    <p class="text-danger"> {{ $errors->first('meta_description') }} </p>
                                                @endif
                                            </div>

                                            <div class="col-md-12">
                                                <label for="meta_image" class="control-label">{{ __('Meta Image') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-sm-12">
                                                    <img class="mw-400 mb-3 show-img img-demo"
                                                        src="{{ asset('assets/uploads/course-category/') }}"
                                                        alt="">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label"
                                                            for="meta_image">{{ __('Choose New Image') }}</label>
                                                        <input type="file" class="custom-file-input up-img" name="meta_image"
                                                            id="meta_image">
                                                    </div>
                                                    <p class="help-block text-info">
                                                        {{ __('Upload best quality. Only jpg, jpeg, png image is allowed.') }}
                                                    </p>
                                                    @if ($errors->has('meta_image'))
                                                        <p class="text-danger"> {{ $errors->first('meta_image') }} </p>
                                                    @endif
                                                </div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to add a new input field with Add and Remove buttons
            function addFeatureInput() {
                let newInput = `
                <div class="input-group mb-2 feature-input">
                    <input type="text" class="form-control" name="feature_names[]" placeholder="{{ __('Enter name') }}">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-success add-feature">Add</button>
                        <button type="button" class="btn btn-danger remove-feature">Delete</button>
                    </div>
                </div>
            `;
                $('#feature-names-container').append(newInput);
            }

            // Event listener for adding a new feature input
            $(document).on('click', '.add-feature', function() {
                addFeatureInput();
            });

            // Event listener for removing a feature input
            $(document).on('click', '.remove-feature', function() {
                $(this).closest('.feature-input').remove();
            });
        });
    </script>

@endsection
