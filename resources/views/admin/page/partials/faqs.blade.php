<div class="modal fade" id="faqModal" tabindex="-1" role="dialog" aria-labelledby="faqModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqModalHeading">{{ __('Add FAQ') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="faqModalClose">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="faqForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" id="faqToken" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <input type="hidden" name="page_id" id="faqPageId" value="{{ $page->id }}">
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
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="faqModalCancel" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary" id="faqSubmitBtn">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editFaqModal" tabindex="-1" role="dialog" aria-labelledby="editFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFaqModalHeading">{{ __('Update FAQ') }}</h5>
                <button type="button" class="close" id="editFaqModalClose" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editFaqForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="_method" id="editFaqMethod" value="PUT"> --}}
                    <input type="hidden" name="faq_id" id="editFaqId">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editFaqQuestionEn">{{ __('Question (English)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="editFaqQuestionEn" name="question[en]" rows="3"></textarea>
                                <span class="text-danger error" id="editFaqErrorQuestionEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editFaqQuestionAr">{{ __('Question (Arabic)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="editFaqQuestionAr" name="question[ar]" rows="3"></textarea>
                                <span class="text-danger error" id="editFaqErrorQuestionAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="editFaqAnswerEn">{{ __('Answer (English)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="editFaqAnswerEn" name="answer[en]" rows="5"></textarea>
                                <span class="text-danger error" id="editFaqErrorAnswerEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editFaqAnswerAr">{{ __('Answer (Arabic)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="editFaqAnswerAr" name="answer[ar]" rows="5"></textarea>
                                <span class="text-danger error" id="editFaqErrorAnswerAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="editFaqOrderNo">{{ __('Order Number') }}</label>
                                <input type="number" class="form-control" id="editFaqOrderNo" name="order_no"  value="0">
                                <span class="text-danger error" id="editFaqErrorOrderNo"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="editFaqStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="editFaqStatus" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                                <span class="text-danger error" id="editFaqErrorStatus"></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="editFaqModalCancel" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary" id="editFaqSubmitBtn">{{ __('Update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('All FAQs') }}</h3>

                        <button class="btn btn-primary btn-sm float-right"
                            data-toggle="modal" data-target="#faqModal">
                            <i class="fas fa-plus"></i> {{ __('Add New') }}
                        </button>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th>{{ __('Id') }}</th>
                                    <th>{{ __('Question') }}</th>
                                    <th>{{ __('Answer') }}</th>
                                    <th>{{ __('Order') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="faqsTableBody">
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading FAQs...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>