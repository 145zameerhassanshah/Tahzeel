@extends('admin.layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Pages') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Pages') }}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Add Pages') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.page.index') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.page.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Image -->
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label>
                                        <input type="file" class="custom-file-input up-img" name="hero_image" id="image">
                                    </div>
                                    @if ($errors->has('hero_image'))
                                    <p class="text-danger"> {{ $errors->first('hero_image') }} </p>
                                    @endif
                                    <p class="help-block text-info">
                                        {{ __('Upload 730X455 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Title (English) -->
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 control-label">{{ __('Title(English)') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title[en]" value="{{ old('title[en]') }}">
                                    @if ($errors->has('title'))
                                    <p class="text-danger"> {{ $errors->first('title') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Title (Arabic) -->
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 control-label">{{ __('Title(Arabic)') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title[ar]" value="{{ old('title[ar]') }}">
                                    @if ($errors->has('title'))
                                    <p class="text-danger"> {{ $errors->first('title') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="form-group row">
                                <label for="slug" class="col-sm-2 control-label">{{ __('Slug') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                    @if ($errors->has('slug'))
                                    <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 control-label">{{ __('Description') }}</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" rows="4" placeholder="{{ __('Description') }}">{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                    <p class="text-danger"> {{ $errors->first('description') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Title (English) -->
                            <div class="form-group row">
                                <label for="hero_title" class="col-sm-2 control-label">{{ __('Hero Title(English)') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hero_title[en]" value="{{ old('hero_title[en]') }}">
                                    @if ($errors->has('hero_title'))
                                    <p class="text-danger"> {{ $errors->first('hero_title') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Title (Arabic) -->
                            <div class="form-group row">
                                <label for="hero_title" class="col-sm-2 control-label">{{ __('Hero Title(Arabic)') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hero_title[ar]" value="{{ old('hero_title[ar]') }}">
                                    @if ($errors->has('hero_title'))
                                    <p class="text-danger"> {{ $errors->first('hero_title') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Subtitle (English) -->
                            <div class="form-group row">
                                <label for="hero_sub_title" class="col-sm-2 control-label">{{ __('Hero Subtitle(English)') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hero_sub_title[en]" value="{{ old('hero_sub_title[en]') }}">
                                    @if ($errors->has('hero_sub_title'))
                                    <p class="text-danger"> {{ $errors->first('hero_sub_title') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Subtitle (Arabic) -->
                            <div class="form-group row">
                                <label for="hero_sub_title" class="col-sm-2 control-label">{{ __('Hero Subtitle(Arabic)') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hero_sub_title[ar]" value="{{ old('hero_sub_title[ar]') }}">
                                    @if ($errors->has('hero_sub_title'))
                                    <p class="text-danger"> {{ $errors->first('hero_sub_title') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Description -->
                            <div class="form-group row">
                                <label for="hero_description" class="col-sm-2 control-label">{{ __('Hero Description') }}</label>
                                <div class="col-sm-10">
                                    <textarea name="hero_description" class="form-control" rows="4" placeholder="{{ __('Hero Description') }}">{{ old('hero_description') }}</textarea>
                                    @if ($errors->has('hero_description'))
                                    <p class="text-danger"> {{ $errors->first('hero_description') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="form-group row">
                                <label for="status" class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>{{ __('Draft') }}</option>
                                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>{{ __('Published') }}</option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <p class="text-danger"> {{ $errors->first('status') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Type -->
                            <div class="form-group row">
                                <label for="type" class="col-sm-2 control-label">{{ __('Type') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="type">
                                        <option value="amer-service" {{ old('type') == 'amer-service' ? 'selected' : '' }}>{{ __('Amer Service') }}</option>
                                        <option value="visa" {{ old('type') == 'visa' ? 'selected' : '' }}>{{ __('Visa') }}</option>
                                        <option value="ded" {{ old('type') == 'ded' ? 'selected' : '' }}>{{ __('DED') }}</option>
                                        <option value="real-estate" {{ old('type') == 'real-estate' ? 'selected' : '' }}>{{ __('Real Estate') }}</option>
                                    </select>
                                    @if ($errors->has('type'))
                                    <p class="text-danger"> {{ $errors->first('type') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Route Name -->
                            <div class="form-group row">
                                <label for="route_name" class="col-sm-2 control-label">{{ __('Route Name') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="route_name" value="{{ old('route_name') }}">
                                    @if ($errors->has('route_name'))
                                    <p class="text-danger"> {{ $errors->first('route_name') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Meta Title -->
                            <div class="form-group row">
                                <label for="meta_title" class="col-sm-2 control-label">{{ __('Meta Title') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}">
                                    @if ($errors->has('meta_title'))
                                    <p class="text-danger"> {{ $errors->first('meta_title') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Meta Description -->
                            <div class="form-group row">
                                <label for="meta_description" class="col-sm-2 control-label">{{ __('Meta Description') }}</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="meta_description" rows="4" placeholder="{{ __('Meta Description') }}">{{ old('meta_description') }}</textarea>
                                    @if ($errors->has('meta_description'))
                                    <p class="text-danger"> {{ $errors->first('meta_description') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Meta Keywords -->
                            <div class="form-group row">
                                <label for="meta_keywords" class="col-sm-2 control-label">{{ __('Meta Keywords') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" value="{{ old('meta_keywords') }}">
                                    @if ($errors->has('meta_keywords'))
                                    <p class="text-danger"> {{ $errors->first('meta_keywords') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Order Number -->
                            <div class="form-group row">
                                <label for="order_no" class="col-sm-2 control-label">{{ __('Order Number') }}</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="order_no" value="{{ old('order_no', 0) }}">
                                    @if ($errors->has('order_no'))
                                    <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Meta Tags -->
                            <div class="form-group row">
                                <label for="meta_tags" class="col-sm-2 control-label">{{ __('Meta Tags') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="meta_tags" value="{{ old('meta_tags') }}">
                                    @if ($errors->has('meta_tags'))
                                    <p class="text-danger"> {{ $errors->first('meta_tags') }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection