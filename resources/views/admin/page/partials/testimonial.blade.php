<div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="testimonialModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"><!-- Increase width -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Add Testimonial') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="testimonialForm" enctype="multipart/form-data">
                <input type="hidden" name="page_id" value="{{ $page->id }}">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <input type="hidden" name="page_id" value="{{ $page->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name_en">{{ __('Name (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name_en" name="name[en]">
                                <span class="text-danger error" id="error_name_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="name_ar">{{ __('Name (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name_ar" name="name[ar]">
                                <span class="text-danger error" id="error_name_ar"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="designation_en">{{ __('Designation (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="designation_en" name="designation[en]">
                                <span class="text-danger error" id="error_designation_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="designation_ar">{{ __('Designation (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="designation_ar" name="designation[ar]">
                                <span class="text-danger error" id="error_designation_ar"></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="order_no">{{ __('Order No') }} <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="order_no" name="order_no" value="0">
                                <span class="text-danger error" id="error_order_no"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="feedback_en">{{ __('Feedback (English)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="feedback_en" name="feedback[en]"></textarea>
                                <span class="text-danger error" id="error_feedback_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="feedback_ar">{{ __('Feedback (Arabic)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="feedback_ar" name="feedback[ar]"></textarea>
                                <span class="text-danger error" id="error_feedback_ar"></span>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="image">{{ __('Image') }}</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <span class="text-danger error" id="error_image"></span>
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
<div class="modal fade" id="editTestimonialModal" tabindex="-1" role="dialog"
    aria-labelledby="testimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Update Testimonial') }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editTestimonialForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="page_id" value="{{ $page->id }}">
                    <input type="hidden" name="testimonial_id" id="update_testimonial_id">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_name_en">{{ __('Name (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_name_en" name="name[en]">
                                <span class="text-danger error" id="error_name_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="update_name_ar">{{ __('Name (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_name_ar" name="name[ar]">
                                <span class="text-danger error" id="error_name_ar"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="update_designation_en">{{ __('Designation (English)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_designation_en"
                                    name="designation[en]">
                                <span class="text-danger error" id="error_designation_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="update_designation_ar">{{ __('Designation (Arabic)') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="update_designation_ar"
                                    name="designation[ar]">
                                <span class="text-danger error" id="error_designation_ar"></span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="update_order_no">{{ __('Order No') }} <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="update_order_no" name="order_no"
                                    value="0">
                                <span class="text-danger error" id="error_order_no"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="update_status">{{ __('Status') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="update_status" name="status">
                                    <option value="active">{{ __('Active') }}</option>
                                    <option value="inactive">{{ __('Inactive') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="update_feedback_en">{{ __('Feedback (English)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="update_feedback_en" name="feedback[en]"></textarea>
                                <span class="text-danger error" id="error_feedback_en"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="update_feedback_ar">{{ __('Feedback (Arabic)') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="update_feedback_ar" name="feedback[ar]"></textarea>
                                <span class="text-danger error" id="error_feedback_ar"></span>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="update_image">{{ __('Image') }}</label>
                            <input type="file" class="form-control" id="update_image" name="image"
                                accept="image/*">
                            <span class="text-danger error" id="error_image"></span>
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
                        <h3 class="card-title">{{ __('All Testimonials') }}</h3>
                        {{-- <a href="{{ route('testimonials.create', ['id' => $page->id]) }}"
                            class="btn btn-primary btn-sm float-right"><i
                                class="fas fa-plus"></i> {{ __('Add New') }}</a> --}}
                        <button class="btn btn-primary btn-sm float-right"
                            data-toggle="modal" data-target="#testimonialModal">
                            <i class="fas fa-plus"></i> {{ __('Add New') }}
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th>{{ __('Id') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Designation') }}</th>
                                    <th>{{ __('Order No') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Feedback') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="testimonialsTableBody">
                                <!-- Data will be loaded via AJAX -->
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading testimonials....
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