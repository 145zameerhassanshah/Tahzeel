@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Add Section')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Section Add') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.page.section.store', ['slug' => $slug]) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <!-- Title Fields -->
                                <div class="col-md-6 mb-3">
                                    <label for="title_en">{{ __('Title (English)') }}<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="title_en" class="form-control" name="title[en]"
                                        placeholder="Enter Title in English" value="{{ old('title.en') }}" required>
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="title_ar">{{ __('Title (Arabic)') }}<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="title_ar" class="form-control" name="title[ar]"
                                        placeholder="Enter Title in Arabic" value="{{ old('title.ar') }}" required>
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- SubTitle Fields -->
                                <div class="col-md-6 mb-3">
                                    <label for="subtitle_en">{{ __('Subtitle (English)') }}<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="subtitle_en" class="form-control" name="subtitle[en]"
                                        placeholder="Enter Subtitle in English" value="{{ old('subtitle.en') }}" required>
                                    @error('subtitle.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="subtitle_ar">{{ __('Subtitle (Arabic)') }}<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="subtitle_ar" class="form-control" name="subtitle[ar]"
                                        placeholder="Enter Subtitle in Arabic" value="{{ old('subtitle.ar') }}" required>
                                    @error('subtitle.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Order Number -->
                                <div class="col-md-6 mb-3">
                                    <label for="order_no">{{ __('Order No') }}<span class="text-danger">*</span></label>
                                    <input type="number" id="order_no" class="form-control" name="order_no"
                                        value="{{ old('order_no') }}" placeholder="Enter Order No" required>
                                    @error('order_no')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- type -->
                                <div class="col-md-6 mb-3">
                                    <label for="type">{{ __('Type') }}<span class="text-danger">*</span></label>
                                    <select id="type" name="type" class="form-control" required>
                                        <option selected disabled>Select Type</option>
                                        <option value="R-2-L">Right To Left</option>
                                        <option value="L-2-R">Left To Right</option>
                                    </select>
                                    @error('type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Description Fields -->
                                <div class="col-md-12 mb-3">
                                    <label for="description_en">{{ __('Description (English)') }}<span
                                            class="text-danger">*</span></label>
                                    <textarea id="description_en" class="form-control summernote" name="description[en]"
                                        placeholder="Enter Description in English" rows="6" required>{{ old('description.en') }}</textarea>
                                    @error('description.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="description_ar">{{ __('Description (Arabic)') }}<span
                                            class="text-danger">*</span></label>
                                    <textarea id="description_ar" class="form-control summernote" name="description[ar]"
                                        placeholder="Enter Description in Arabic" rows="6" required>{{ old('description.ar') }}</textarea>
                                    @error('description.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- image -->
                                <div class="col-md-12">
                                    <label for="image">{{ __('Image') }}<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="image">{{ __('Choose New Image') }}</label>
                                            <input type="file" class="custom-file-input up-img form-control"
                                                name="image" id="image" required>
                                            <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="" width="50px">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-sm btn-primary mt-2 float-right">Submit</button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
