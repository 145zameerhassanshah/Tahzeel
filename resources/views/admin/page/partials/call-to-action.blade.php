<div class="modal fade" id="ctaModal" tabindex="-1" role="dialog" aria-labelledby="ctaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ctaModalHeading">{{ __('Add Call To Action') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="ctaModalClose">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="ctaForm">
                    @csrf
                    <input type="hidden" name="_token" id="ctaToken" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <input type="hidden" name="page_id" id="ctaPageId" value="{{ $page->id }}">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="ctaTitleEn">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ctaTitleEn" name="title[en]">
                                <span class="text-danger error" id="ctaErrorTitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="ctaTitleAr">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ctaTitleAr" name="title[ar]">
                                <span class="text-danger error" id="ctaErrorTitleAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="ctaSubtitleEn">{{ __('Subtitle (English)') }}</label>
                                <input type="text" class="form-control" id="ctaSubtitleEn" name="subtitle[en]">
                                <span class="text-danger error" id="ctaErrorSubtitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="ctaSubtitleAr">{{ __('Subtitle (Arabic)') }}</label>
                                <input type="text" class="form-control" id="ctaSubtitleAr" name="subtitle[ar]">
                                <span class="text-danger error" id="ctaErrorSubtitleAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="ctaButtonTextEn">{{ __('Button Text (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ctaButtonTextEn" name="button_text[en]">
                                <span class="text-danger error" id="ctaErrorButtonTextEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="ctaButtonTextAr">{{ __('Button Text (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ctaButtonTextAr" name="button_text[ar]">
                                <span class="text-danger error" id="ctaErrorButtonTextAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-8">
                                <label for="ctaButtonLink">{{ __('Button Link') }} <span class="text-danger">*</span></label>
                                <input type="url" class="form-control" id="ctaButtonLink" name="button_link">
                                <span class="text-danger error" id="ctaErrorButtonLink"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="ctaStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="ctaStatus" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                                <span class="text-danger error" id="ctaErrorStatus"></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="ctaModalCancel" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary" id="ctaSubmitBtn">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editCtaModal" tabindex="-1" role="dialog" aria-labelledby="editCtaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCtaModalHeading">{{ __('Update Call To Action') }}</h5>
                <button type="button" class="close" id="editCtaModalClose" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCtaForm" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="editCtaMethod" value="PUT">
                    <input type="hidden" name="cta_id" id="editCtaId">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editCtaTitleEn">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editCtaTitleEn" name="title[en]">
                                <span class="text-danger error" id="editCtaErrorTitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editCtaTitleAr">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editCtaTitleAr" name="title[ar]">
                                <span class="text-danger error" id="editCtaErrorTitleAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="editCtaSubtitleEn">{{ __('Subtitle (English)') }}</label>
                                <input type="text" class="form-control" id="editCtaSubtitleEn" name="subtitle[en]">
                                <span class="text-danger error" id="editCtaErrorSubtitleEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editCtaSubtitleAr">{{ __('Subtitle (Arabic)') }}</label>
                                <input type="text" class="form-control" id="editCtaSubtitleAr" name="subtitle[ar]">
                                <span class="text-danger error" id="editCtaErrorSubtitleAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="editCtaButtonTextEn">{{ __('Button Text (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editCtaButtonTextEn" name="button_text[en]">
                                <span class="text-danger error" id="editCtaErrorButtonTextEn"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="editCtaButtonTextAr">{{ __('Button Text (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editCtaButtonTextAr" name="button_text[ar]">
                                <span class="text-danger error" id="editCtaErrorButtonTextAr"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-8">
                                <label for="editCtaButtonLink">{{ __('Button Link') }} <span class="text-danger">*</span></label>
                                <input type="url" class="form-control" id="editCtaButtonLink" name="button_link">
                                <span class="text-danger error" id="editCtaErrorButtonLink"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="editCtaStatus">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="editCtaStatus" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                                <span class="text-danger error" id="editCtaErrorStatus"></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="editCtaModalCancel" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary" id="editCtaSubmitBtn">{{ __('Update') }}</button>
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
                        <h3 class="card-title">{{ __('All Call To Actions') }}</h3>

                        <button class="btn btn-primary btn-sm float-right"
                            data-toggle="modal" data-target="#ctaModal">
                            <i class="fas fa-plus"></i> {{ __('Add New') }}
                        </button>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('Id') }}</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Button Text') }}</th>
                                    <th>{{ __('Button Link') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="ctasTableBody">
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading Call To Actions...
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