<div class="modal fade" id="whyusModal" tabindex="-1" role="dialog" aria-labelledby="whyusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- Increase width -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Add WhyUs') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="whyusForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <input type="hidden" name="page_id" value="{{ $page->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title_en" name="title[en]">
                                <span class="text-danger error" id="error_title_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title_ar" name="title[ar]">
                                <span class="text-danger error" id="error_title_ar"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subtitle_en" name="subtitle[en]">
                                <span class="text-danger error" id="error_subtitle_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subtitle_ar" name="subtitle[ar]">
                                <span class="text-danger error" id="error_subtitle_ar"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="description">{{ __('Description (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="description_en" name="description[en]">
                                <span class="text-danger error" id="error_description_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="description">{{ __('Description (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="description_ar" name="description[ar]">
                                <span class="text-danger error" id="error_description_ar"></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="order_no">{{ __('Order No)') }} <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="order_no" name="order_no">
                                <span class="text-danger error" id="error_order_no"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="icon">{{ __('Icon') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="icon" name="icon">
                                <span class="text-danger error" id="error_icon"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editWhyUsModal" tabindex="-1" role="dialog"
    aria-labelledby="whyusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Update WhyUs') }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editWhyUsForm" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="whyus_id" id="update_whyus_id">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_whyus_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_whyus_title_en" name="title[en]">
                                <span class="text-danger error" id="error_title_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="update_whyus_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_whyus_title_ar" name="title[ar]">
                                <span class="text-danger error" id="error_title_ar"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_whyus_subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_whyus_subtitle_en" name="subtitle[en]">
                                <span class="text-danger error" id="error_subtitle_en"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="update_whyus_subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_whyus_subtitle_ar" name="subtitle[ar]">
                                <span class="text-danger error" id="error_subtitle_ar"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_whyus_description">{{ __('Description (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_whyus_description_en" name="description[en]">
                                <span class="text-danger error" id="error_description_en"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="update_whyus_description">{{ __('Description (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_whyus_description_ar" name="description[ar]">
                                <span class="text-danger error" id="error_description_ar"></span>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <label for="update_whyus_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="update_whyus_status" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="update_whyus_order_no">{{ __('Order No)') }} <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="update_whyus_order_no" name="order_no">
                                <span class="text-danger error" id="error_order_no"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="update_whyus_icon">{{ __('Icon') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_whyus_icon" name="icon">
                                <span class="text-danger error" id="error_icon"></span>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
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
                        <h3 class="card-title">{{ __('All Why Choose Us') }}</h3>
                        <button class="btn btn-primary btn-sm float-right"
                            data-toggle="modal" data-target="#whyusModal">
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
                                    <th>{{ __('Description ') }}</th>
                                    <th>{{ __('Order No ') }}</th>
                                    <th>{{ __('Status ') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="whyusTableBody">
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading
                                        whyChooseUs...
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