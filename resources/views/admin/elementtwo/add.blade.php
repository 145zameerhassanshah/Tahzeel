@extends('admin.layouts.master')
@section('title', 'Add Element')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Add New Element') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> {{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Elements') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.element.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Add Element') }}</h3>
                    </div>
                    <div class="card-body">
                        {{-- Element Name --}}
                        <div class="row">
                            <div class="col-md-6">
                                <label>{{ __('Element Name (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" name="name[en]" class="form-control" value="{{ old('name.en') }}" required>
                                @error('name.en') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('Element Name (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" name="name[ar]" class="form-control" value="{{ old('name.ar') }}" required>
                                @error('name.ar') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Element Description --}}
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>{{ __('Description (English)') }}</label>
                                <textarea name="description[en]" class="form-control summernote" rows="4">{{ old('description.en') }}</textarea>
                                @error('description.en') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('Description (Arabic)') }}</label>
                                <textarea name="description[ar]" class="form-control summernote" rows="4">{{ old('description.ar') }}</textarea>
                                @error('description.ar') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Element Image --}}
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>{{ __('Element Image') }}</label>
                                <input type="file" name="image" class="form-control-file">
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        {{-- Element Features --}}
                        <div class="mt-4">
                            <label>{{ __('Element Features') }}</label>
                            <div id="features-container">
                                <div class="row feature-row">
                                    <div class="col-md-5 mb-2">
                                        <input type="text" name="features[0][en]" class="form-control" placeholder="Feature in English" required>
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <input type="text" name="features[0][ar]" class="form-control" placeholder="Feature in Arabic" required>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <button type="button" class="btn btn-success add-feature">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Submit Button --}}
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    let featureIndex = 1;

    document.querySelector('.add-feature').addEventListener('click', function () {
        const container = document.getElementById('features-container');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'feature-row');

        newRow.innerHTML = `
            <div class="col-md-5 mb-2">
                <input type="text" name="features[${featureIndex}][en]" class="form-control" placeholder="Feature in English" required>
            </div>
            <div class="col-md-5 mb-2">
                <input type="text" name="features[${featureIndex}][ar]" class="form-control" placeholder="Feature in Arabic" required>
            </div>
            <div class="col-md-2 mb-2">
                <button type="button" class="btn btn-danger remove-feature">-</button>
            </div>
        `;
        container.appendChild(newRow);

        newRow.querySelector('.remove-feature').addEventListener('click', function () {
            newRow.remove();
        });

        featureIndex++;
    });
</script>
@endpush
