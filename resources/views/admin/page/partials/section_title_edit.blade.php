@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Edit Section Title')
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
                                    <label for="section_title_en">{{ __('Title (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="section_title_en"
                                        name="section_title[en]"
                                        value="{{ $section_title->getTranslation('title', 'en') }}">
                                    @if ($errors->has('section_title.en'))
                                        <p class="text-danger"> {{ $errors->first('section_title.en') }} </p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="section_title_ar">{{ __('Title (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="section_title_ar"
                                        name="section_title[ar]"
                                        value="{{ $section_title->getTranslation('title', 'ar') }}">
                                    @if ($errors->has('section_title.ar'))
                                        <p class="text-danger"> {{ $errors->first('section_title.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_subtitle_en">{{ __('SubTitle (English)') }} </label>
                                    <input type="text" class="form-control" id="section_subtitle_en"
                                        name="section_subtitle[en]"
                                        value="{{ $section_title->getTranslation('subtitle', 'en') }}">
                                    @if ($errors->has('section_subtitle.en'))
                                        <p class="text-danger"> {{ $errors->first('section_subtitle.en') }} </p>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="section_subtitle_ar">{{ __('SubTitle (Arabic)') }} </label>
                                    <input type="text" class="form-control" id="section_subtitle_ar"
                                        name="section_subtitle[ar]"
                                        value="{{ $section_title->getTranslation('subtitle', 'ar') }}">
                                    @if ($errors->has('section_subtitle.ar'))
                                        <p class="text-danger"> {{ $errors->first('section_subtitle.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_description_en">{{ __('Description (English)') }} </label>
                                    <input type="text" class="form-control" id="section_description_en"
                                        name="section_description[en]"
                                        value="{{ $section_title->getTranslation('description', 'en') }}">
                                    @if ($errors->has('section_description.en'))
                                        <p class="text-danger"> {{ $errors->first('section_description.en') }} </p>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="section_description_ar">{{ __('Description (Arabic)') }} </label>
                                    <input type="text" class="form-control" id="section_description_ar"
                                        name="section_description[ar]"
                                        value="{{ $section_title->getTranslation('description', 'ar') }}">
                                    @if ($errors->has('section_description.ar'))
                                        <p class="text-danger"> {{ $errors->first('section_description.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_status">{{ __('Status') }} <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" id="section_status" name="section_status" required>
                                        <option value="active" {{ $section_title->status == 'active' ? 'selected' : '' }}>
                                            {{ __('Active') }}</option>
                                        <option value="inactive"
                                            {{ $section_title->status == 'inactive' ? 'selected' : '' }}>
                                            {{ __('Inactive') }}</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <p class="text-danger"> {{ $errors->first('status') }} </p>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="section_type" class="control-label">{{ __('Type') }}<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="section_type" id="section_type" required>
                                        <option disabled selected>Select Type</option>
                                        @foreach ($section_types as $type)
                                            <option value="{{ $type }}"
                                                {{ $type == $section_title->type ? 'selected' : '' }}>
                                                {{ ucfirst(str_replace('_', ' ', $type)) }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('section_type'))
                                        <p class="text-danger"> {{ $errors->first('section_type') }} </p>
                                    @endif
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
