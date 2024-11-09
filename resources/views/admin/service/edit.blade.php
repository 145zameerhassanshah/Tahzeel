@extends('admin.layouts.master')
@section('title', 'Edit Services')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Edit Service') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>
                                {{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Services') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-horizontal" action="{{ route('admin.service.update', $service->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="">{{ __('Edit Service') }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <!-- Service Category -->
                                            <div class="col-md-12 mb-3">
                                                <label for="service_category_id">{{ __('Service Category') }}<span
                                                        class="text-danger">*</span></label>
                                                <select name="service_category_id" id="service_category_id"
                                                    class="form-control">
                                                    <option value="" selected disabled>Select Category</option>
                                                    @foreach ($service_categories as $service_category)
                                                        <option value="{{ $service_category->id }}"
                                                            {{ $service->service_category_id == $service_category->id ? 'selected' : '' }}>
                                                            {{ $service_category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('service_category_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Name Fields -->
                                            <div class="col-md-6 mb-3">
                                                <label for="name_en">{{ __('Name (English)') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="name_en" class="form-control" name="name[en]"
                                                    placeholder="Enter Name in English"
                                                    value="{{ old('name.en', $service->getTranslations('name')['en']) }}"
                                                    required>
                                                @error('name.en')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="name_ar">{{ __('Name (Arabic)') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="name_ar" class="form-control" name="name[ar]"
                                                    placeholder="Enter Name in Arabic"
                                                    value="{{ old('name.ar', $service->getTranslations('name')['ar']) }}"
                                                    required>
                                                @error('name.ar')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Order Number -->
                                            <div class="col-md-6 mb-3">
                                                <label for="order_no">{{ __('Order No') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" id="order_no" class="form-control" name="order_no"
                                                    value="{{ old('order_no', $service->order_no) }}"
                                                    placeholder="Enter Order No">
                                                @error('order_no')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Status -->
                                            <div class="col-md-6 mb-3">
                                                <label for="status">{{ __('Status') }}<span
                                                        class="text-danger">*</span></label>
                                                <select id="status" name="status" class="form-control">
                                                    <option value="" selected disabled>Select Status</option>
                                                    <option value="publish"
                                                        {{ $service->status == 'publish' ? 'selected' : '' }}>Published
                                                    </option>
                                                    <option value="draft"
                                                        {{ $service->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                                </select>
                                                @error('status')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Description Fields -->
                                            <div class="col-md-12 mb-3">
                                                <label for="description_en">{{ __('Description (English)') }}<span
                                                        class="text-danger">*</span></label>
                                                <textarea id="description_en" class="form-control summernote" name="description[en]"
                                                    placeholder="Enter Description in English" rows="6" required>{{ old('description.en', $service->getTranslations('description')['en']) }}</textarea>
                                                @error('description.en')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="description_ar">{{ __('Description (Arabic)') }}<span
                                                        class="text-danger">*</span></label>
                                                <textarea id="description_ar" class="form-control summernote" name="description[ar]"
                                                    placeholder="Enter Description in Arabic" rows="6" required>{{ old('description.ar', $service->getTranslations('description')['ar']) }}</textarea>
                                                @error('description.ar')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Other Description Fields -->
                                            <div class="col-md-12 mb-3">
                                                <label
                                                    for="other_description_en">{{ __('Other Description (English)') }}</label>
                                                <textarea id="other_description_en" class="form-control summernote" name="other_description[en]"
                                                    placeholder="Enter Description in English" rows="6" required>{{ old('other_description.en', $service->getTranslations('other_description')['en']) }}</textarea>
                                                @error('other_description.en')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label
                                                    for="other_description_ar">{{ __('Other Description (Arabic)') }}</label>
                                                <textarea id="other_description_ar" class="form-control summernote" name="other_description[ar]"
                                                    placeholder="Enter Description in Arabic" rows="6" required>{{ old('other_description.ar', $service->getTranslations('other_description')['ar']) }}</textarea>
                                                @error('other_description.ar')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Banner Title -->
                                            <div class="col-md-6 mb-3">
                                                <label for="banner_title_en">{{ __('Banner Title (English)') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="banner_title_en" class="form-control"
                                                    name="banner_title[en]" placeholder="Enter Banner Title in English"
                                                    value="{{ old('banner_title.en', $service->getTranslations('banner_title')['en']) }}"
                                                    required>
                                                @error('banner_title.en')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="banner_title_ar">{{ __('Banner Title (Arabic)') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="banner_title_ar" class="form-control"
                                                    name="banner_title[ar]" placeholder="Enter Banner Title in Arabic"
                                                    value="{{ old('banner_title.ar', $service->getTranslations('banner_title')['ar']) }}"
                                                    required>
                                                @error('banner_title.ar')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Banner Title -->
                                            <div class="col-md-6 mb-3">
                                                <label for="banner_subtitle_en">{{ __('Banner Subtitle (English)') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="banner_subtitle_en" class="form-control"
                                                    name="banner_subtitle[en]" placeholder="Enter Banner Title in English"
                                                    value="{{ old('banner_subtitle.en', $service->getTranslations('banner_subtitle')['en']) }}"
                                                    required>
                                                @error('banner_subtitle.en')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="banner_subtitle_ar">{{ __('Banner Subtitle (Arabic)') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="banner_subtitle_ar" class="form-control"
                                                    name="banner_subtitle[ar]" placeholder="Enter Banner Title in Arabic"
                                                    value="{{ old('banner_subtitle.ar', $service->getTranslations('banner_subtitle')['ar']) }}"
                                                    required>
                                                @error('banner_subtitle.ar')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Icon -->
                                            <div class="col-md-6">
                                                <label for="icon">{{ __('Icon') }}<span
                                                        class="text-danger">*</span></label>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label class="custom-file-label"
                                                            for="icon">{{ __('Choose New Image') }}</label>
                                                        <input type="file"
                                                            class="custom-file-input up-img form-control" name="icon"
                                                            id="icon">
                                                        <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                            src="{{ asset($service->icon) }}"
                                                            alt="">
                                                        @error('icon')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Banner Image -->
                                            <div class="col-md-6">
                                                <label for="banner_image">{{ __('Banner Image') }}<span
                                                        class="text-danger">*</span></label>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label class="custom-file-label"
                                                            for="banner_image">{{ __('Choose New Image') }}</label>
                                                        <input type="file"
                                                            class="custom-file-input up-img form-control"
                                                            name="banner_image" id="banner_image">
                                                        <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                            src="{{ asset($service->banner_image) }}"
                                                            alt="">
                                                        @error('banner_image')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Features Fields -->
                                            <div class="col-md-12 mb-3">
                                                <label>{{ __('Features') }}</label>
                                                <div id="features-container">
                                                    <input type="hidden" name="removed_features" value=""
                                                        class="removed_features">
                                                    @foreach ($service->serviceFeatures as $feature)
                                                        <div class="row mb-3 feature-group">
                                                            <div class="col-md-5">
                                                                <input type="text" name="added_features[{{ $feature->id }}][en]"
                                                                    class="form-control"
                                                                    value="{{ $feature->getTranslations('name')['en'] }}"
                                                                    placeholder="Feature in English" required>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="added_features[{{ $feature->id }}][ar]"
                                                                    class="form-control"
                                                                    value="{{ $feature->getTranslations('name')['ar'] }}"
                                                                    placeholder="Feature in Arabic" required>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="button"
                                                                    class="btn btn-danger btn-sm remove-feature"
                                                                    data-id="{{ $feature->id }}">Remove</button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <button type="button" class="btn btn-secondary mt-2"
                                                    id="add-feature">Add Feature</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="">{{ __('SEO') }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-12 mb-3">
                                                <label for="meta_title"
                                                    class="col-sm-12 control-label">{{ __('Meta Title') }}</label>
                                                <input type="text" id="tags_input" class="form-control"
                                                    data-role="tagsinput" name="meta_title"
                                                    placeholder="Enter Meta Title"
                                                    value="{{ old('meta_title', $service->meta_title) }}">
                                                @error('meta_title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="meta_keywords"
                                                    class="col-sm-12 control-label">{{ __('Meta Keywords') }}</label>
                                                <input type="text" id="tags_input" data-role="tagsinput"
                                                    class="form-control" name="meta_keywords"
                                                    placeholder="Enter Meta Keywords"
                                                    value="{{ old('meta_keywords', $service->meta_keywords) }}">
                                                @error('meta_keywords')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="meta_description"
                                                    class="col-sm-12 control-label">{{ __('Meta Description') }}</label>
                                                <textarea id="meta_description" class="form-control" name="meta_description" placeholder="Enter Meta Description"
                                                    rows="4">{{ old('meta_description', $service->meta_description) }}</textarea>
                                                @error('meta_description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Banner Image -->
                                            <div class="col-md-12">
                                                <label for="meta_image">{{ __('Meta Image') }}</label>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label class="custom-file-label"
                                                            for="meta_image">{{ __('Choose New Image') }}</label>
                                                        <input type="file"
                                                            class="custom-file-input up-img form-control"
                                                            name="meta_image" id="meta_image">
                                                        <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                            src="{{ asset($service->meta_image) }}"
                                                            alt="">
                                                        @error('meta_image')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-success btn-lg"
                                                style="border-radius: 10px;">{{ __('Update Service') }}</button>
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
                        <div class="col-md-5">
                            <input type="text" name="features[${featureIndex}][en]" class="form-control" placeholder="Feature in English" required>
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="features[${featureIndex}][ar]" class="form-control" placeholder="Feature in Arabic" required>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger btn-sm remove-feature">Remove</button>
                        </div>
                    </div>
                `);
                featureIndex++;
            });

            $(document).on('click', '.remove-feature', function() {

                $(this).closest('.feature-group').remove();

                var featureId = $(this).data('id');
                var deleteFeatureField = $('.removed_features');

                if (deleteFeatureField.val() === '') {
                    deleteFeatureField.val(featureId);
                } else {
                    console.log(deleteFeatureField.val());
                    deleteFeatureField.val(deleteFeatureField.val() + ',' + featureId);
                }
                console.log(deleteFeatureField.val());


            });
        });
    </script>
@endsection
