@extends('admin.layouts.master')
@section('title', ucwords(str_replace('-', ' ', $slug)) . ' | Page Detail')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">

            <div class="col-md-12">
                {{-- content --}}
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('FAQ Edit') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.faq.update', $faq->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="editFaqQuestionEn">{{ __('Question (English)') }} <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="editFaqQuestionEn" name="question[en]" rows="3">{{ $faq->getTranslation('question', 'en') }}</textarea>
                                    <span class="text-danger error" id="editFaqErrorQuestionEn"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="editFaqQuestionAr">{{ __('Question (Arabic)') }} <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="editFaqQuestionAr" name="question[ar]" rows="3">{{ $faq->getTranslation('question', 'ar') }}</textarea>
                                    <span class="text-danger error" id="editFaqErrorQuestionAr"></span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="editFaqAnswerEn">{{ __('Answer (English)') }} <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="editFaqAnswerEn" name="answer[en]" rows="5">{{ $faq->getTranslation('answer', 'en') }}</textarea>
                                    <span class="text-danger error" id="editFaqErrorAnswerEn"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="editFaqAnswerAr">{{ __('Answer (Arabic)') }} <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="editFaqAnswerAr" name="answer[ar]" rows="5">{{ $faq->getTranslation('answer', 'ar') }}</textarea>
                                    <span class="text-danger error" id="editFaqErrorAnswerAr"></span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="editFaqOrderNo">{{ __('Order Number') }}</label>
                                    <input type="number" class="form-control" id="editFaqOrderNo" name="order_no" value="{{ $faq->order_no ?? 0 }}">
                                    <span class="text-danger error" id="editFaqErrorOrderNo"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="editFaqStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <select class="form-control" id="editFaqStatus" name="status">
                                        <option value="active" {{ $faq->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        <option value="inactive" {{ $faq->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                    </select>
                                    <span class="text-danger error" id="editFaqErrorStatus"></span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-sm float-right" type="submit">{{ __('Submit') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
