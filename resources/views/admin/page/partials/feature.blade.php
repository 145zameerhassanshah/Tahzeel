<!-- Add Feature Modal -->
<div class="modal fade" id="featureModal" tabindex="-1" role="dialog" aria-labelledby="featureModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Add Feature') }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="featureForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page_id" value="{{ $page->id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('Title (English)') }}</label>
                            <input type="text" class="form-control" name="title_en">
                            <span class="text-danger error" id="error_title_en"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Title (Arabic)') }}</label>
                            <input type="text" class="form-control" name="title_ar">
                            <span class="text-danger error" id="error_title_ar"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('SubTitle (English)') }}</label>
                            <input type="text" class="form-control" name="subtitle_en">
                            <span class="text-danger error" id="error_subtitle_en"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('SubTitle (Arabic)') }}</label>
                            <input type="text" class="form-control" name="subtitle_ar">
                            <span class="text-danger error" id="error_subtitle_ar"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('Description (English)') }}</label>
                            <input type="text" class="form-control" name="description_en">
                            <span class="text-danger error" id="error_description_en"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Description (Arabic)') }}</label>
                            <input type="text" class="form-control" name="description_ar">
                            <span class="text-danger error" id="error_description_ar"></span>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label>{{ __('Status') }}</label>
                            <select class="form-control" name="status">
                                <option value="active">{{ __('Active') }}</option>
                                <option value="inactive">{{ __('Inactive') }}</option>
                            </select>
                            <span class="text-danger error" id="error_status"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Order No') }}</label>
                            <input type="text" class="form-control" name="order_no">
                            <span class="text-danger error" id="error_order_no"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Icon') }}</label>
                            <input type="text" class="form-control" name="icon" id="icon">
                            <span class="text-danger error" id="error_icon"></span>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Edit Feature Modal -->
<div class="modal fade" id="editFeatureModal" tabindex="-1" role="dialog" aria-labelledby="editFeatureModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Update Feature') }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editFeatureForm" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="feature_id" id="update_feature_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('Title (English)') }}</label>
                            <input type="text" class="form-control" id="update_feature_title_en" name="title_en">
                            <span class="text-danger error" id="error_title_en_edit"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Title (Arabic)') }}</label>
                            <input type="text" class="form-control" id="update_feature_title_ar" name="title_ar">
                            <span class="text-danger error" id="error_title_ar_edit"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('SubTitle (English)') }}</label>
                            <input type="text" class="form-control" id="update_feature_subtitle_en" name="subtitle_en">
                            <span class="text-danger error" id="error_subtitle_en_edit"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('SubTitle (Arabic)') }}</label>
                            <input type="text" class="form-control" id="update_feature_subtitle_ar" name="subtitle_ar">
                            <span class="text-danger error" id="error_subtitle_ar_edit"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('Description (English)') }}</label>
                            <input type="text" class="form-control" id="update_feature_description_en" name="description_en">
                            <span class="text-danger error" id="error_description_en_edit"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Description (Arabic)') }}</label>
                            <input type="text" class="form-control" id="update_feature_description_ar" name="description_ar">
                            <span class="text-danger error" id="error_description_ar_edit"></span>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label>{{ __('Status') }}</label>
                            <select class="form-control" id="update_feature_status" name="status">
                                <option value="active">{{ __('Active') }}</option>
                                <option value="inactive">{{ __('Inactive') }}</option>
                            </select>
                            <span class="text-danger error" id="error_status_edit"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Order No') }}</label>
                            <input type="text" class="form-control" id="update_feature_order_no" name="order_no">
                            <span class="text-danger error" id="error_order_no_edit"></span>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Icon') }}</label>
                            <input type="text" class="form-control" name="icon" id="update_feature_icon">
                            <span class="text-danger error" id="error_icon"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Feature Table Section -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('All Features') }}</h3>
                        <button class="btn btn-primary btn-sm float-right" data-bs-toggle="modal"
                            data-bs-target="#featureModal">
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
                                    <th>{{ __('Subtitle') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="featuresTableBody">
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> {{ __('Loading features...') }}
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
