@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2 card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Edit') }} {{ $section_title->group->name }}
                                {{ __('Section Titles') }}
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.section_title.list', ['id' => $section_title->group_id]) }}"
                                    class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Section Title List') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal"
                                action="{{ route('admin.section_title.update', $section_title->id) }}" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Title') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="title"
                                            placeholder="{{ __('Title') }}"
                                            value="{{ old('title') ?? json_decode($section_title->title)->en }}">
                                        @if ($errors->has('title'))
                                            <p class="text-danger"> {{ $errors->first('title') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label class="control-label">{{ __('Subtitle') }}<span
                                                class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="subtitle"
                                            placeholder="{{ __('Subtitle') }}"
                                            value="{{ old('subtitle') ?? json_decode($section_title->subtitle)->en }}">
                                        @if ($errors->has('subtitle'))
                                            <p class="text-danger"> {{ $errors->first('subtitle') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="type" class="control-label">{{ __('Type') }}<span
                                                class="text-danger">*</span></label>

                                        <select class="form-control" name="type">
                                            @foreach ($types as $type)
                                                <option value="{{ $type }}" {{ $type == $section_title->type ? 'selected' : '' }}>
                                                    {{ ucfirst(str_replace('_', ' ', $type)) }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('type'))
                                            <p class="text-danger"> {{ $errors->first('type') }} </p>
                                        @endif
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="status" class="control-label">{{ __('Status') }}<span
                                                class="text-danger">*</span></label>

                                        <select class="form-control" name="status">
                                            <option value="inactive" {{ $section_title->status == 'inactive' ? 'selected' : '' }}>{{ __('InActive') }}</option>
                                            <option value="active" {{ $section_title->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                                        @endif
                                    </div>
                                    <div class="col-12 mt-2">
                                        <button type="submit" class="btn btn-primary btn-sm float-right"><i
                                                class="bi bi-arrow-clockwise"></i> {{ __('Update') }}</button>
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
