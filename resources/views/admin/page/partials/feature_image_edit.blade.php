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
                        <h3 class="card-title mt-1">{{ __('Feature Image Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.feature_image.update', $feature_image->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_featureimg_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_featureimg_title_en"
                                           name="title[en]" value="{{ $feature_image->getTranslation('title', 'en') }}">
                                    <span class="text-danger error" id="error_title_en"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="update_featureimg_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_featureimg_title_ar"
                                           name="title[ar]" value="{{ $feature_image->getTranslation('title', 'ar') }}">
                                    <span class="text-danger error" id="error_title_ar"></span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="update_featureimg_subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_featureimg_subtitle_en"
                                           name="subtitle[en]" value="{{ $feature_image->getTranslation('subtitle', 'en') }}">
                                    <span class="text-danger error" id="error_subtitle_en"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="update_featureimg_subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_featureimg_subtitle_ar"
                                           name="subtitle[ar]" value="{{ $feature_image->getTranslation('subtitle', 'ar') }}">
                                    <span class="text-danger error" id="error_subtitle_ar"></span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="update_featureimg_description_en">{{ __('Description (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_featureimg_description_en"
                                           name="description[en]" value="{{ $feature_image->getTranslation('description', 'en') }}">
                                    <span class="text-danger error" id="error_description_en"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="update_featureimg_description_ar">{{ __('Description (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_featureimg_description_ar"
                                           name="description[ar]" value="{{ $feature_image->getTranslation('description', 'ar') }}">
                                    <span class="text-danger error" id="error_description_ar"></span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="update_featureimg_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select class="form-control" id="update_featureimg_status" name="status">
                                        <option value="active" {{ $feature_image->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        <option value="inactive" {{ $feature_image->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="update_featureimg_order_no">{{ __('Order No') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_featureimg_order_no"
                                           name="order_no" value="{{ $feature_image->order_no }}">
                                    <span class="text-danger error" id="error_order_no"></span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="update_image">{{ __('Image') }}</label>
                                    <input type="file" class="form-control" id="update_image" name="image" accept="image/*">
                                    <span class="text-danger error" id="error_image"></span>

                                    @if($feature_image->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('uploads/feature_images/' . $feature_image->image) }}" alt="Current Image" height="100">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-sm float-right" type="submit">{{ __('Submit') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
