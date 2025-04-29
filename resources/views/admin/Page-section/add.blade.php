@extends('admin.layouts.master')
@section('title', 'Add Service Section')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{ route('admin.page.section.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="">{{ __('Add Page Section') }}</h3>
                                    <div class="card-tools d-flex">
                                        <a href="{{ route('admin.page.section.index', $page->id) }}" class="btn btn-primary btn-sm">
                                            {{ __('Section List') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="page_id" value="{{ $page->id }}">

                                        <!-- Title Fields -->
                                        <div class="col-md-6 mb-3">
                                            <label for="title_en">{{ __('Title (English)') }}<span class="text-danger">*</span></label>
                                            <input type="text" id="title_en" class="form-control" name="title[en]" value="{{ old('title.en') }}" required>
                                            @error('title.en') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="title_ar">{{ __('Title (Arabic)') }}<span class="text-danger">*</span></label>
                                            <input type="text" id="title_ar" class="form-control" name="title[ar]" value="{{ old('title.ar') }}" required>
                                            @error('title.ar') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <!-- Subtitle Fields -->
                                        <div class="col-md-6 mb-3">
                                            <label for="subtitle_en">{{ __('Subtitle (English)') }}<span class="text-danger">*</span></label>
                                            <input type="text" id="subtitle_en" class="form-control" name="subtitle[en]" value="{{ old('subtitle.en') }}" required>
                                            @error('subtitle.en') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="subtitle_ar">{{ __('Subtitle (Arabic)') }}<span class="text-danger">*</span></label>
                                            <input type="text" id="subtitle_ar" class="form-control" name="subtitle[ar]" value="{{ old('subtitle.ar') }}" required>
                                            @error('subtitle.ar') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <!-- Order Number -->
                                        <div class="col-md-6 mb-3">
                                            <label for="order_no">{{ __('Order No') }}<span class="text-danger">*</span></label>
                                            <input type="number" id="order_no" class="form-control" name="order_no" value="{{ old('order_no') }}">
                                            @error('order_no') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <!-- Type -->
                                        <div class="col-md-6 mb-3">
                                            <label for="type">{{ __('Type') }}<span class="text-danger">*</span></label>
                                            <select id="type" name="type" class="form-control" required>
                                                <option value="" selected disabled>Select Type</option>
                                                <option value="rtl">Right To Left</option>
                                                <option value="ltr">Left To Right</option>
                                            </select>
                                            @error('type') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <!-- Descriptions -->
                                        <div class="col-md-12 mb-3">
                                            <label for="description_en">{{ __('Description (English)') }}<span class="text-danger">*</span></label>
                                            <textarea id="description_en" class="form-control" name="description[en]" rows="6" required>{{ old('description.en') }}</textarea>
                                            @error('description.en') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="description_ar">{{ __('Description (Arabic)') }}<span class="text-danger">*</span></label>
                                            <textarea id="description_ar" class="form-control" name="description[ar]" rows="6" required>{{ old('description.ar') }}</textarea>
                                            @error('description.ar') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-12 mb-3">
                                            <label for="image">{{ __('Image') }}<span class="text-danger">*</span></label>
                                            <input type="file" name="image" id="image" class="form-control" required>
                                            <img class="mw-400 mb-3 mt-2 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                            @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-success btn-lg" style="border-radius: 10px;">{{ __('Add Page Section') }}</button>
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
