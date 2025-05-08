@extends('admin.layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline mt-3">
                    <div class="card-body">
                        <form action="{{ route('admin.page.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Slug -->
                            <div class="form-group">
                                <label for="slug">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $page->slug }}" required>
                            </div>

                            <!-- Title -->
                            <div class="form-group">
                                <label for="title_en">Title (EN) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title_en" name="title[en]" value="{{ $page->getTranslation('title', 'en') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title_ar">Title (AR) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title_ar" name="title[ar]" value="{{ $page->getTranslation('title', 'ar') }}" required>
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label for="description_en">Description (EN)</label>
                                <textarea class="form-control" id="description_en" name="description[en]" rows="3">{{ $page->getTranslation('description', 'en') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="description_ar">Description (AR)</label>
                                <textarea class="form-control" id="description_ar" name="description[ar]" rows="3">{{ $page->getTranslation('description', 'ar') }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="order_no">Order Number</label>
                                        <input type="number" class="form-control" id="order_no" name="order_no" value="{{ $page->order_no ?? 0 }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select id="status" name="status" class="form-control" required>
                                            <option value="draft" {{ $page->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                            <option value="published" {{ $page->status == 'published' ? 'selected' : '' }}>Published</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="page_link_for">Page Link For <span class="text-danger">*</span></label>
                                        <select id="page_link_for" name="page_link_for" class="form-control" required>
                                            <option value="header" {{ $page->page_link_for == 'header' ? 'selected' : '' }}>Header</option>
                                            <option value="footer" {{ $page->page_link_for == 'footer' ? 'selected' : '' }}>Footer</option>
                                            <option value="services" {{ $page->page_link_for == 'services' ? 'selected' : '' }}>Services</option>
                                            <option value="none" {{ $page->page_link_for == 'none' ? 'selected' : '' }}>None</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="route_name">Route Name</label>
                                        <input type="text" class="form-control" id="route_name" name="route_name" value="{{ $page->route_name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">Category Type</label>
                                        <select id="type" name="type" class="form-control" required>
                                            <option value="amer-service" {{ $page->type == 'amer-service' ? 'selected' : '' }}>Amer Service</option>
                                            <option value="visa" {{ $page->type == 'visa' ? 'selected' : '' }}>Visa</option>
                                            <option value="ded" {{ $page->type == 'ded' ? 'selected' : '' }}>DED</option>
                                            <option value="real-estate" {{ $page->type == 'real-estate' ? 'selected' : '' }}>Real Estate</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Hero Image -->
                            <div class="form-group">
                                <label for="hero_image">Hero Image</label>
                                <input type="file" class="form-control" id="hero_image" name="hero_image">
                                @if($page->hero_image)
                                    <img src="{{ asset('assets/admin/img/' . $page->hero_image) }}" width="120" class="mt-2">
                                @endif
                                <small class="text-muted">Recommended size: 730x455 px. Formats: jpg, jpeg, png.</small>
                            </div>

                            <!-- Hero Title -->
                            <div class="form-group">
                                <label for="hero_title_en">Hero Title (EN)</label>
                                <input type="text" class="form-control" id="hero_title_en" name="hero_title[en]" value="{{ $page->getTranslation('hero_title', 'en') }}">
                            </div>
                            <div class="form-group">
                                <label for="hero_title_ar">Hero Title (AR)</label>
                                <input type="text" class="form-control" id="hero_title_ar" name="hero_title[ar]" value="{{ $page->getTranslation('hero_title', 'ar') }}">
                            </div>

                            <!-- Hero Subtitle -->
                            <div class="form-group">
                                <label for="hero_sub_title_en">Hero Subtitle (EN)</label>
                                <input type="text" class="form-control" id="hero_sub_title_en" name="hero_sub_title[en]" value="{{ $page->getTranslation('hero_sub_title', 'en') }}">
                            </div>
                            <div class="form-group">
                                <label for="hero_sub_title_ar">Hero Subtitle (AR)</label>
                                <input type="text" class="form-control" id="hero_sub_title_ar" name="hero_sub_title[ar]" value="{{ $page->getTranslation('hero_sub_title', 'ar') }}">
                            </div>

                            <!-- Hero Description -->
                            <div class="form-group">
                                <label for="hero_description_en">Hero Description (EN)</label>
                                <textarea class="form-control" id="hero_description_en" name="hero_description[en]" rows="3">{{ $page->getTranslation('hero_description', 'en') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="hero_description_ar">Hero Description (AR)</label>
                                <textarea class="form-control" id="hero_description_ar" name="hero_description[ar]" rows="3">{{ $page->getTranslation('hero_description', 'ar') }}</textarea>
                            </div>

                            <!-- SEO & Extras -->
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $page->meta_title }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ $page->meta_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $page->meta_keywords }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Page</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
