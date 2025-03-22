@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2 card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Add') }} {{ $group->name }} {{ __('Procedures') }}
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.procedure.list', $group->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Procedure List') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.procedure.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="group_id" value="{{ $group->id }}">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="control-label">{{ __('Icon') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="icon"
                                            placeholder="{{ __('Icon') }}" value="{{ old('icon') }}">
                                        @if ($errors->has('icon'))
                                            <p class="text-danger"> {{ $errors->first('icon') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Title') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="title"
                                            placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <p class="text-danger"> {{ $errors->first('title') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Subtitle') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="subtitle"
                                            placeholder="{{ __('Subtitle') }}" value="{{ old('subtitle') }}">
                                        @if ($errors->has('subtitle'))
                                            <p class="text-danger"> {{ $errors->first('subtitle') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Description') }}<span
                                                class="text-danger">*</span></label>

                                        <textarea class="form-control" name="description" placeholder="Description">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <p class="text-danger"> {{ $errors->first('description') }} </p>
                                        @endif
                                    </div>


                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Order') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="number" class="form-control" name="order_no"
                                            placeholder="{{ __('Order') }}" value="{{ old('order_no') }}">
                                        @if ($errors->has('order_no'))
                                            <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="status" class="control-label">{{ __('Status') }}<span
                                                class="text-danger">*</span></label>

                                        <select class="form-control" name="status">
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
