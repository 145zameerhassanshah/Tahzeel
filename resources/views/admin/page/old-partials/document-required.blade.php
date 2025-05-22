<div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="documentModalHeading">{{ __('Add Document Required') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="documentModalClose">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="documentForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" id="documentToken" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <input type="hidden" name="page_id" id="documentPageId" value="{{ $page->id }}">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="documentTitleEn">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="documentTitleEn" name="title[en]">
                                <span class="text-danger error" id="documentErrorTitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="documentTitleAr">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="documentTitleAr" name="title[ar]">
                                <span class="text-danger error" id="documentErrorTitleAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="documentDescriptionEn">{{ __('Description (English)') }}</label>
                                <textarea class="form-control" id="documentDescriptionEn" name="description[en]" rows="3"></textarea>
                                <span class="text-danger error" id="documentErrorDescriptionEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="documentDescriptionAr">{{ __('Description (Arabic)') }}</label>
                                <textarea class="form-control" id="documentDescriptionAr" name="description[ar]" rows="3"></textarea>
                                <span class="text-danger error" id="documentErrorDescriptionAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="documentOrderNo">{{ __('Order Number') }}</label>
                                <input type="number" class="form-control" id="documentOrderNo" name="order_no" value="0">
                                <span class="text-danger error" id="documentErrorOrderNo"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="documentStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="documentStatus" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                                <span class="text-danger error" id="documentErrorStatus"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="documentIcon">{{ __('Icon') }}</label>
                                <input type="file" class="form-control" id="documentIcon" name="icon" accept="image/*">
                                <span class="text-danger error" id="documentErrorIcon"></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="documentModalCancel" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary" id="documentSubmitBtn">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editDocumentModal" tabindex="-1" role="dialog" aria-labelledby="editDocumentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDocumentModalHeading">{{ __('Update Document Required') }}</h5>
                <button type="button" class="close" id="editDocumentModalClose" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editDocumentForm" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="editDocumentMethod" value="PUT">
                    <input type="hidden" name="document_id" id="editDocumentId">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editDocumentTitleEn">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editDocumentTitleEn" name="title[en]">
                                <span class="text-danger error" id="editDocumentErrorTitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editDocumentTitleAr">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editDocumentTitleAr" name="title[ar]">
                                <span class="text-danger error" id="editDocumentErrorTitleAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="editDocumentDescriptionEn">{{ __('Description (English)') }}</label>
                                <textarea class="form-control" id="editDocumentDescriptionEn" name="description[en]" rows="3"></textarea>
                                <span class="text-danger error" id="editDocumentErrorDescriptionEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editDocumentDescriptionAr">{{ __('Description (Arabic)') }}</label>
                                <textarea class="form-control" id="editDocumentDescriptionAr" name="description[ar]" rows="3"></textarea>
                                <span class="text-danger error" id="editDocumentErrorDescriptionAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="editDocumentOrderNo">{{ __('Order Number') }}</label>
                                <input type="number" class="form-control" id="editDocumentOrderNo" name="order_no">
                                <span class="text-danger error" id="editDocumentErrorOrderNo"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="editDocumentStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="editDocumentStatus" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                                <span class="text-danger error" id="editDocumentErrorStatus"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="editDocumentIcon">{{ __('Icon') }}</label>
                                <input type="file" class="form-control" id="editDocumentIcon" name="icon" accept="image/*">
                                <span class="text-danger error" id="editDocumentErrorIcon"></span>
                                <div id="editDocumentIconPreview" class="mt-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="editDocumentModalCancel" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary" id="editDocumentSubmitBtn">{{ __('Update') }}</button>
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
                        <h3 class="card-title">{{ __('All Documents Required') }}</h3>

                        <button class="btn btn-primary btn-sm float-right"
                            data-toggle="modal" data-target="#documentModal">
                            <i class="fas fa-plus"></i> {{ __('Add New') }}
                        </button>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('Id') }}</th>
                                    <th>{{ __('Icon') }}</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Description') }}</th>
                                    <th>{{ __('Order') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="documentsTableBody">
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading Documents...
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