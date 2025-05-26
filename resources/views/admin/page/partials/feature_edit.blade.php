@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Edit Feature')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Feature Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.feature.update', $feature->id) }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_title_en" name="title[en]" value="{{ $feature->getTranslation('title', 'en') }}">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="update_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="update_title_ar" name="title[ar]" value="{{ $feature->getTranslation('title', 'ar') }}">
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_subtitle_en">{{ __('SubTitle (English)') }} </label>
                                    <input type="text" class="form-control" id="update_subtitle_en" name="subtitle[en]" value="{{ $feature->getTranslation('subtitle', 'en') }}">
                                    @error('subtitle.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label for="update_subtitle_ar">{{ __('SubTitle (Arabic)') }} </label>
                                    <input type="text" class="form-control" id="update_subtitle_ar" name="subtitle[ar]" value="{{ $feature->getTranslation('subtitle', 'ar') }}">
                                    @error('subtitle.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_description">{{ __('Description (English)') }} </label>
                                    <input type="text" class="form-control" id="update_description_en" name="description[en]" value="{{ $feature->getTranslation('description', 'en') }}">
                                    @error('description.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label for="update_description">{{ __('Description (Arabic)') }} </label>
                                    <input type="text" class="form-control" id="update_description_ar" name="description[ar]" value="{{ $feature->getTranslation('description', 'ar') }}">
                                    @error('description.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mt-3">
    
                                <div class="col-md-4">
                                    <label for="update_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select required class="form-control" id="update_status" name="status">
                                        <option value="active" {{ $feature->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        <option value="inactive" {{ $feature->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="order_no">{{ __('Order No') }} <span class="text-danger">*</span></label>
                                    <input required type="number" class="form-control" id="order_no" name="order_no" value="{{ $feature->order_no }}">
                                    @error('order_no')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
    
                                <div class="col-md-4">
                                    <label for="order_no">{{ __('Icon') }} </label>
                                    <input type="text" class="form-control" id="order_no" name="icon" value="{{ $feature->icon }}">
                                    @error('icon')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
