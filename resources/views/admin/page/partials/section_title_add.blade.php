@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Add Section Title')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">

            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Section Title Add') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.section_title.store', ['slug' => $slug]) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="section_title_en">{{ __('Title (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="section_title_en"
                                        name="section_title[en]" required
                                        value="{{ old('section_title.en') }}">
                                    @if ($errors->has('section_title.en'))
                                        <p class="text-danger"> {{ $errors->first('section_title.en') }} </p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="section_title_ar">{{ __('Title (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="section_title_ar"
                                        name="section_title[ar]" required
                                        value="{{ old('section_title.ar') }}">
                                    @if ($errors->has('section_title.ar'))
                                        <p class="text-danger"> {{ $errors->first('section_title.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_subtitle_en">{{ __('SubTitle (English)') }} </label>
                                    <input type="text" class="form-control" id="section_subtitle_en"
                                        name="section_subtitle[en]" value="{{ old('section_subtitle.en') }}">
                                    @if ($errors->has('section_subtitle.en'))
                                        <p class="text-danger"> {{ $errors->first('section_subtitle.en') }} </p>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="section_subtitle_ar">{{ __('SubTitle (Arabic)') }} </label>
                                    <input type="text" class="form-control" id="section_subtitle_ar"
                                        name="section_subtitle[ar]" value="{{ old('section_subtitle.ar') }}">
                                    @if ($errors->has('section_subtitle.ar'))
                                        <p class="text-danger"> {{ $errors->first('section_subtitle.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_description_en">{{ __('Description (English)') }} </label>
                                    <input type="text" class="form-control" id="section_description_en"
                                        name="section_description[en]" value="{{ old('section_description.en') }}">
                                    @if ($errors->has('section_description.en'))
                                        <p class="text-danger"> {{ $errors->first('section_description.en') }} </p>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="section_description_ar">{{ __('Description (Arabic)') }} </label>
                                    <input type="text" class="form-control" id="section_description_ar"
                                        name="section_description[ar]" value="{{ old('section_description.ar') }}">
                                    @if ($errors->has('section_description.ar'))
                                        <p class="text-danger"> {{ $errors->first('section_description.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="section_status">{{ __('Status') }} <span
                                            class="text-danger">*</span></label>
                                    <select required class="form-control" id="section_status" name="section_status">
                                        <option value="active" {{ old('section_status') == 'active' ? 'selected' : '' }}>
                                            {{ __('Active') }}</option>
                                        <option value="inactive" {{ old('section_status') == 'inactive' ? 'selected' : '' }}>
                                            {{ __('Inactive') }}</option>
                                    </select>
                                    @if ($errors->has('section_status'))
                                        <p class="text-danger"> {{ $errors->first('section_status') }} </p>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="section_type" class="control-label">{{ __('Type') }}<span
                                            class="text-danger">*</span></label>
                                    <select required class="form-control" name="section_type" id="section_type">
                                        <option disabled {{ old('section_type') ? '' : 'selected' }}>Select Type</option>
                                        @foreach ($section_types as $type)
                                            <option value="{{ $type }}" {{ old('section_type') == $type ? 'selected' : '' }}>
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
