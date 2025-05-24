@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Add Testimonial')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Testimonial Add') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.testimonial.store', ['slug' => $slug]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- Name Field -->
                            <div class="row">
                                <div class="col-12">
                                    <!-- Feedback Fields (Multilingual) -->
                                    <div class="form-group">
                                        <label for="name_en">{{ __('Name (English)') }} <span class="text-danger">*</span></label>
                                        <input name="name[en]" id="name_en" class="form-control"
                                             required>
                                        @error('name.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name_ar">{{ __('Name (Arabic)') }} <span class="text-danger">*</span></label>
                                        <input name="name[ar]" id="name_ar" class="form-control"
                                             required>
                                        @error('name.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="control-label" for="order_no">{{ __('Order') }}<span
                                            class="text-danger">*</span></label>

                                    <input required type="number" class="form-control" name="order_no" id="order_no"
                                     value="{{ old('order_no') }}">
                                    @if ($errors->has('order_no'))
                                        <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                    @endif
                                    <!-- Feedback Fields (Multilingual) -->
                                    <div class="form-group">
                                        <label for="feedback_en">{{ __('Feedback (English)') }} <span class="text-danger">*</span></label>
                                        <textarea name="feedback[en]" id="feedback_en" class="form-control"
                                            rows="2" required></textarea>
                                        @error('feedback.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="feedback_ar">{{ __('Feedback (Arabic)') }} <span class="text-danger">*</span></label>
                                        <textarea name="feedback[ar]" id="feedback_ar" class="form-control"
                                            rows="2" required></textarea>
                                        @error('feedback.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Designation Fields (Multilingual) -->
                                    <div class="form-group">
                                        <label for="designation_en">{{ __('Designation (English)') }}</label>
                                        <input type="text" name="designation[en]" id="designation_en"
                                            class="form-control">
                                        @error('designation.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="designation_ar">{{ __('Designation (Arabic)') }}</label>
                                        <input type="text" name="designation[ar]" id="designation_ar"
                                            class="form-control">
                                        @error('designation.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="status" class="control-label">{{ __('Status') }}<span
                                            class="text-danger">*</span></label>

                                    <select class="form-control" name="status" id="status" required>
                                        <option value="inactive">{{ __('InActive') }}</option>
                                        <option value="active">{{ __('Active') }}</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <p class="text-danger"> {{ $errors->first('status') }} </p>
                                    @endif
                                    </div>
                                </div>

                                <!-- Image Upload Field -->
                                <div class="col-md-12 mt-2">
                                    <label for="image">{{ __('Image') }}<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="custom-file-label"
                                                for="image">{{ __('Choose New Image') }}</label>
                                            <input required type="file" class="custom-file-input up-img form-control"
                                                name="image" id="image">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
