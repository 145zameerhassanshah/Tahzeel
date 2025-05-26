@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Add Why Choose Us')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Why Choose Us Add') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.why-choose-us.store', ['slug' => $slug]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title_en">{{ __('Title (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="title_en" name="title[en]">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="title_ar">{{ __('Title (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="title_ar" name="title[ar]">
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="subtitle_en">{{ __('SubTitle (English)') }} </label>
                                    <input type="text" class="form-control" id="subtitle_en" name="subtitle[en]">
                                    @error('subtitle.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="subtitle_ar">{{ __('SubTitle (Arabic)') }} </label>
                                    <input type="text" class="form-control" id="subtitle_ar" name="subtitle[ar]">
                                    @error('subtitle.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="description">{{ __('Description (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="description_en" name="description[en]">
                                    @error('description.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="description">{{ __('Description (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="description_ar" name="description[ar]">
                                    @error('description.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select required class="form-control" id="status" name="status">
                                        <option value="active">{{ __('Active') }}</option>
                                        <option value="inactive">{{ __('Inactive') }}</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="order_no">{{ __('Order No') }} <span class="text-danger">*</span></label>
                                    <input value="1" required type="number" class="form-control" id="order_no" name="order_no">
                                    @error('order_no')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="icon">{{ __('Icon') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="icon" name="icon">
                                    @error('icon')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
