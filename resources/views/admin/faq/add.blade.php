@extends('admin.layouts.master')
@section('title', 'Add FAQ')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Add New FAQ') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>
                                {{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('FAQs') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('faqs.store') }}" method="post">
                        @csrf
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('Add FAQ') }}</h3>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="group_id" value="{{ $group->id }}">

                                <div class="col-12 mt-2">
                                    <label class="control-label">{{ __('Order') }}<span
                                            class="text-danger">*</span></label>

                                    <input type="number" class="form-control" name="order_no"
                                        placeholder="{{ __('Order') }}" value="{{ old('order_no') }}">
                                    @if ($errors->has('order_no'))
                                        <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                                    @endif
                                </div>

                                <!-- Question Fields -->
                                <div class="form-group">
                                    <label for="question_en">{{ __('Question (English)') }}</label>
                                    <input type="text" name="question[en]" id="question_en" class="form-control"
                                        placeholder="Enter question in English" required>
                                    @error('question.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="question_ar">{{ __('Question (Arabic)') }}</label>
                                    <input type="text" name="question[ar]" id="question_ar" class="form-control"
                                        placeholder="Enter question in Arabic" required>
                                    @error('question.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Answer Fields -->
                                <div class="form-group">
                                    <label for="ans_en">{{ __('Answer (English)') }}</label>
                                    <textarea name="answer[en]" id="ans_en" class="form-control" placeholder="Enter answer in English" rows="4"
                                        required></textarea>
                                    @error('ans.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="ans_ar">{{ __('Answer (Arabic)') }}</label>
                                    <textarea name="answer[ar]" id="ans_ar" class="form-control" placeholder="Enter answer in Arabic" rows="4"
                                        required></textarea>
                                    @error('ans.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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


                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success">{{ __('Add FAQ') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
