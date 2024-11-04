@extends('admin.layouts.master')
@section('title', 'Edit Services')
@section('content')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Edit Services') }} </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Services') }}</li>
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
                            <h3 class="card-title mt-1">{{ __('Edit Services') }}</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.service.category.index') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.service.category.update', $service->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-sm-12 control-label">{{ __('Services Name') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" id="name" class="form-control" name="name"
                                            value="{{ old('name', $service->name) }}"
                                            placeholder="{{ __('Services Name') }}">
                                        @if ($errors->has('name'))
                                            <p class="text-danger"> {{ $errors->first('name') }} </p>
                                        @endif
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-12 control-label">{{ __('Status') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select id="status" name="status" class="form-control"
                                            value="{{ old('status', $service->status) }}">
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="published">Published</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                                        @endif

                                    </div>

                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <button type="submit"
                                            class="btn btn-primary btn btn-sm">{{ __('Add') }}</button>
                                    </div>
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
