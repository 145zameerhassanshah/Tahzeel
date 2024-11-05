@extends('admin.layouts.master')
@section('title', 'Add Services')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Add New Service') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>
                                {{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Services') }}</li>
                    </ol>
                </div>
            </div>
        </div>
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
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.service.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <!-- Service Category -->
                                <div class="form-group row">
                                    <label for="service_category_id"
                                        class="col-sm-12 control-label">{{ __('Service Category') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select id="service_category_id" name="service_category_id" class="form-control"
                                            required>
                                            <option value="" disabled selected>Select Service Category</option>
                                            @foreach ($service_categories as $service_category)
                                                <option value="{{ $service_category->id }}">{{ $service_category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('service_category_id')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Name Fields -->
                                <div class="form-group row">
                                    <label class="col-sm-12 control-label">{{ __('Name') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" id="name_en" class="form-control" name="name[en]"
                                            placeholder="Enter Name in English" value="{{ old('name.en') }}" required>
                                        @error('name.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="name_ar" class="form-control" name="name[ar]"
                                            placeholder="Enter Name in Arabic" value="{{ old('name.ar') }}" required>
                                        @error('name.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Slug -->
                                <div class="form-group row">
                                    <label for="slug" class="col-sm-12 control-label">{{ __('Slug') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" id="slug" class="form-control" name="slug"
                                            placeholder="Enter Slug" value="{{ old('slug') }}" required>
                                        @error('slug')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
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
                                <!-- Description Fields -->
                                <div class="form-group row">
                                    <label class="col-sm-12 control-label">{{ __('Description') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                        <textarea id="description_en" class="form-control" name="description[en]" placeholder="Enter Description in English"
                                            rows="6" required>{{ old('description.en') }}</textarea>
                                        @error('description.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea id="description_ar" class="form-control" name="description[ar]" placeholder="Enter Description in Arabic"
                                            rows="6" required>{{ old('description.ar') }}</textarea>
                                        @error('description.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 control-label">{{ __('Other Description') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                        <textarea id="description_en" class="form-control" name="other_description[en]"
                                            placeholder="Enter Description in English" rows="6" required>{{ old('description.en') }}</textarea>
                                        @error('other_description.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea id="description_ar" class="form-control" name="other_description[ar]"
                                            placeholder="Enter Description in Arabic" rows="6" required>{{ old('description.ar') }}</textarea>
                                        @error('other_description.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
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
                                            @error('icon')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 control-label">{{ __('Banner Title') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" id="name_en" class="form-control" name="banner_title[en]"
                                            placeholder="Enter Banner Title in English" value="{{ old('banner_title.en') }}" required>
                                        @error('banner_title.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="name_ar" class="form-control" name="banner_title[ar]"
                                            placeholder="Enter Banner Title in Arabic" value="{{ old('banner_title.ar') }}" required>
                                        @error('banner_title.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 control-label">{{ __('Banner Sub Title') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" id="name_en" class="form-control" name="banner_subtitle[en]"
                                            placeholder="Enter Banner Title in English" value="{{ old('banner_subtitle.en') }}" required>
                                        @error('banner_subtitle.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="name_ar" class="form-control" name="banner_subtitle[ar]"
                                            placeholder="Enter Banner Title in Arabic" value="{{ old('banner_subtitle.ar') }}" required>
                                        @error('banner_subtitle.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
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
                                            @error('banner_image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Features Fields -->
                                <div class="form-group">
                                    <label class="control-label">{{ __('Features') }}<span
                                            class="text-danger">*</span></label>
                                    <div id="features-container"></div>
                                    <button type="button" class="btn btn-secondary mt-2" id="add-feature">Add
                                        Feature</button>
                                    @error('features.*.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    @error('features.*.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            let featureIndex = {{ count(old('features', [0])) }};

            $('#add-feature').click(function() {
                addFeatureField(featureIndex);
                featureIndex++;
            });

            @if (old('features'))
                @foreach (old('features') as $index => $feature)
                    addFeatureField({{ $index }}, '{{ $feature['en'] ?? '' }}',
                        '{{ $feature['ar'] ?? '' }}');
                @endforeach
            @else
                addFeatureField(0);
            @endif

            function addFeatureField(index, enValue = '', arValue = '') {
                $('#features-container').append(`
                <div class="feature-group row mt-2">
                    <div class="col-sm-5">
                        <input type="text" name="features[${index}][en]" class="form-control" placeholder="Feature in English" value="${enValue}" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="features[${index}][ar]" class="form-control" placeholder="Feature in Arabic" value="${arValue}" required>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-danger btn-sm remove-feature">Remove</button>
                    </div>
                </div>
                `);
            }

            $(document).on('click', '.remove-feature', function() {
                $(this).closest('.feature-group').remove();
            });
        });
    </script>
@endsection
