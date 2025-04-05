<div class="modal fade" id="sectiontitleModal" tabindex="-1" role="dialog" aria-labelledby="sectiontitleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- Increase width -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Add SectionTitle') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="sectiontitleForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <input type="hidden" name="page_id" value="{{ $page->id }}">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="section_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="section_title_en" name="section_title[en]">
                                <span class="text-danger error" id="error_section_title_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="section_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="section_title_ar" name="section_title[ar]">
                                <span class="text-danger error" id="error_section_title_ar"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="section_subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="section_subtitle_en" name="section_subtitle[en]">
                                <span class="text-danger error" id="error_section_subtitle_en"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="section_subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="section_subtitle_ar" name="section_subtitle[ar]">
                                <span class="text-danger error" id="error_section_subtitle_ar"></span>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <label for="section_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="section_status" name="section_status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="section_type" class="control-label">{{ __('Type') }}<span class="text-danger">*</span></label>
                                <select class="form-control" name="section_type" id="section_type">
                                    <option disabled selected>Select Type</option>
                                    @foreach ($section_types as $type)
                                    <option value="{{ $type }}">{{ ucfirst(str_replace('_', ' ', $type)) }}</option>
                                    @endforeach
                                </select>
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
<div class="modal fade" id="editSectionTitleModal" tabindex="-1" role="dialog"
    aria-labelledby="sectiontitleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Update SectionTitle') }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editSectionTitleForm" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="sectiontitle_id" id="update_sectiontitle_id">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_section_title_en">{{ __('Title (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_section_title_en" name="section_title[en]">
                                <span class="text-danger error" id="error_section_title_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="update_section_title_ar">{{ __('Title (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_section_title_ar" name="section_title[ar]">
                                <span class="text-danger error" id="error_section_title_ar"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_section_subtitle_en">{{ __('SubTitle (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_section_subtitle_en" name="section_subtitle[en]">
                                <span class="text-danger error" id="error_section_subtitle_en"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="update_section_subtitle_ar">{{ __('SubTitle (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_section_subtitle_ar" name="section_subtitle[ar]">
                                <span class="text-danger error" id="error_section_subtitle_ar"></span>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <label for="update_section_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="update_section_status" name="section_status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="section_type" class="control-label">{{ __('Type') }}<span class="text-danger">*</span></label>
                                <select class="form-control" name="section_type" id="section_type">
                                    <option disabled selected>Select Type</option>
                                    @foreach ($section_types as $type)
                                    <option value="{{ $type }}">{{ ucfirst(str_replace('_', ' ', $type)) }}</option>
                                    @endforeach
                                </select>
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
                        <h3 class="card-title">{{ __('All SectionTitles') }}</h3>

                        <button class="btn btn-primary btn-sm float-right"
                            data-toggle="modal" data-target="#sectiontitleModal">
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
                            <tbody id="sectiontitlesTableBody">
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading
                                        sectiontitles...
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