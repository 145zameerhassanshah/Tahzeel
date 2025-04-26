@extends('admin.layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Pages') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Pages') }}</li>
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
                        <h3 class="card-title mt-1">{{ __('Edit Page') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.page.index') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.page.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Image Section -->
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Hero Image') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/'.$page->hero_image) }}" alt="">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="hero_image" id="hero_image">
                                        <label class="custom-file-label" for="hero_image">{{ __('Choose New Hero Image') }}</label>
                                    </div>
                                    @if ($errors->has('hero_image'))
                                    <p class="text-danger"> {{ $errors->first('hero_image') }} </p>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="order_no" class="col-sm-2 control-label">{{ __('Order Number') }}</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="order_no" value="{{ old('order_no', $page->order_no) }}">
                                    @if ($errors->has('order_no'))
                                    <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="route_name" class="col-sm-2 control-label">{{ __('Route Name') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="route_name" value="{{ old('route_name', $page->route_name) }}">
                                    @if ($errors->has('route_name'))
                                    <p class="text-danger"> {{ $errors->first('route_name') }} </p>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="page_link_for" class="col-sm-2 control-label">{{ __('Page Link For') }}</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="page_link_for">
                                        <option value="none" {{ old('page_link_for', $page->page_link_for ?? '') == 'none' ? 'selected' : '' }}>{{ __('None') }}</option>
                                        <option value="header" {{ old('page_link_for', $page->page_link_for ?? '') == 'header' ? 'selected' : '' }}>{{ __('Header') }}</option>
                                        <option value="footer" {{ old('page_link_for', $page->page_link_for ?? '') == 'footer' ? 'selected' : '' }}>{{ __('Footer') }}</option>
                                        <option value="services" {{ old('page_link_for', $page->page_link_for ?? '') == 'services' ? 'selected' : '' }}>{{ __('Services') }}</option>
                                    </select>
                                    @if ($errors->has('page_link_for'))
                                    <p class="text-danger"> {{ $errors->first('page_link_for') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Title (English) Section -->
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 control-label">{{ __('Title(English)') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title[en]" value="{{ json_decode($page->title)->en }}">
                                    @if ($errors->has('title.en'))
                                    <p class="text-danger"> {{ $errors->first('title.en') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Title (Arabic) Section -->
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 control-label">{{ __('Title(Arabic)') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title[ar]" value="{{ json_decode($page->title)->ar }}">
                                    @if ($errors->has('title.ar'))
                                    <p class="text-danger"> {{ $errors->first('title.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Slug Section -->
                            <div class="form-group row">
                                <label for="slug" class="col-sm-2 control-label">{{ __('Slug') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="slug" value="{{ $page->slug }}">
                                    @if ($errors->has('slug'))
                                    <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Description Section (English) -->
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 control-label">{{ __('Description(English)') }}</label>
                                <div class="col-sm-10">
                                    <textarea name="description[en]" class="form-control summernote" rows="6">{{ json_decode($page->description)->en ?? '' }}</textarea>
                                    @if ($errors->has('description.en'))
                                    <p class="text-danger"> {{ $errors->first('description.en') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Description Section (Arabic) -->
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 control-label">{{ __('Description(Arabic)') }}</label>
                                <div class="col-sm-10">
                                    <textarea name="description[ar]" class="form-control summernote" rows="6">{{ json_decode($page->description)->ar ?? '' }}</textarea>
                                    @if ($errors->has('description.ar'))
                                    <p class="text-danger"> {{ $errors->first('description.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Title (English) -->
                            <div class="form-group row">
                                <label for="hero_title" class="col-sm-2 control-label">{{ __('Hero Title(English)') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hero_title[en]" value="{{ json_decode($page->hero_title)->en ?? '' }}">
                                    @if ($errors->has('hero_title.en'))
                                    <p class="text-danger"> {{ $errors->first('hero_title.en') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Title (Arabic) -->
                            <div class="form-group row">
                                <label for="hero_title" class="col-sm-2 control-label">{{ __('Hero Title(Arabic)') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hero_title[ar]" value="{{ json_decode($page->hero_title)->ar ?? '' }}">
                                    @if ($errors->has('hero_title.ar'))
                                    <p class="text-danger"> {{ $errors->first('hero_title.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Subtitle (English) -->
                            <div class="form-group row">
                                <label for="hero_sub_title" class="col-sm-2 control-label">{{ __('Hero Subtitle(English)') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hero_sub_title[en]" value="{{ json_decode($page->hero_sub_title)->en ?? '' }}">
                                    @if ($errors->has('hero_sub_title.en'))
                                    <p class="text-danger"> {{ $errors->first('hero_sub_title.en') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Subtitle (Arabic) -->
                            <div class="form-group row">
                                <label for="hero_sub_title" class="col-sm-2 control-label">{{ __('Hero Subtitle(Arabic)') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hero_sub_title[ar]" value="{{ json_decode($page->hero_sub_title)->ar ?? '' }}">
                                    @if ($errors->has('hero_sub_title.ar'))
                                    <p class="text-danger"> {{ $errors->first('hero_sub_title.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Description (English) -->
                            <div class="form-group row">
                                <label for="hero_description" class="col-sm-2 control-label">{{ __('Hero Description(English)') }}</label>
                                <div class="col-sm-10">
                                    <textarea name="hero_description[en]" class="form-control summernote" rows="6">{{ json_decode($page->hero_description)->en ?? '' }}</textarea>
                                    @if ($errors->has('hero_description.en'))
                                    <p class="text-danger"> {{ $errors->first('hero_description.en') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Hero Description (Arabic) -->
                            <div class="form-group row">
                                <label for="hero_description" class="col-sm-2 control-label">{{ __('Hero Description(Arabic)') }}</label>
                                <div class="col-sm-10">
                                    <textarea name="hero_description[ar]" class="form-control summernote" rows="6">{{ json_decode($page->hero_description)->ar ?? '' }}</textarea>
                                    @if ($errors->has('hero_description.ar'))
                                    <p class="text-danger"> {{ $errors->first('hero_description.ar') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Status Section -->
                            <div class="form-group row">
                                <label for="status" class="col-sm-2 control-label">{{ __('Status') }}</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value="draft" {{ $page->status == 'draft' ? 'selected' : '' }}>{{ __('Draft') }}</option>
                                        <option value="published" {{ $page->status == 'published' ? 'selected' : '' }}>{{ __('Published') }}</option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <p class="text-danger"> {{ $errors->first('status') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Type Section -->
                            <div class="form-group row">
                                <label for="type" class="col-sm-2 control-label">{{ __('Page Type') }}</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="type">
                                        <option value="amer-service" {{ $page->type == 'amer-service' ? 'selected' : '' }}>{{ __('Amer Service') }}</option>
                                        <option value="visa" {{ $page->type == 'visa' ? 'selected' : '' }}>{{ __('Visa') }}</option>
                                        <option value="ded" {{ $page->type == 'ded' ? 'selected' : '' }}>{{ __('DED') }}</option>
                                        <option value="real-estate" {{ $page->type == 'real-estate' ? 'selected' : '' }}>{{ __('Real Estate') }}</option>
                                    </select>
                                    @if ($errors->has('type'))
                                    <p class="text-danger"> {{ $errors->first('type') }} </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection