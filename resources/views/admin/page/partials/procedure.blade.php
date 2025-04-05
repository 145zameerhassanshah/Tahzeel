<div class="modal fade" id="procedureModal" tabindex="-1" role="dialog" aria-labelledby="procedureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="procedureModalHeading">{{ __('Add Procedure') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="procedureModalClose">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="procedureForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" id="procedureToken" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <input type="hidden" name="page_id" id="procedurePageId" value="{{ $page->id }}">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="procedureTitleEn">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="procedureTitleEn" name="title[en]">
                                <span class="text-danger error" id="procedureErrorTitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="procedureTitleAr">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="procedureTitleAr" name="title[ar]">
                                <span class="text-danger error" id="procedureErrorTitleAr"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="procedureSubtitleEn">{{ __('SubTitle (English)') }}</label>
                                <input type="text" class="form-control" id="procedureSubtitleEn" name="subtitle[en]">
                                <span class="text-danger error" id="procedureErrorSubtitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="procedureSubtitleAr">{{ __('SubTitle (Arabic)') }}</label>
                                <input type="text" class="form-control" id="procedureSubtitleAr" name="subtitle[ar]">
                                <span class="text-danger error" id="procedureErrorSubtitleAr"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="procedureDescriptionEn">{{ __('Description (English)') }}</label>
                                <textarea class="form-control" id="procedureDescriptionEn" name="description[en]" rows="3"></textarea>
                                <span class="text-danger error" id="procedureErrorDescriptionEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="procedureDescriptionAr">{{ __('Description (Arabic)') }}</label>
                                <textarea class="form-control" id="procedureDescriptionAr" name="description[ar]" rows="3"></textarea>
                                <span class="text-danger error" id="procedureErrorDescriptionAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="procedureOrderNo">{{ __('Order Number') }}</label>
                                <input type="number" class="form-control" id="procedureOrderNo" name="order_no" value="0">
                                <span class="text-danger error" id="procedureErrorOrderNo"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="procedureStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="procedureStatus" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                                <span class="text-danger error" id="procedureErrorStatus"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="procedureImage">{{ __('Image') }}</label>
                                <input type="file" class="form-control" id="procedureImage" name="image" accept="image/*">
                                <span class="text-danger error" id="procedureErrorImage"></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="procedureModalCancel" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary" id="procedureSubmitBtn">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editProcedureModal" tabindex="-1" role="dialog" aria-labelledby="editProcedureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProcedureModalHeading">{{ __('Update Procedure') }}</h5>
                <button type="button" class="close" id="editProcedureModalClose" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editProcedureForm" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="editProcedureMethod" value="PUT">
                    <input type="hidden" name="procedure_id" id="editProcedureId">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editProcedureTitleEn">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editProcedureTitleEn" name="title[en]">
                                <span class="text-danger error" id="editProcedureErrorTitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editProcedureTitleAr">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editProcedureTitleAr" name="title[ar]">
                                <span class="text-danger error" id="editProcedureErrorTitleAr"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editProcedureSubtitleEn">{{ __('SubTitle (English)') }}</label>
                                <input type="text" class="form-control" id="editProcedureSubtitleEn" name="subtitle[en]">
                                <span class="text-danger error" id="editProcedureErrorSubtitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editProcedureSubtitleAr">{{ __('SubTitle (Arabic)') }}</label>
                                <input type="text" class="form-control" id="editProcedureSubtitleAr" name="subtitle[ar]">
                                <span class="text-danger error" id="editProcedureErrorSubtitleAr"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="editProcedureDescriptionEn">{{ __('Description (English)') }}</label>
                                <textarea class="form-control" id="editProcedureDescriptionEn" name="description[en]" rows="3"></textarea>
                                <span class="text-danger error" id="editProcedureErrorDescriptionEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editProcedureDescriptionAr">{{ __('Description (Arabic)') }}</label>
                                <textarea class="form-control" id="editProcedureDescriptionAr" name="description[ar]" rows="3"></textarea>
                                <span class="text-danger error" id="editProcedureErrorDescriptionAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="editProcedureOrderNo">{{ __('Order Number') }}</label>
                                <input type="number" class="form-control" id="editProcedureOrderNo" name="order_no">
                                <span class="text-danger error" id="editProcedureErrorOrderNo"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="editProcedureStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="editProcedureStatus" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                                <span class="text-danger error" id="editProcedureErrorStatus"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="editProcedureImage">{{ __('Image') }}</label>
                                <input type="file" class="form-control" id="editProcedureImage" name="image" accept="image/*">
                                <span class="text-danger error" id="editProcedureErrorImage"></span>
                                <div id="editProcedureImagePreview" class="mt-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="editProcedureModalCancel" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary" id="editProcedureSubmitBtn">{{ __('Update') }}</button>
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
                        <h3 class="card-title">{{ __('All Procedures') }}</h3>

                        <button class="btn btn-primary btn-sm float-right"
                            data-toggle="modal" data-target="#procedureModal">
                            <i class="fas fa-plus"></i> {{ __('Add New') }}
                        </button>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('Id') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Order') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="proceduresTableBody">
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading Procedures...
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