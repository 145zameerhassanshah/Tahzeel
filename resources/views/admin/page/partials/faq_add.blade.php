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
                        <h3 class="card-title mt-1">{{ __('FAQ List') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.faq.store', ['slug' => $slug]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="faqQuestionEn">{{ __('Question (English)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="faqQuestionEn" name="question[en]" rows="3"></textarea>
                                <span class="text-danger error" id="faqErrorQuestionEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="faqQuestionAr">{{ __('Question (Arabic)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="faqQuestionAr" name="question[ar]" rows="3"></textarea>
                                <span class="text-danger error" id="faqErrorQuestionAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="faqAnswerEn">{{ __('Answer (English)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="faqAnswerEn" name="answer[en]" rows="5"></textarea>
                                <span class="text-danger error" id="faqErrorAnswerEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="faqAnswerAr">{{ __('Answer (Arabic)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="faqAnswerAr" name="answer[ar]" rows="5"></textarea>
                                <span class="text-danger error" id="faqErrorAnswerAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="faqOrderNo">{{ __('Order Number') }}</label>
                                <input type="number" class="form-control" id="faqOrderNo" name="order_no">
                                <span class="text-danger error" id="faqErrorOrderNo"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="faqStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="faqStatus" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                                <span class="text-danger error" id="faqErrorStatus"></span>
                            </div>
                        </div>
                            <div class="row">

                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-sm float-right">Submit</button>
                                </div>
                            </div>


                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
