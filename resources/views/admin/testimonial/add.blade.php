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
                                
                                <!-- Name Field -->
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Enter name" required>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Testimonial Fields (Multilingual) -->
                                <div class="form-group">
                                    <label for="testimonial_en">{{ __('Testimonial (English)') }}</label>
                                    <textarea name="testimonial[en]" id="testimonial_en" class="form-control"
                                              placeholder="Enter testimonial in English" rows="4" required></textarea>
                                    @error('testimonial.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="testimonial_ar">{{ __('Testimonial (Arabic)') }}</label>
                                    <textarea name="testimonial[ar]" id="testimonial_ar" class="form-control"
                                              placeholder="Enter testimonial in Arabic" rows="4" required></textarea>
                                    @error('testimonial.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Designation Field -->
                                <div class="form-group">
                                    <label for="designation">{{ __('Designation') }}</label>
                                    <input type="text" name="designation" id="designation" class="form-control"
                                           placeholder="Enter designation" required>
                                    @error('designation')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Image Upload Field -->
                                <div class="form-group">
                                    <label for="image">{{ __('Upload Image') }}</label>
                                    <input type="file" name="image" id="image" class="form-control-file" required>
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
