@extends('admin.layouts.master')
@section('title', 'Page Detail')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Procedure Add') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form class="form-horizontal" action="{{ route('admin.procedures.store', ['slug' => $slug]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title_en">{{ __('Title (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title_en" name="title[en]">
                                    <span class="text-danger error" id="error_title_en"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="title_ar">{{ __('Title (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title_ar" name="title[ar]">
                                    <span class="text-danger error" id="error_title_ar"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="subtitle_en">{{ __('SubTitle (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subtitle_en" name="subtitle[en]">
                                    <span class="text-danger error" id="error_subtitle_en"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="subtitle_ar">{{ __('SubTitle (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subtitle_ar" name="subtitle[ar]">
                                    <span class="text-danger error" id="error_subtitle_ar"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="description">{{ __('Description (English)') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="description_en" name="description[en]">
                                    <span class="text-danger error" id="error_description_en"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="description">{{ __('Description (Arabic)') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="description_ar" name="description[ar]">
                                    <span class="text-danger error" id="error_description_ar"></span>
                                </div>
                            </div>

                            <div class="row mt-3">

                                <div class="col-md-4">
                                    <label for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="active">{{ __('Active') }}</option>
                                        <option value="inactive">{{ __('Inactive') }}</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="order_no">{{ __('Order No') }} <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="order_no" name="order_no">
                                    <span class="text-danger error" id="error_order_no"></span>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="error_background_image">{{ __('Image') }}</label>
                                        <input type="file" class="form-control" id="background_image" name="background_image"
                                            accept="background_image/*">
                                        <span class="text-danger error" id="error_background_image"></span>
                                    </div>
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
