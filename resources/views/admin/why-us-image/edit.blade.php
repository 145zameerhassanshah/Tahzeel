@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2 card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Edit WhyUsImage') }}
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.why-us-image.list', ['id' => $whyUs->group_id]) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ $whyUs->group->name }} {{ __('WhyUsImage') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.why-us-image.update', $whyUs->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="title">{{ __('Title') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="{{ __('Title') }}" value="{{ old('title') ?? json_decode($whyUs->title)->en }}">
                                        @if ($errors->has('title'))
                                            <p class="text-danger"> {{ $errors->first('title') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="description">{{ __('Description') }}<span
                                                class="text-danger">*</span></label>

                                        <textarea class="form-control" name="description" id="description" placeholder="Description">{{ old('description') ?? json_decode($whyUs->description)->en }}</textarea>
                                        @if ($errors->has('description'))
                                            <p class="text-danger"> {{ $errors->first('description') }} </p>
                                        @endif
                                    </div>


                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="order_no">{{ __('Order') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="number" class="form-control" name="order_no" id="order_no"
                                            placeholder="{{ __('Order') }}" value="{{ old('order_no') ?? $whyUs->order_no }}">
                                        @if ($errors->has('order_no'))
                                            <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="status" class="control-label">{{ __('Status') }}<span
                                                class="text-danger">*</span></label>

                                        <select class="form-control" name="status" id="status">
                                            <option value="inactive" {{ $whyUs->status == 'inactive' ? 'selected' : '' }}>{{ __('InActive') }}</option>
                                            <option value="active" {{ $whyUs->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                                        @endif
                                    </div>

                                    <!-- Image Upload Field -->
                                    <div class="col-md-12">
                                        <label for="image">{{ __('Image') }}</label>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label class="custom-file-label"
                                                    for="image">{{ __('Choose New Image') }}</label>
                                                <input type="file" class="custom-file-input up-img form-control"
                                                    name="image" id="image">
                                                <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                    src="{{ asset('assets/admin/uploads/why_us_image/' . $whyUs->image) }}"
                                                    alt="">
                                                @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <button type="submit"
                                            class="btn btn-sm btn-primary float-right"><i class="bi bi-arrow-clockwise"></i> {{ __('Update') }}</button>
                                    </div>
                                </div>


                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
@endsection
