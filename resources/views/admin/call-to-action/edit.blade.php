@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2 card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Edit CallToActions') }}
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.call-to-action.list', ['id' => $call_to_action->group_id]) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ $call_to_action->group->name }} {{ __('CallToActions') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.call-to-action.update', $call_to_action->id) }}" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Title') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="title"
                                            placeholder="{{ __('Title') }}" value="{{ old('title') ?? json_decode($call_to_action->title)->en }}">
                                        @if ($errors->has('title'))
                                            <p class="text-danger"> {{ $errors->first('title') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Subtitle') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="subtitle"
                                            placeholder="{{ __('Subtitle') }}" value="{{ old('subtitle') ?? json_decode($call_to_action->subtitle)->en }}">
                                        @if ($errors->has('subtitle'))
                                            <p class="text-danger"> {{ $errors->first('subtitle') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Button Text') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="button_text"
                                            placeholder="{{ __('Button Text') }}" value="{{ old('button_text') ?? json_decode($call_to_action->button_text)->en }}">
                                        @if ($errors->has('button_text'))
                                            <p class="text-danger"> {{ $errors->first('button_text') }} </p>
                                        @endif
                                    </div>


                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Button Link') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="button_link"
                                            placeholder="{{ __('Button Link') }}" value="{{ old('button_link') ?? $call_to_action->button_link }}">
                                        @if ($errors->has('button_link'))
                                            <p class="text-danger"> {{ $errors->first('button_link') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="status" class="control-label">{{ __('Status') }}<span
                                                class="text-danger">*</span></label>

                                        <select class="form-control" name="status">
                                            <option value="inactive" {{ $call_to_action->status == 'inactive' ? 'selected' : '' }}>{{ __('InActive') }}</option>
                                            <option value="active" {{ $call_to_action->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
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
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
@endsection
