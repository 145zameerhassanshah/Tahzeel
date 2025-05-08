@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2 card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Add') }} {{ $group->name }} {{ __('Intro Sections') }}
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.intro_section.index') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Intro Section List') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.hero_section.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="background_images" class="control-label">{{ __('Background Images') }}<span class="text-danger">*</span></label>
                                        <input type="file" name="background_image" id="background_images" class="form-control">
                                        @if ($errors->has('background_image'))
                                            <p class="text-danger"> {{ $errors->first('background_image') }} </p>
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
