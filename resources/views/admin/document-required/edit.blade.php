@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2 card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Edit DocumentRequired') }}
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.document-required.list', ['id' => $documentRequired->group_id]) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ $documentRequired->group->name }} {{ __('DocumentRequired') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.document-required.update', $documentRequired->id) }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <label class="control-label" for="icon">{{ __('Icon') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="icon" id="icon"
                                            placeholder="{{ __('Icon') }}" value="{{ old('icon') ?? json_decode($documentRequired->icon)->en }}">
                                        @if ($errors->has('icon'))
                                            <p class="text-danger"> {{ $errors->first('icon') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="title">{{ __('Title') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="{{ __('Title') }}" value="{{ old('title') ?? json_decode($documentRequired->title)->en }}">
                                        @if ($errors->has('title'))
                                            <p class="text-danger"> {{ $errors->first('title') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="description">{{ __('Description') }}<span
                                                class="text-danger">*</span></label>

                                        <textarea class="form-control" name="description" id="description" placeholder="Description">{{ old('description') ?? json_decode($documentRequired->description)->en }}</textarea>
                                        @if ($errors->has('description'))
                                            <p class="text-danger"> {{ $errors->first('description') }} </p>
                                        @endif
                                    </div>


                                    <div class="col-12 mt-2">
                                        <label class="control-label" for="order_no">{{ __('Order') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="number" class="form-control" name="order_no" id="order_no"
                                            placeholder="{{ __('Order') }}" value="{{ old('order_no') ?? $documentRequired->order_no }}">
                                        @if ($errors->has('order_no'))
                                            <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="status" class="control-label">{{ __('Status') }}<span
                                                class="text-danger">*</span></label>

                                        <select class="form-control" name="status" id="status">
                                            <option value="inactive" {{ $documentRequired->status == 'inactive' ? 'selected' : '' }}>{{ __('InActive') }}</option>
                                            <option value="active" {{ $documentRequired->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                                        @endif
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
