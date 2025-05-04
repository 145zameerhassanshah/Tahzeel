@extends('admin.layouts.master')
@section('title', 'Edit Brand')
@section('content')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Edit Brand') }} </h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.brand.update', $brand->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Enter Brand Name" value="{{ old('name', $brand->name) }}">
                                            </div>
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="slug">Slug <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                <input type="text" class="form-control" name="slug" id="slug"
                                                    placeholder="Enter Slug" value="{{ old('slug', $brand->slug) }}">
                                            </div>
                                            @if ($errors->has('slug'))
                                                <p class="text-danger">{{ $errors->first('slug') }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="is_featured">Featured <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-star-fill"></i></span>
                                                <select class="form-control" name="is_featured" id="is_featured" required>
                                                    <option value="0"
                                                        {{ isset($brand) && $brand->is_featured == 0 ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                    <option value="1"
                                                        {{ isset($brand) && $brand->is_featured == 1 ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                </select>
                                                @if ($errors->has('is_featured'))
                                                    <p class="text-danger">{{ $errors->first('is_featured') }}</p>
                                                @endif
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="status">Status</label><span class="text-danger">*</span>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-toggle-on"></i></span>
                                                <select id="status" class="form-control" name="status">
                                                    <option>Select Status</option>
                                                    <option value="active"
                                                        {{ $brand->status == 'active' ? 'selected' : '' }}>
                                                        Active
                                                    </option>
                                                    <option value="inactive"
                                                        {{ $brand->status == 'inactive' ? 'selected' : '' }}>
                                                        Inactive
                                                    </option>
                                                </select>
                                                @if ($errors->has('status'))
                                                    <p class="text-danger">{{ $errors->first('status') }}</p>
                                                @endif
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="order_no">Order No </label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i
                                                        class="bi bi-sort-numeric-down"></i></span>
                                                <input type="number" class="form-control" name="order_no" id="order_no"
                                                    placeholder="Enter Order No"
                                                    value="{{ old('order_no', $brand->order_no) }}">
                                            </div>
                                            @if ($errors->has('order_no'))
                                                <p class="text-danger">{{ $errors->first('order_no') }}</p>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="video_url">Video URL</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-play-circle"></i></span>
                                                <input type="text" class="form-control" name="video_url" id="video_url"
                                                    placeholder="Enter Video URL"
                                                    value="{{ old('video_url', $brand->video_url) }}">
                                            </div>
                                            @if ($errors->has('video_url'))
                                                <p class="text-danger">{{ $errors->first('video_url') }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-type"></i></span>
                                                <input type="text" class="form-control" name="meta_title"
                                                    id="meta_title" placeholder="Enter Meta Title"
                                                    value="{{ old('meta_title', $brand->meta_title) }}">
                                            </div>
                                            @if ($errors->has('meta_title'))
                                                <p class="text-danger">{{ $errors->first('meta_title') }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea class="form-control" name="meta_description" id="meta_description" rows="3"
                                                placeholder="Enter Meta Description">{{ old('meta_description', $brand->meta_description) }}</textarea>
                                        </div>
                                        @if ($errors->has('meta_description'))
                                            <p class="text-danger">{{ $errors->first('meta_description') }}</p>
                                        @endif
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="logo" class="control-label">
                                            {{ __('Logo') }}
                                        </label>

                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-file-earmark-image"></i>
                                            </span>
                                            <input type="file" class="form-control up-img" name="logo"
                                                id="logo" accept="image/png, image/jpeg, image/jpg">
                                        </div>

                                        <br>
                                        <img class="mw-400 mb-3 show-img img-demo"
                                            src="{{ asset($brand->logo) }}" alt="Preview Logo">

                                        @if ($errors->has('logo'))
                                            <p class="text-danger"> {{ $errors->first('logo') }} </p>
                                        @endif
                                    </div>


                                    <div class="col-lg-4">
                                        <label for="banner_image" class="control-label">
                                            {{ __('Banner Image') }}
                                        </label>

                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-card-image"></i>
                                            </span>
                                            <input type="file" class="form-control up-img" name="banner_image"
                                                id="banner_image" accept="image/png, image/jpeg, image/jpg">
                                        </div>

                                        <br>
                                        <img class="mw-400 mb-3 show-img img-demo"
                                            src="{{ asset($brand->banner_image) }}"
                                            alt="Preview Banner Image">

                                        @if ($errors->has('banner_image'))
                                            <p class="text-danger"> {{ $errors->first('banner_image') }} </p>
                                        @endif
                                    </div>



                                    <div class="col-lg-4">
                                        <label for="meta_image" class="control-label">
                                            {{ __('Meta Image') }}
                                        </label>

                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-image"></i>
                                            </span>
                                            <input type="file" class="form-control up-img" name="meta_image"
                                                id="meta_image" accept="image/png, image/jpeg, image/jpg">
                                        </div>

                                        <br>
                                        <img class="mw-400 mb-3 show-img img-demo"
                                            src="{{ asset($brand->meta_image) }}"
                                            alt="Preview Meta Image">

                                        @if ($errors->has('meta_image'))
                                            <p class="text-danger"> {{ $errors->first('meta_image') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary float-right">{{ __('Update Brand') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            document.getElementById("name").addEventListener("keyup", function() {
                let slug = this.value.toLowerCase().trim().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                document.getElementById("slug").value = slug;
            });
        </script>

    </section>


@endsection
