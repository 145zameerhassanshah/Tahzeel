@extends('admin.layouts.master')
@section('title', 'Edit FAQ')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Edit FAQ') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('faqs.index') }}">{{ __('FAQs') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Edit FAQ') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Edit FAQ') }}</h3>
                    </div>
                    <form action="{{ route('faqs.update', $faq->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <!-- Page Selection -->
                            <div class="form-group">
                                <label for="page_id">{{ __('Page') }}</label>
                                <select name="page_id" id="page_id" class="form-control">
                                    <option value="" disabled>{{ __('Select Page') }}</option>
                                    @foreach ($pages as $page)
                                        <option value="{{ $page->id }}" {{ $faq->page_id == $page->id ? 'selected' : '' }}>
                                            {{ $page->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('page_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Question Fields -->
                            <div class="form-group">
                                <label for="question_en">{{ __('Question (English)') }}</label>
                                <input type="text" name="question[en]" id="question_en" class="form-control" value="{{ $faq->getTranslation('question', 'en') }}" required>
                                @error('question.en')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="question_ar">{{ __('Question (Arabic)') }}</label>
                                <input type="text" name="question[ar]" id="question_ar" class="form-control" value="{{ $faq->getTranslation('question', 'ar') }}" required>
                                @error('question.ar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Answer Fields -->
                            <div class="form-group">
                                <label for="ans_en">{{ __('Answer (English)') }}</label>
                                <textarea name="ans[en]" id="ans_en" class="form-control" rows="4" required>{{ $faq->getTranslation('ans', 'en') }}</textarea>
                                @error('ans.en')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ans_ar">{{ __('Answer (Arabic)') }}</label>
                                <textarea name="ans[ar]" id="ans_ar" class="form-control" rows="4" required>{{ $faq->getTranslation('ans', 'ar') }}</textarea>
                                @error('ans.ar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-success">{{ __('Update FAQ') }}</button>
                            <a href="{{ route('faqs.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
