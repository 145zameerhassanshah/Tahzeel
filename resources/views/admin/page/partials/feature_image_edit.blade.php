@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Edit Feature Image')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">

            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Feature Image Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.feature_image.update', $feature_image->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_featureimg_title_en">{{ __('Title (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_featureimg_title_en"
                                        name="title[en]"
                                        value="{{ old('title.en', $feature_image->getTranslation('title', 'en')) }}">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="update_featureimg_title_ar">{{ __('Title (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_featureimg_title_ar"
                                        name="title[ar]"
                                        value="{{ old('title.ar', $feature_image->getTranslation('title', 'ar')) }}">
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="update_featureimg_subtitle_en">{{ __('SubTitle (English)') }} </label>
                                    <input type="text" class="form-control" id="update_featureimg_subtitle_en"
                                        name="subtitle[en]"
                                        value="{{ old('subtitle.en', $feature_image->getTranslation('subtitle', 'en')) }}">
                                    @error('subtitle.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="update_featureimg_subtitle_ar">{{ __('SubTitle (Arabic)') }} </label>
                                    <input type="text" class="form-control" id="update_featureimg_subtitle_ar"
                                        name="subtitle[ar]"
                                        value="{{ old('subtitle.ar', $feature_image->getTranslation('subtitle', 'ar')) }}">
                                    @error('subtitle.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="update_featureimg_description_en">{{ __('Description (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_featureimg_description_en"
                                        name="description[en]"
                                        value="{{ old('description.en', $feature_image->getTranslation('description', 'en')) }}">
                                    @error('description.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="update_featureimg_description_ar">{{ __('Description (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_featureimg_description_ar"
                                        name="description[ar]"
                                        value="{{ old('description.ar', $feature_image->getTranslation('description', 'ar')) }}">
                                    @error('description.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="update_featureimg_status">{{ __('Status') }} <span
                                            class="text-danger">*</span></label>
                                    <select required class="form-control" id="update_featureimg_status" name="status">
                                        <option value="active" {{ old('status', $feature_image->status) == 'active' ? 'selected' : '' }}>
                                            {{ __('Active') }}</option>
                                        <option value="inactive" {{ old('status', $feature_image->status) == 'inactive' ? 'selected' : '' }}>
                                            {{ __('Inactive') }}</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="update_featureimg_order_no">{{ __('Order No') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_featureimg_order_no"
                                        name="order_no"
                                        value="{{ old('order_no', $feature_image->order_no) }}">
                                    @error('order_no')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Image Upload -->
                                <div class="col-md-4">
                                    <label for="image">{{ __('Image') }}</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="image">{{ __('Choose New Image') }}</label>
                                            <input type="file" class="custom-file-input up-img form-control"
                                                name="image" id="image">
                                            @if ($feature_image->image)
                                                <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                    src="{{ asset('assets/admin/uploads/feature_image/' . $feature_image->image) }}" alt="Current Image"
                                                    width="50px">
                                            @else
                                                <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                    src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="" width="50px">
                                            @endif
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-sm float-right"
                                        type="submit">{{ __('Submit') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
