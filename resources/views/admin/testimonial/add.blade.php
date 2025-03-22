@extends('admin.layouts.master')
@section('title', 'Add Testimonial')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Add New Testimonial') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> {{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Testimonials') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('testimonials.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('Add Testimonial') }}</h3>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="group_id" value="{{ $group->id }}">

                                <!-- Name Field -->
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Enter name" required>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-12 mt-2">
                                    <label class="control-label">{{ __('Order') }}<span
                                            class="text-danger">*</span></label>

                                    <input type="number" class="form-control" name="order_no"
                                        placeholder="{{ __('Order') }}" value="{{ old('order_no') }}">
                                    @if ($errors->has('order_no'))
                                        <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                    @endif
                                </div>

                                <!-- Feedback Fields (Multilingual) -->
                                <div class="form-group">
                                    <label for="feedback_en">{{ __('Feedback (English)') }}</label>
                                    <textarea name="feedback[en]" id="feedback_en" class="form-control"
                                                placeholder="Enter feedback in English" rows="4" required></textarea>
                                    @error('feedback.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="feedback_ar">{{ __('Feedback (Arabic)') }}</label>
                                    <textarea name="feedback[ar]" id="feedback_ar" class="form-control"
                                                placeholder="Enter feedback in Arabic" rows="4" required></textarea>
                                    @error('feedback.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Designation Fields (Multilingual) -->
                                <div class="form-group">
                                    <label for="designation_en">{{ __('Designation (English)') }}</label>
                                    <input type="text" name="designation[en]" id="designation_en" class="form-control"
                                           placeholder="Enter designation in English" required>
                                    @error('designation.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="designation_ar">{{ __('Designation (Arabic)') }}</label>
                                    <input type="text" name="designation[ar]" id="designation_ar" class="form-control"
                                           placeholder="Enter designation in Arabic" required>
                                    @error('designation.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-12 mt-2">
                                    <label for="status" class="control-label">{{ __('Status') }}<span
                                            class="text-danger">*</span></label>

                                    <select class="form-control" name="status">
                                        <option value="inactive">{{ __('InActive') }}</option>
                                        <option value="active">{{ __('Active') }}</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <p class="text-danger"> {{ $errors->first('status') }} </p>
                                    @endif
                                </div>

                                <!-- Image Upload Field -->
                                <div class="col-md-12">
                                    <label for="image">{{ __('Image') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="image">{{ __('Choose New Image') }}</label>
                                            <input type="file"
                                                class="custom-file-input up-img form-control" name="image"
                                                id="image">
                                            <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                src="{{ asset('assets/admin/img/img-demo.jpg') }}"
                                                alt="">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success">{{ __('Add Testimonial') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
