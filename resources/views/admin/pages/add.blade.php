@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Add Page</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.page.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Slug -->
                                <div class="form-group">
                                    <label for="slug">Slug <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="slug" name="slug" required>
                                    @if ($errors->has('slug'))
                                        <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                    @endif
                                </div>

                                <!-- Title -->
                                <div class="form-group">
                                    <label for="title_en">Title (EN) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title_en" name="title[en]" required>
                                    @if ($errors->has('title.en'))
                                        <p class="text-danger"> {{ $errors->first('title.en') }} </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="title_ar">Title (AR) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title_ar" name="title[ar]" required>
                                    @if ($errors->has('title.ar'))
                                        <p class="text-danger"> {{ $errors->first('title.ar') }} </p>
                                    @endif
                                </div>

                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description_en">Description (EN)</label>
                                    <textarea class="form-control" id="description_en" name="description[en]" rows="3"></textarea>
                                    @if ($errors->has('description.en'))
                                        <p class="text-danger"> {{ $errors->first('description.en') }} </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description_ar">Description (AR)</label>
                                    <textarea class="form-control" id="description_ar" name="description[ar]" rows="3"></textarea>
                                    @if ($errors->has('description.ar'))
                                        <p class="text-danger"> {{ $errors->first('description.ar') }} </p>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="order_no">Order Number</label>
                                            <input type="number" class="form-control" id="order_no" name="order_no"
                                                value="1">
                                            @if ($errors->has('order_no'))
                                                <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status">Status <span class="text-danger">*</span></label>
                                            <select id="status" name="status" class="form-control" required>
                                                <option value="draft">Draft</option>
                                                <option value="published">Published</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <p class="text-danger"> {{ $errors->first('status') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="page_link_for">Page Link For <span
                                                    class="text-danger">*</span></label>
                                            <select id="page_link_for" name="page_link_for" class="form-control" required>
                                                <option value="header">Header</option>
                                                <option value="footer">Footer</option>
                                                <option value="services">Services</option>
                                                <option value="none">None</option>
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
                                            <input type="text" class="form-control" id="route_name" name="route_name">
                                            @if ($errors->has('route_name'))
                                                <p class="text-danger"> {{ $errors->first('route_name') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Category Type</label>
                                            <select id="type" name="type" class="form-control" required>
                                                <option value="amer-service">Amer Service</option>
                                                <option value="visa">Visa</option>
                                                <option value="ded">DED</option>
                                                <option value="real-estate">Real Estate</option>
                                            </select>
                                            @if ($errors->has('type'))
                                                <p class="text-danger"> {{ $errors->first('type') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Hero Image -->
                                <div class="form-group">
                                    <label for="hero_image">Hero Image <span class="text-danger">*</span></label>
                                    <input required type="file" class="form-control" id="hero_image"
                                        name="hero_image">
                                    <small class="text-muted">Recommended size: 730x455 px. Formats: jpg, jpeg,
                                        png.</small>
                                    @if ($errors->has('hero_image'))
                                        <p class="text-danger"> {{ $errors->first('hero_image') }} </p>
                                    @endif
                                </div>

                                <!-- Hero Title -->
                                <div class="form-group">
                                    <label for="hero_title_en">Hero Title (EN)</label>
                                    <input type="text" class="form-control" id="hero_title_en" name="hero_title[en]">
                                    @if ($errors->has('hero_title.en'))
                                        <p class="text-danger"> {{ $errors->first('hero_title.en') }} </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="hero_title_ar">Hero Title (AR)</label>
                                    <input type="text" class="form-control" id="hero_title_ar" name="hero_title[ar]">
                                    @if ($errors->has('hero_title.ar'))
                                        <p class="text-danger"> {{ $errors->first('hero_title.ar') }} </p>
                                    @endif
                                </div>

                                <!-- Hero Subtitle -->
                                <div class="form-group">
                                    <label for="hero_sub_title_en">Hero Subtitle (EN)</label>
                                    <input type="text" class="form-control" id="hero_sub_title_en"
                                        name="hero_sub_title[en]">
                                    @if ($errors->has('hero_sub_title.en'))
                                        <p class="text-danger"> {{ $errors->first('hero_sub_title.en') }} </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="hero_sub_title_ar">Hero Subtitle (AR)</label>
                                    <input type="text" class="form-control" id="hero_sub_title_ar"
                                        name="hero_sub_title[ar]">
                                    @if ($errors->has('hero_sub_title.ar'))
                                        <p class="text-danger"> {{ $errors->first('hero_sub_title.ar') }} </p>
                                    @endif
                                </div>

                                <!-- Hero Description -->
                                <div class="form-group">
                                    <label for="hero_description_en">Hero Description (EN)</label>
                                    <textarea class="form-control" id="hero_description_en" name="hero_description[en]" rows="3"></textarea>
                                    @if ($errors->has('hero_description.en'))
                                        <p class="text-danger"> {{ $errors->first('hero_description.en') }} </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="hero_description_ar">Hero Description (AR)</label>
                                    <textarea class="form-control" id="hero_description_ar" name="hero_description[ar]" rows="3"></textarea>
                                    @if ($errors->has('hero_description.ar'))
                                        <p class="text-danger"> {{ $errors->first('hero_description.ar') }} </p>
                                    @endif
                                </div>

                                <!-- SEO & Extras -->
                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title">
                                    @if ($errors->has('meta_title'))
                                        <p class="text-danger"> {{ $errors->first('meta_title') }} </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea class="form-control" id="meta_description" name="meta_description" rows="3"></textarea>
                                    @if ($errors->has('meta_description'))
                                        <p class="text-danger"> {{ $errors->first('meta_description') }} </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords">
                                    @if ($errors->has('meta_keyword'))
                                        <p class="text-danger"> {{ $errors->first('meta_keyword') }} </p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Page</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
