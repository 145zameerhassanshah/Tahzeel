@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Edit Page')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Edit Page</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.page.update', $page->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Slug -->
                            <div class="form-group">
                                <label for="slug">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    value="{{ $page->slug }}" readonly required>
                                @if ($errors->has('slug'))
                                    <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                @endif
                            </div>

                            <!-- Title -->
                            <div class="form-group">
                                <label for="title_en">Title (EN) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title_en" name="title[en]"
                                    value="{{ $page->getTranslation('title', 'en') }}" required>
                                @if ($errors->has('title.en'))
                                    <p class="text-danger"> {{ $errors->first('title.en') }} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="title_ar">Title (AR) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title_ar" name="title[ar]"
                                    value="{{ $page->getTranslation('title', 'ar') }}" required>
                                @if ($errors->has('title.ar'))
                                    <p class="text-danger"> {{ $errors->first('title.ar') }} </p>
                                @endif
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label for="description_en">Description (EN)</label>
                                <textarea class="form-control" id="description_en" name="description[en]" rows="3">{{ $page->getTranslation('description', 'en') }}</textarea>
                                @if ($errors->has('description.en'))
                                    <p class="text-danger"> {{ $errors->first('description.en') }} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description_ar">Description (AR)</label>
                                <textarea class="form-control" id="description_ar" name="description[ar]" rows="3">{{ $page->getTranslation('description', 'ar') }}</textarea>
                                @if ($errors->has('description.ar'))
                                    <p class="text-danger"> {{ $errors->first('description.ar') }} </p>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="order_no">Order Number</label>
                                        <input type="number" class="form-control" id="order_no" name="order_no"
                                            value="{{ $page->order_no ?? 0 }}">
                                        @if ($errors->has('order_no'))
                                            <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select id="status" name="status" class="form-control" required>
                                            <option value="draft" {{ $page->status == 'draft' ? 'selected' : '' }}>
                                                Draft</option>
                                            <option value="published" {{ $page->status == 'published' ? 'selected' : '' }}>
                                                Published</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="page_link_for">Page Link For <span class="text-danger">*</span></label>
                                        <select id="page_link_for" name="page_link_for" class="form-control" required>
                                            <option value="header"
                                                {{ $page->page_link_for == 'header' ? 'selected' : '' }}>Header
                                            </option>
                                            <option value="footer"
                                                {{ $page->page_link_for == 'footer' ? 'selected' : '' }}>Footer
                                            </option>
                                            <option value="services"
                                                {{ $page->page_link_for == 'services' ? 'selected' : '' }}>Services
                                            </option>
                                            <option value="none" {{ $page->page_link_for == 'none' ? 'selected' : '' }}>
                                                None</option>
                                        </select>
                                        @if ($errors->has('page_link_for'))
                                            <p class="text-danger"> {{ $errors->first('page_link_for') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="route_name">Route Name</label>
                                        <input type="text" class="form-control" id="route_name" name="route_name"
                                            value="{{ $page->route_name }}">
                                        @if ($errors->has('route_name'))
                                            <p class="text-danger"> {{ $errors->first('route_name') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">Category Type</label>
                                        <select id="type" name="type" class="form-control" required>
                                            <option value="amer-service"
                                                {{ $page->type == 'amer-service' ? 'selected' : '' }}>Amer Service
                                            </option>
                                            <option value="visa" {{ $page->type == 'visa' ? 'selected' : '' }}>Visa
                                            </option>
                                            <option value="ded" {{ $page->type == 'ded' ? 'selected' : '' }}>DED
                                            </option>
                                            <option value="real-estate"
                                                {{ $page->type == 'real-estate' ? 'selected' : '' }}>Real Estate
                                            </option>
                                        </select>
                                        @if ($errors->has('type'))
                                            <p class="text-danger"> {{ $errors->first('type') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Hero Image -->
                            <div class="form-group">
                                <label for="hero_image">Hero Image</label>
                                <input type="file" class="form-control" id="hero_image" name="hero_image">
                                @if ($page->hero_image)
                                    <img src="{{ asset('assets/admin/img/' . $page->hero_image) }}" width="120"
                                        class="mt-2">
                                @endif
                                <small class="text-muted">Recommended size: 730x455 px. Formats: jpg, jpeg,
                                    png.</small>
                                @if ($errors->has('hero_image'))
                                    <p class="text-danger"> {{ $errors->first('hero_image') }} </p>
                                @endif
                            </div>

                            <!-- Hero Title -->
                            <div class="form-group">
                                <label for="hero_title_en">Hero Title (EN)</label>
                                <input type="text" class="form-control" id="hero_title_en" name="hero_title[en]"
                                    value="{{ $page->getTranslation('hero_title', 'en') }}">
                                @if ($errors->has('hero_title.en'))
                                    <p class="text-danger"> {{ $errors->first('hero_title.en') }} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="hero_title_ar">Hero Title (AR)</label>
                                <input type="text" class="form-control" id="hero_title_ar" name="hero_title[ar]"
                                    value="{{ $page->getTranslation('hero_title', 'ar') }}">
                                @if ($errors->has('hero_title.ar'))
                                    <p class="text-danger"> {{ $errors->first('hero_title.ar') }} </p>
                                @endif
                            </div>

                            <!-- Hero Subtitle -->
                            <div class="form-group">
                                <label for="hero_sub_title_en">Hero Subtitle (EN)</label>
                                <input type="text" class="form-control" id="hero_sub_title_en"
                                    name="hero_sub_title[en]"
                                    value="{{ $page->getTranslation('hero_sub_title', 'en') }}">
                                @if ($errors->has('hero_sub_title.en'))
                                    <p class="text-danger"> {{ $errors->first('hero_sub_title.en') }} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="hero_sub_title_ar">Hero Subtitle (AR)</label>
                                <input type="text" class="form-control" id="hero_sub_title_ar"
                                    name="hero_sub_title[ar]"
                                    value="{{ $page->getTranslation('hero_sub_title', 'ar') }}">
                                @if ($errors->has('hero_sub_title.ar'))
                                    <p class="text-danger"> {{ $errors->first('hero_sub_title.ar') }} </p>
                                @endif
                            </div>

                            <!-- Hero Description -->
                            <div class="form-group">
                                <label for="hero_description_en">Hero Description (EN)</label>
                                <textarea class="form-control" id="hero_description_en" name="hero_description[en]" rows="3">{{ $page->getTranslation('hero_description', 'en') }}</textarea>
                                @if ($errors->has('hero_description.en'))
                                    <p class="text-danger"> {{ $errors->first('hero_description.en') }} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="hero_description_ar">Hero Description (AR)</label>
                                <textarea class="form-control" id="hero_description_ar" name="hero_description[ar]" rows="3">{{ $page->getTranslation('hero_description', 'ar') }}</textarea>
                                @if ($errors->has('hero_description.ar'))
                                    <p class="text-danger"> {{ $errors->first('hero_description.ar') }} </p>
                                @endif
                            </div>

                            <!-- SEO & Extras -->
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title"
                                    value="{{ $page->meta_title }}">
                                @if ($errors->has('meta_title'))
                                    <p class="text-danger"> {{ $errors->first('meta_title') }} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ $page->meta_description }}</textarea>
                                @if ($errors->has('meta_description'))
                                    <p class="text-danger"> {{ $errors->first('meta_description') }} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                    value="{{ $page->meta_keywords }}">
                                @if ($errors->has('meta_keywords'))
                                    <p class="text-danger"> {{ $errors->first('meta_keywords') }} </p>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Page</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
