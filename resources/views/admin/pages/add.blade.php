@extends('admin.layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <form action="{{ route('admin.page.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Hero Image -->
                            <div class="form-group">
                                <label>Hero Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="hero_image">
                                <small class="text-muted">Recommended size: 730x455 px. Formats: jpg, jpeg, png.</small>
                            </div>
                            <!-- Title -->
                            <div class="form-group">
                                <label>Title (EN) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title[en]" required>
                            </div>
                            <div class="form-group">
                                <label>Title (AR) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title[ar]" required>
                            </div>
                            <!-- Slug -->
                            <div class="form-group">
                                <label>Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="slug" required>
                            </div>
                            <!-- Description -->
                            <div class="form-group">
                                <label>Description (EN)</label>
                                <textarea class="form-control" name="description[en]" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Description (AR)</label>
                                <textarea class="form-control" name="description[ar]" rows="3"></textarea>
                            </div>
                            <!-- Hero Title -->
                            <div class="form-group">
                                <label>Hero Title (EN)</label>
                                <input type="text" class="form-control" name="hero_title[en]">
                            </div>
                            <div class="form-group">
                                <label>Hero Title (AR)</label>
                                <input type="text" class="form-control" name="hero_title[ar]">
                            </div>
                            <!-- Hero Subtitle -->
                            <div class="form-group">
                                <label>Hero Subtitle (EN)</label>
                                <input type="text" class="form-control" name="hero_sub_title[en]">
                            </div>
                            <div class="form-group">
                                <label>Hero Subtitle (AR)</label>
                                <input type="text" class="form-control" name="hero_sub_title[ar]">
                            </div>
                            <!-- Hero Description -->
                            <div class="form-group">
                                <label>Hero Description (EN)</label>
                                <textarea class="form-control" name="hero_description[en]" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hero Description (AR)</label>
                                <textarea class="form-control" name="hero_description[ar]" rows="3"></textarea>
                            </div>
                            <!-- Page Settings -->
                            <div class="form-group">
                                <label>Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control" required>
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                </select>
                            </div>
                            <!-- Type -->
                            <select name="type" class="form-control" required>
                                <option value="amer-service">Amer Service</option>
                                <option value="visa">Visa</option>
                                <option value="ded">DED</option>
                                <option value="real-estate">Real Estate</option>
                            </select>
                            <div class="form-group">
                                <label>Page Link For <span class="text-danger">*</span></label>
                                <select name="page_link_for" class="form-control" required>
                                    <option value="header">Header</option>
                                    <option value="footer">Footer</option>
                                    <option value="services">Services</option>
                                    <option value="none">None</option>
                                </select>
                            </div>
                            <!-- SEO & Extras -->
                            <div class="form-group">
                                <label>Route Name</label>
                                <input type="text" class="form-control" name="route_name">
                            </div>
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" class="form-control" name="meta_title">
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea class="form-control" name="meta_description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords">
                            </div>
                            <div class="form-group">
                                <label>Meta Tags</label>
                                <input type="text" class="form-control" name="meta_tags">
                            </div>
                            <!-- Order No -->
                            <div class="form-group">
                                <label>Order Number</label>
                                <input type="number" class="form-control" name="order_no" value="0">
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