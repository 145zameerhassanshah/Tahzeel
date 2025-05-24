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
                        <h3 class="card-title mt-1">{{ __('Section Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="post">
                            @csrf

                            <div class="row">

                                <!-- Title Fields -->
                                <div class="col-12">

                                    <!-- Testimonial Fields (Multilingual) -->
                                    <div class="form-group">
                                        <label for="name_en">{{ __('Name (English)') }}<span class="text-danger">*</span></label>
                                        <textarea name="name[en]" id="name_en" class="form-control" rows="4" required>{{ $testimonial->getTranslation('name', 'en') }}</textarea>
                                        @error('name.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name_ar">{{ __('Name (Arabic)') }}<span class="text-danger">*</span></label>
                                        <textarea name="name[ar]" id="name_ar" class="form-control" rows="4" required>{{ $testimonial->getTranslation('name', 'ar') }}</textarea>
                                        @error('name.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mt-2">
                                    <label class="control-label" for="order_no">{{ __('Order') }}<span
                                            class="text-danger">*</span></label>

                                    <input type="number" class="form-control" name="order_no" id="order_no"
                                        placeholder="{{ __('Order') }}"
                                        value="{{ old('order_no') ?? $testimonial->order_no }}">
                                    @if ($errors->has('order_no'))
                                        <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                    @endif
                                </div>

                                <div class="col-12">

                                    <!-- Testimonial Fields (Multilingual) -->
                                    <div class="form-group">
                                        <label for="feedback_en">{{ __('Feedback (English)') }}</label>
                                        <textarea name="feedback[en]" id="feedback_en" class="form-control" rows="4" required>{{ $testimonial->getTranslation('feedback', 'en') }}</textarea>
                                        @error('feedback.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="feedback_ar">{{ __('Feedback (Arabic)') }}</label>
                                        <textarea name="feedback[ar]" id="feedback_ar" class="form-control" rows="4" required>{{ $testimonial->getTranslation('feedback', 'ar') }}</textarea>
                                        @error('feedback.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Designation Fields (Multilingual) -->
                                    <div class="form-group">
                                        <label for="designation_en">{{ __('Designation (English)') }}</label>
                                        <input type="text" name="designation[en]" id="designation_en"
                                            class="form-control" value="{{ $testimonial->getTranslation('designation', 'en') }}"
                                            required>
                                        @error('designation.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="designation_ar">{{ __('Designation (Arabic)') }}</label>
                                        <input type="text" name="designation[ar]" id="designation_ar"
                                            class="form-control" value="{{ $testimonial->getTranslation('designation', 'ar') }}"
                                            required>
                                        @error('designation.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-12 mt-2">
                                    <label for="status" class="control-label">{{ __('Status') }}<span
                                            class="text-danger">*</span></label>

                                    <select class="form-control" name="status" id="status">
                                        <option value="inactive"
                                            {{ $testimonial->status == 'inactive' ? 'selected' : '' }}>
                                            {{ __('InActive') }}</option>
                                        <option value="active" {{ $testimonial->status == 'active' ? 'selected' : '' }}>
                                            {{ __('Active') }}</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <p class="text-danger"> {{ $errors->first('status') }} </p>
                                    @endif
                                </div>

                                <!-- Image Upload Field -->
                                <div class="col-md-12">
                                    <label for="image">{{ __('Image') }}</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="image">{{ __('Choose New Image') }}</label>
                                            <input type="file" class="custom-file-input up-img form-control"
                                                name="image" id="image">
                                                @if ($testimonial->image)
                                                <img src="{{ asset('assets/admin/uploads/testimonial/' . $testimonial->image) }}"
                                                    alt="{{ $testimonial->getTranslation('name', 'en') }}" width="50"
                                                    height="50">
                                            @endif
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
