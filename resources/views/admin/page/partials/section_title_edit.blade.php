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
                        <h3 class="card-title mt-1">{{ __('Section Title Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.section_title.update', $section_title->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="section_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="section_title_en" name="section_title[en]" value="{{ $section_title->getTranslation('title', 'en') }}">
                                    <span class="text-danger error" id="error_section_title_en"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="section_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="section_title_ar" name="section_title[ar]" value="{{ $section_title->getTranslation('title', 'ar') }}">
                                    <span class="text-danger error" id="error_section_title_ar"></span>
                                </div>
                            </div>
    
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="section_subtitle_en" name="section_subtitle[en]" value="{{ $section_title->getTranslation('subtitle', 'en') }}">
                                    <span class="text-danger error" id="error_section_subtitle_en"></span>
                                </div>
    
                                <div class="col-md-6">
                                    <label for="section_subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="section_subtitle_ar" name="section_subtitle[ar]" value="{{ $section_title->getTranslation('subtitle', 'ar') }}">
                                    <span class="text-danger error" id="error_section_subtitle_ar"></span>
                                </div>
                            </div>
    
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_description_en">{{ __('description (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="section_description_en" name="section_description[en]" value="{{ $section_title->getTranslation('description', 'en') }}">
                                    <span class="text-danger error" id="error_section_description_en"></span>
                                </div>
    
                                <div class="col-md-6">
                                    <label for="section_description_ar">{{ __('description (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="section_description_ar" name="section_description[ar]" value="{{ $section_title->getTranslation('description', 'ar') }}">
                                    <span class="text-danger error" id="error_section_description_ar"></span>
                                </div>
                            </div>
    
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select class="form-control" id="section_status" name="section_status">
                                        <option value="active" {{ $section_title->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        <option value="inactive" {{ $section_title->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6">
                                    <label for="section_type" class="control-label">{{ __('Type') }}<span class="text-danger">*</span></label>
                                    <select class="form-control" name="section_type" id="section_type">
                                        <option disabled selected>Select Type</option>
                                        @foreach ($section_types as $type)
                                        <option value="{{ $type }}" {{ $type == $section_title->type ? 'selected' : '' }}>{{ ucfirst(str_replace('_', ' ', $type)) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-sm btn-primary mt-2 float-right">Submit</button>
                                </div>
    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
