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
                        <h3 class="card-title mt-1">{{ __('Document Required Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.document-required.update', $document->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_title_en" name="title[en]" value="{{ $document->getTranslation('title', 'en') }}">
                                    <span class="text-danger error" id="error_title_en"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="update_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_title_ar" name="title[ar]" value="{{ $document->getTranslation('title', 'ar') }}">
                                    <span class="text-danger error" id="error_title_ar"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="update_description">{{ __('Description (English)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_description_en" name="description[en]" value="{{ $document->getTranslation('description', 'en') }}">
                                    <span class="text-danger error" id="error_description_en"></span>
                                </div>
    
                                <div class="col-md-6">
                                    <label for="update_description">{{ __('Description (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_description_ar" name="description[ar]" value="{{ $document->getTranslation('description', 'ar') }}">
                                    <span class="text-danger error" id="error_description_ar"></span>
                                </div>
                            </div>
    
                            <div class="row mt-3">
    
                                <div class="col-md-6">
                                    <label for="update_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select class="form-control" id="update_status" name="status">
                                        <option value="active" {{ $document->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        <option value="inactive" {{ $document->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6">
                                    <label for="order_no">{{ __('Order No)') }} <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="order_no" name="order_no" value="{{ $document->order_no }}">
                                    <span class="text-danger error" id="error_order_no"></span>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="icon">{{ __('Icon') }}</label>
                                        <input type="file" class="form-control" id="icon" name="icon" accept="background_image/*">
                                        <span class="text-danger error" id="icon"></span>
                                    </div>
                                    
                                    <img src="{{ asset('assets/admin/uploads/document/' . $document->icon) }}"
                                    alt="" width="50px">
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
