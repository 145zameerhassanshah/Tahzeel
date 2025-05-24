@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Add Call To Action')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Call To Action Add') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.call-to-action.store', ['slug' => $slug]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- Name Field -->
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ctaTitleEn">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="ctaTitleEn" name="title[en]">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="ctaTitleAr">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="ctaTitleAr" name="title[ar]">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="ctaSubtitleEn">{{ __('Subtitle (English)') }}</label>
                                    <input type="text" class="form-control" id="ctaSubtitleEn" name="subtitle[en]">
                                    @error('subtitle.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="ctaSubtitleAr">{{ __('Subtitle (Arabic)') }}</label>
                                    <input type="text" class="form-control" id="ctaSubtitleAr" name="subtitle[ar]">
                                    @error('subtitle.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="ctaButtonTextEn">{{ __('Button Text (English)') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="ctaButtonTextEn" name="button_text[en]">
                                    @error('button_text.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="ctaButtonTextAr">{{ __('Button Text (Arabic)') }} <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" id="ctaButtonTextAr" name="button_text[ar]">
                                    @error('button_text.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <label for="ctaButtonLink">{{ __('Button Link') }} <span class="text-danger">*</span></label>
                                    <input required type="url" class="form-control" id="ctaButtonLink" name="button_link">
                                    @error('button_link')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
    
                                <div class="col-md-4">
                                    <label for="ctaStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select required class="form-control" id="ctaStatus" name="status">
                                        <option value="active">{{ __('Active') }}</option>
                                        <option value="inactive">{{ __('Inactive') }}</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-sm float-right">Submit</button>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
