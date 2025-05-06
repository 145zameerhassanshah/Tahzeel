@extends('admin.layouts.master')
@section('title', 'Edit Block')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{ route('admin.block.update', $block->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- For Laravel update route -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-0">Block Page - Edit Block</h5>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <!-- Title Fields -->
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="title_en">{{ __('Title (English)') }}<span class="text-danger">*</span></label>
                                            <input type="text" id="title_en" class="form-control" name="title[en]" placeholder="Enter Title in English" value="{{ old('title.en', $block->getTranslation('title', 'en')) }}" required>
                                            @error('title.en')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="title_ar">{{ __('Title (Arabic)') }}<span class="text-danger">*</span></label>
                                            <input type="text" id="title_ar" class="form-control" name="title[ar]" placeholder="Enter Title in Arabic" value="{{ old('title.ar', $block->getTranslation('title', 'ar')) }}" required>
                                            @error('title.ar')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Subtitle Fields -->
                                        <div class="col-md-6 mb-3">
                                            <label for="subtitle_en">{{ __('Subtitle (English)') }}<span class="text-danger">*</span></label>
                                            <input type="text" id="subtitle_en" class="form-control" name="subtitle[en]" placeholder="Enter Subtitle in English" value="{{ old('subtitle.en', $block->getTranslation('subtitle', 'en')) }}" required>
                                            @error('subtitle.en')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="subtitle_ar">{{ __('Subtitle (Arabic)') }}<span class="text-danger">*</span></label>
                                            <input type="text" id="subtitle_ar" class="form-control" name="subtitle[ar]" placeholder="Enter Subtitle in Arabic" value="{{ old('subtitle.ar', $block->getTranslation('subtitle', 'ar')) }}" required>
                                            @error('subtitle.ar')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-6">
                                            <label for="image">{{ __('Image') }}</label>
                                            <div class="form-group">
                                                @if($block->image)
                                                    <img src="{{ asset('storage/'.$block->image) }}" alt="Current Image" class="mb-2" style="max-width: 150px;">
                                                @endif
                                                <div class="col-sm-12">
                                                    <label class="custom-file-label" for="image">{{ __('Choose New Image') }}</label>
                                                    <input type="file" class="custom-file-input up-img form-control" name="image" id="image">
                                                    @error('image')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Icon -->
                                        <div class="col-md-6">
                                            <label for="icon">{{ __('Icon') }}</label>
                                            <div class="form-group">
                                                @if($block->icon)
                                                    <img src="{{ asset('storage/'.$block->icon) }}" alt="Current Icon" class="mb-2" style="max-width: 150px;">
                                                @endif
                                                <div class="col-sm-12">
                                                    <label class="custom-file-label" for="icon">{{ __('Choose New Icon') }}</label>
                                                    <input type="file" class="custom-file-input up-img form-control" name="icon" id="icon">
                                                    @error('icon')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Features -->
                                        <div class="col-md-12 mb-3">
                                            <label>{{ __('Features') }}</label>
                                            <div id="features-container">
                                                @foreach($block->features as $index => $feature)
                                                    <div class="row mb-3 feature-group border rounded p-2">
                                                        <div class="col-md-4">
                                                            <input type="text" name="features[{{ $index }}][en]" class="form-control" placeholder="Title in English" value="{{ old('features.'.$index.'.en', $feature->getTranslation('title', 'en')) }}" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" name="features[{{ $index }}][ar]" class="form-control" placeholder="Title in Arabic" value="{{ old('features.'.$index.'.ar', $feature->getTranslation('title', 'ar')) }}" required>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="number" name="features[{{ $index }}][order]" class="form-control" placeholder="Order No" value="{{ old('features.'.$index.'.order', $feature->order_no) }}" required>
                                                        </div>
                                                        <div class="col-md-2 d-flex align-items-end">
                                                            <button type="button" class="btn btn-danger btn-sm remove-feature">Remove</button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button type="button" class="btn btn-secondary mt-2" id="add-feature">Add Feature</button>
                                        </div>

                                        <!-- Description Fields -->
                                        <div class="col-md-12 mb-3">
                                            <label for="description_en">{{ __('Description (English)') }}</label>
                                            <textarea id="description_en" class="form-control summernote" name="description[en]" rows="6">{{ old('description.en', $block->getTranslation('description', 'en')) }}</textarea>
                                            @error('description.en')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="description_ar">{{ __('Description (Arabic)') }}</label>
                                            <textarea id="description_ar" class="form-control summernote" name="description[ar]" rows="6">{{ old('description.ar', $block->getTranslation('description', 'ar')) }}</textarea>
                                            @error('description.ar')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg" style="border-radius: 10px;">{{ __('Update Block') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script>
$(document).ready(function() {
    let featureIndex = $('#features-container .feature-group').length;

    $('#add-feature').click(function() {
        $('#features-container').append(`
            <div class="row mb-3 feature-group border rounded p-2">
                <div class="col-md-4">
                    <input type="text" name="features[${featureIndex}][en]" class="form-control" placeholder="Title in English" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="features[${featureIndex}][ar]" class="form-control" placeholder="Title in Arabic" required>
                </div>
                <div class="col-md-2">
                    <input type="number" name="features[${featureIndex}][order]" class="form-control" placeholder="Order No" required>
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-danger btn-sm remove-feature">Remove</button>
                </div>
            </div>
        `);
        featureIndex++;
    });

    $(document).on('click', '.remove-feature', function() {
        $(this).closest('.feature-group').remove();
    });
});
</script>
@endsection