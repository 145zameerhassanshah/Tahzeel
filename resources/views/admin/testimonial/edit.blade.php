@extends('admin.layouts.master')
@section('title', 'Edit Testimonial')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Edit Testimonial') }}</h1>
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
                    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('Edit Testimonial') }}</h3>
                            </div>
                            <div class="card-body">
                                <!-- Page Selection Field -->
                                <div class="form-group">
                                    <label for="page_id">{{ __('Page') }}</label>
                                    <select name="page_id" id="page_id" class="form-control">
                                        <option value="" disabled>{{ __('Select Page') }}</option>
                                        @foreach ($pages as $page)
                                            <option value="{{ $page->id }}"
                                                {{ $testimonial->page_id == $page->id ? 'selected' : '' }}>
                                                {{ $page->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('page_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Name Field -->
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $testimonial->name }}" required>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Testimonial Fields (Multilingual) -->
                                <div class="form-group">
                                    <label for="testimonial_en">{{ __('Testimonial (English)') }}</label>
                                    <textarea name="testimonial[en]" id="testimonial_en" class="form-control" rows="4" required>{{ $testimonial->getTranslation('testimonial', 'en') }}</textarea>
                                    @error('testimonial.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="testimonial_ar">{{ __('Testimonial (Arabic)') }}</label>
                                    <textarea name="testimonial[ar]" id="testimonial_ar" class="form-control" rows="4" required>{{ $testimonial->getTranslation('testimonial', 'ar') }}</textarea>
                                    @error('testimonial.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Designation Fields (Multilingual) -->
                                <div class="form-group">
                                    <label for="designation_en">{{ __('Designation (English)') }}</label>
                                    <input type="text" name="designation[en]" id="designation_en" class="form-control"
                                        value="{{ $testimonial->getTranslation('designation', 'en') }}" required>
                                    @error('designation.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="designation_ar">{{ __('Designation (Arabic)') }}</label>
                                    <input type="text" name="designation[ar]" id="designation_ar" class="form-control"
                                        value="{{ $testimonial->getTranslation('designation', 'en') }}" required>
                                    @error('designation.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
                                            @if ($testimonial->img)
                                                <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                    src="{{ asset('storage/' . $testimonial->img) }}"
                                                    alt="{{ $testimonial->name }}">
                                            @endif
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success">{{ __('Update Testimonial') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
