@extends('admin.layouts.master')
@section('title', 'Add Brand')
@section('content')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Add New Group') }} </h1>
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
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.group.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Enter Brand Name" value="{{ old('name') }}">
                                            </div>
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="type">Type <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-info-circle"></i></span>
                                                <select name="type" class="form-control select2" id="type" required>
                                                    <option value="" disabled {{ old('type') ? '' : 'selected' }}>Select Group Type</option>
                                                    @foreach ($groups as $group)
                                                        <option value="{{ $group->type }}" {{ old('type') == $group->type ? 'selected' : '' }}>
                                                            {{ ucfirst(str_replace('_', ' ', $group->type)) }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            @if ($errors->has('type'))
                                                <p class="text-danger">{{ $errors->first('type') }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="description">Meta Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="3"
                                                placeholder="Enter Description">{{ old('description') }}</textarea>
                                        </div>
                                        @if ($errors->has('description'))
                                            <p class="text-danger">{{ $errors->first('description') }}</p>
                                        @endif
                                    </div>


                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-sm float-right">  <i class="fas fa-plus"></i> {{ __('Add Brand') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection
@section('js')
    <script>
        document.getElementById("name").addEventListener("keyup", function() {
            let slug = this.value.toLowerCase().trim().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            document.getElementById("slug").value = slug;
        });
    </script>
@endsection
