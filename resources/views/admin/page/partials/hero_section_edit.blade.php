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
                        <h3 class="card-title mt-1">{{ __('Hero Section Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.hero_section.update', $hero_section->id) }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_title_en" name="title[en]" value="{{ $hero_section->getTranslation('title', 'en') }}">
                                    <span class="text-danger error" id="error_title_en"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="update_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_title_ar" name="title[ar]" value="{{ $hero_section->getTranslation('title', 'ar') }}">
                                    <span class="text-danger error" id="error_title_ar"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_subtitle_en" name="subtitle[en]" value="{{ $hero_section->getTranslation('subtitle', 'en') }}">
                                    <span class="text-danger error" id="error_subtitle_en"></span>
                                </div>
    
                                <div class="col-md-6">
                                    <label for="update_subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_subtitle_ar" name="subtitle[ar]" value="{{ $hero_section->getTranslation('subtitle', 'ar') }}">
                                    <span class="text-danger error" id="error_subtitle_ar"></span>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_description">{{ __('Description (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_description_en" name="description[en]" value="{{ $hero_section->getTranslation('description', 'en') }}">
                                    <span class="text-danger error" id="error_description_en"></span>
                                </div>
    
                                <div class="col-md-6">
                                    <label for="update_description">{{ __('Description (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_description_ar" name="description[ar]" value="{{ $hero_section->getTranslation('description', 'ar') }}">
                                    <span class="text-danger error" id="error_description_ar"></span>
                                </div>
                            </div>
    
                            <div class="row mt-3">
    
                                <div class="col-md-6">
                                    <label for="update_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select class="form-control" id="update_status" name="status">
                                        <option value="active" {{ $hero_section->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        <option value="inactive" {{ $hero_section->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="update_background_image">{{ __('Image') }}</label>
                                        <input type="file" class="form-control" id="update_background_image" name="background_image" accept="background_image/*">
                                        <span class="text-danger error" id="error_background_image"></span>
                                    </div>
                                    <img src="" alt="">
                                </div>
    
                            </div>
                            <div class="row">

                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-sm float-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
