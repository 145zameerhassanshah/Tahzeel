@extends('admin.layouts.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Blogs') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item">{{ __('Blogs') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Add Blog Category') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Image Upload --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label>
                                        <input type="file" class="custom-file-input up-img" name="image" id="image">
                                    </div>
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <p class="help-block text-info">
                                        {{ __('Upload 730X455 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}
                                    </p>
                                </div>
                            </div>

                            {{-- Title EN --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Title (English)') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title[en]" value="{{ old('title.en') }}">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Title AR --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Title (Arabic)') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title[ar]" value="{{ old('title.ar') }}">
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Content EN --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Content (English)') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea name="content[en]" class="form-control summernote" rows="6">{{ old('content.en') }}</textarea>
                                    @error('content.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Content AR --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Content (Arabic)') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea name="content[ar]" class="form-control summernote" rows="6">{{ old('content.ar') }}</textarea>
                                    @error('content.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Meta Keywords --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Meta Keywords') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" value="{{ old('meta_keywords') }}">
                                    @error('meta_keywords')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Meta Description --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Meta Description') }}</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="meta_description" rows="4">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Status --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>{{ __('Unpublish') }}</option>
                                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>{{ __('Publish') }}</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
