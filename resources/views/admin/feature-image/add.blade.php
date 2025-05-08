@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2 card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Add') }} {{ $group->name }} {{ __('Feature Image') }}
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.feature-image.list', $group->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Feature Image List') }}
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.feature-image.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="group_id" value="{{ $group->id }}">
                                <div class="row">

                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="title">{{ __('Title') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <p class="text-danger"> {{ $errors->first('title') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="subtitle">{{ __('Subtitle') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="subtitle" id="subtitle"
                                            placeholder="{{ __('Subtitle') }}" value="{{ old('subtitle') }}">
                                        @if ($errors->has('subtitle'))
                                            <p class="text-danger"> {{ $errors->first('subtitle') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="description">{{ __('Description') }}<span
                                                class="text-danger">*</span></label>

                                        <textarea class="form-control" name="description" id="description" placeholder="Description">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <p class="text-danger"> {{ $errors->first('description') }} </p>
                                        @endif
                                    </div>


                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="order_no">{{ __('Order') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="number" class="form-control" name="order_no" id="order_no"
                                            placeholder="{{ __('Order') }}" value="{{ old('order_no') }}">
                                        @if ($errors->has('order_no'))
                                            <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="status" class="control-label">{{ __('Status') }}<span
                                                class="text-danger">*</span></label>

                                        <select class="form-control" name="status" id="status">
                                            <option value="inactive">{{ __('InActive') }}</option>
                                            <option value="active">{{ __('Active') }}</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="image">{{ __('Image') }}<span
                                                class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label class="custom-file-label"
                                                    for="image">{{ __('Choose New Image') }}</label>
                                                <input type="file"
                                                    class="custom-file-input up-img form-control" name="image"
                                                    id="image">
                                                <img class="mw-400 mb-3 show-img img-demo mt-2"
                                                    src="{{ asset('assets/admin/img/img-demo.jpg') }}"
                                                    alt="">
                                                @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <button type="submit"
                                            class="btn btn-primary btn-sm float-right"><i class="bi bi-plus-lg"></i> {{ __('Save') }}</button>
                                    </div>
                                </div>


                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
@endsection
