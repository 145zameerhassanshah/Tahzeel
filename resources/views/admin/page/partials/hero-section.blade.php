<div class="modal fade" id="herosectionModal" tabindex="-1" role="dialog" aria-labelledby="herosectionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- Increase width -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Add HeroSection') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="herosectionForm" enctype="multipart/form-data">
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

                            <div class="form-group mt-3">
                                <label for="error_background_image">{{ __('Image') }}</label>
                                <input type="file" class="form-control" id="background_image" name="background_image" accept="background_image/*">
                                <span class="text-danger error" id="error_background_image"></span>
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
<div class="modal fade" id="editHeroSectionModal" tabindex="-1" role="dialog"
    aria-labelledby="herosectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Update HeroSection') }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editHeroSectionForm" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="herosection_id" id="update_herosection_id">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_title_en" name="title[en]">
                                <span class="text-danger error" id="error_title_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="update_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_title_ar" name="title[ar]">
                                <span class="text-danger error" id="error_title_ar"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_subtitle_en" name="subtitle[en]">
                                <span class="text-danger error" id="error_subtitle_en"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="update_subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_subtitle_ar" name="subtitle[ar]">
                                <span class="text-danger error" id="error_subtitle_ar"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_description">{{ __('Description (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_description_en" name="description[en]">
                                <span class="text-danger error" id="error_description_en"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="update_description">{{ __('Description (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_description_ar" name="description[ar]">
                                <span class="text-danger error" id="error_description_ar"></span>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <label for="update_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="update_status" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="update_background_image">{{ __('Image') }}</label>
                                <input type="file" class="form-control" id="update_background_image" name="background_image" accept="background_image/*">
                                <span class="text-danger error" id="error_background_image"></span>
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
                        <h3 class="card-title">{{ __('All HeroSections') }}</h3>

                        <button class="btn btn-primary btn-sm float-right"
                            data-toggle="modal" data-target="#herosectionModal">
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
                                    <th>{{ __('Subtitle') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="herosectionsTableBody">
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading
                                        herosections...
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