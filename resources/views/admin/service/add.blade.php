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
                            <form class="form-horizontal" action="{{ route('admin.service.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="service_category_id"
                                        class="col-sm-12 control-label">{{ __('Service Category') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select id="service_category_id" name="service_category_id" class="form-control">
                                            <option value="" disabled selected>Select Service Category</option>
                                            @foreach ($service_categories as $service_category)
                                                <option value="{{ $service_category->id }}">{{ $service_category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('service_category_id'))
                                            <p class="text-danger"> {{ $errors->first('service_category_id') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-12 control-label">{{ __('Name') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" id="name" class="form-control" name="name"
                                            value="{{ old('name') }}" placeholder="{{ __('Enter Name') }}">
                                        @if ($errors->has('name'))
                                            <p class="text-danger"> {{ $errors->first('name') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="slug" class="col-sm-12 control-label">{{ __('Slug') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" id="slug" class="form-control" name="slug"
                                            value="{{ old('slug') }}" placeholder="{{ __('Enter Slug') }}">
                                        @if ($errors->has('slug'))
                                            <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="order_no" class="col-sm-12 control-label">{{ __('Order No') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="number" id="order_no" class="form-control" name="order_no"
                                            value="{{ old('order_no') }}" placeholder="{{ __('Enter Order No') }}">
                                        @if ($errors->has('order_no'))
                                            <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-12 control-label">{{ __('Status') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
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

                                <div class="form-group row">
                                    <label for="banner_title" class="col-sm-12 control-label">{{ __('Banner Title') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" id="banner_title" class="form-control" name="banner_title"
                                            value="{{ old('banner_title') }}"
                                            placeholder="{{ __('Enter Banner Title') }}">
                                        @if ($errors->has('banner_title'))
                                            <p class="text-danger"> {{ $errors->first('banner_title') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="banner_subtitle"
                                        class="col-sm-12 control-label">{{ __('Banner Subtitle') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" id="banner_subtitle" class="form-control"
                                            name="banner_subtitle" value="{{ old('banner_subtitle') }}"
                                            placeholder="{{ __('Enter Banner Subtitle') }}">
                                        @if ($errors->has('banner_subtitle'))
                                            <p class="text-danger"> {{ $errors->first('banner_subtitle') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-sm-12 control-label">{{ __('Description') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <textarea type="text" rows="6" id="description" class="form-control" name="description"
                                            placeholder="{{ __('Enter Description') }}">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <p class="text-danger"> {{ $errors->first('description') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="other_description"
                                        class="col-sm-12 control-label">{{ __('Other Description') }}</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" rows="6" id="other_description" class="form-control" name="other_description"
                                            placeholder="{{ __('Other Description') }}">{{ old('description') }}</textarea>
                                        @if ($errors->has('other_description'))
                                            <p class="text-danger"> {{ $errors->first('other_description') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <label for="icon">{{ __('Icon') }}</label>
                                    <div class="form-group">

                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="icon">{{ __('Choose New Image') }}</label>

                                            <input type="file" class="custom-file-input up-img form-control"
                                                name="icon" id="icon">

                                            <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">

                                            @if ($errors->has('icon'))
                                                <p class="text-danger"> {{ $errors->first('icon') }} </p>
                                            @endif

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <label for="banner_image">{{ __('Banner Image') }}</label>
                                    <div class="form-group">

                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="banner_image">{{ __('Choose New Image') }}</label>

                                            <input type="file" class="custom-file-input up-img form-control"
                                                name="banner_image" id="banner_image">

                                            <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">

                                            @if ($errors->has('banner_image'))
                                                <p class="text-danger"> {{ $errors->first('banner_image') }} </p>
                                            @endif

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-12 control-label">{{ __('Feature Name') }}<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        
                                        <div id="feature-names-container">
                                            <div class="input-group mb-2 feature-input">
                                                <input type="text" id="fname" class="form-control" name="feature_names[]" placeholder="{{ __('Enter name') }}">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-success add-feature">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <button type="submit"
                                            class="btn btn-primary btn btn-sm">{{ __('Add') }}</button>
                                    </div>
                                </div>
                        </div>

                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        </div>
        <!-- /.row -->

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