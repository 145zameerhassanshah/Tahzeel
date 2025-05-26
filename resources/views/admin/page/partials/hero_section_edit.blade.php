@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Edit Hero Section')
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
                        <form action="{{ route('admin.hero_section.update', $hero_section->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_title_en" name="title[en]"
                                        value="{{ old('title.en', $hero_section->getTranslation('title', 'en')) }}">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="update_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_title_ar" name="title[ar]"
                                        value="{{ old('title.ar', $hero_section->getTranslation('title', 'ar')) }}">
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_subtitle_en">{{ __('SubTitle (English)') }}</label>
                                    <input type="text" class="form-control" id="update_subtitle_en" name="subtitle[en]"
                                        value="{{ old('subtitle.en', $hero_section->getTranslation('subtitle', 'en')) }}">
                                    @error('subtitle.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="update_subtitle_ar">{{ __('SubTitle (Arabic)') }}</label>
                                    <input type="text" class="form-control" id="update_subtitle_ar" name="subtitle[ar]"
                                        value="{{ old('subtitle.ar', $hero_section->getTranslation('subtitle', 'ar')) }}">
                                    @error('subtitle.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_description_en">{{ __('Description (English)') }}</label>
                                    <input type="text" class="form-control" id="update_description_en" name="description[en]"
                                        value="{{ old('description.en', $hero_section->getTranslation('description', 'en')) }}">
                                    @error('description.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="update_description_ar">{{ __('Description (Arabic)') }}</label>
                                    <input type="text" class="form-control" id="update_description_ar" name="description[ar]"
                                        value="{{ old('description.ar', $hero_section->getTranslation('description', 'ar')) }}">
                                    @error('description.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="update_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select class="form-control" id="update_status" name="status">
                                        <option value="active" {{ old('status', $hero_section->status) == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        <option value="inactive" {{ old('status', $hero_section->status) == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Image Upload -->
                                <div class="col-md-6">
                                    <label for="background_image">{{ __('Image') }}</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="custom-file-label" for="background_image">{{ __('Choose New Image') }}</label>
                                            <input type="file" class="custom-file-input up-img form-control" name="background_image" id="background_image">
                                            @if ($hero_section->background_image)
                                                <img class="mw-400 mb-3 show-img img-demo mt-2" src="{{ asset('uploads/hero_section/' . $hero_section->background_image) }}" alt="Current Image" width="50px">
                                            @else
                                                <img class="mw-400 mb-3 show-img img-demo mt-2" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="" width="50px">
                                            @endif
                                            @error('background_image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-sm float-right">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
