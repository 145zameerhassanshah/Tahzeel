@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Page Detail')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Why Choose Us Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
<form action="{{ route('admin.why-choose-us.update', $whyUs->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6">
            <label for="update_whyus_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="update_whyus_title_en" name="title[en]"
                value="{{ old('title.en', $whyUs->getTranslation('title', 'en')) }}">
            <span class="text-danger error" id="error_title_en"></span>
        </div>
        <div class="col-md-6">
            <label for="update_whyus_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="update_whyus_title_ar" name="title[ar]"
                value="{{ old('title.ar', $whyUs->getTranslation('title', 'ar')) }}">
            <span class="text-danger error" id="error_title_ar"></span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="update_whyus_subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="update_whyus_subtitle_en" name="subtitle[en]"
                value="{{ old('subtitle.en', $whyUs->getTranslation('subtitle', 'en')) }}">
            <span class="text-danger error" id="error_subtitle_en"></span>
        </div>

        <div class="col-md-6">
            <label for="update_whyus_subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="update_whyus_subtitle_ar" name="subtitle[ar]"
                value="{{ old('subtitle.ar', $whyUs->getTranslation('subtitle', 'ar')) }}">
            <span class="text-danger error" id="error_subtitle_ar"></span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="update_whyus_description_en">{{ __('Description (English)') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="update_whyus_description_en" name="description[en]"
                value="{{ old('description.en', $whyUs->getTranslation('description', 'en')) }}">
            <span class="text-danger error" id="error_description_en"></span>
        </div>

        <div class="col-md-6">
            <label for="update_whyus_description_ar">{{ __('Description (Arabic)') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="update_whyus_description_ar" name="description[ar]"
                value="{{ old('description.ar', $whyUs->getTranslation('description', 'ar')) }}">
            <span class="text-danger error" id="error_description_ar"></span>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <label for="update_whyus_status">{{ __('Status') }} <span class="text-danger">*</span></label>
            <select class="form-control" id="update_whyus_status" name="status">
                <option value="active" {{ old('status', $whyUs->status) == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                <option value="inactive" {{ old('status', $whyUs->status) == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="update_whyus_order_no">{{ __('Order No') }} <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="update_whyus_order_no" name="order_no"
                value="{{ old('order_no', $whyUs->order_no) }}">
            <span class="text-danger error" id="error_order_no"></span>
        </div>

        <div class="col-md-6 mt-3">
            <label for="update_whyus_icon">{{ __('Icon') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="update_whyus_icon" name="icon"
                value="{{ old('icon', $whyUs->icon) }}">
            <span class="text-danger error" id="error_icon"></span>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
        </div>
    </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

