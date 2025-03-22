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

                            <div class="col-12 mt-2">
                                <label class="control-label">{{ __('Order') }}<span
                                        class="text-danger">*</span></label>

                                <input type="number" class="form-control" name="order_no"
                                    placeholder="{{ __('Order') }}" value="{{ old('order_no') ?? $faq->order_no }}">
                                @if ($errors->has('order_no'))
                                    <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                @endif
                            </div>

                            <!-- Question Fields -->
                            <div class="form-group">
                                <label for="question_en">{{ __('Question (English)') }}</label>
                                <input type="text" name="question[en]" id="question_en" class="form-control" value="{{ json_decode($faq->question)->en }}" required>
                                @error('question.en')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="question_ar">{{ __('Question (Arabic)') }}</label>
                                <input type="text" name="question[ar]" id="question_ar" class="form-control" value="{{ json_decode($faq->question)->ar }}" required>
                                @error('question.ar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Answer Fields -->
                            <div class="form-group">
                                <label for="ans_en">{{ __('Answer (English)') }}</label>
                                <textarea name="answer[en]" id="ans_en" class="form-control" rows="4" required>{{ json_decode($faq->answer)->en }}</textarea>
                                @error('answer.en')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ans_ar">{{ __('Answer (Arabic)') }}</label>
                                <textarea name="answer[ar]" id="ans_ar" class="form-control" rows="4" required>{{ json_decode($faq->answer)->ar }}</textarea>
                                @error('answer.ar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12 mt-2">
                                <label for="status" class="control-label">{{ __('Status') }}<span
                                        class="text-danger">*</span></label>

                                <select class="form-control" name="status">
                                    <option value="inactive" {{ $faq->status == 'inactive' ? 'selected' : '' }}>{{ __('InActive') }}</option>
                                    <option value="active" {{ $faq->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                </select>
                                @if ($errors->has('status'))
                                    <p class="text-danger"> {{ $errors->first('status') }} </p>
                                @endif
                            </div>


                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-success">{{ __('Update FAQ') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
