<div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="testimonialModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- Increase width -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Add Testimonial') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="testimonialForm" enctype="multipart/form-data">
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
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('Id') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Designation [En]') }}</th>
                                    <th>{{ __('Designation [Ar]') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="testimonialsTableBody">
                                <!-- Data will be loaded via AJAX -->
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <i class="fas fa-spinner fa-spin"></i> Loading
                                        testimonials...
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

@section('js')
    <script>
        $(document).ready(function() {

            loadTestimonials();

            function loadTestimonials() {
                $.ajax({
                    url: '/admin/testimonials',
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function() {
                        // Show loading indicator
                        $('#testimonialsTableBody').html(
                            '<tr><td colspan="6" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                        );
                    },
                    success: function(response) {
                        if (response.data && response.data.length > 0) {
                            renderTestimonials(response.data);
                        } else {
                            $('#testimonialsTableBody').html(
                                '<tr><td colspan="6" class="text-center">No testimonials found</td></tr>'
                            );
                        }
                    },
                    error: function(xhr) {
                        $('#testimonialsTableBody').html(
                            '<tr><td colspan="6" class="text-center text-danger">Error loading testimonials</td></tr>'
                        );
                        console.error("Error loading testimonials:", xhr.responseText);
                    }
                });
            }

            // Function to render testimonials in table

            function renderTestimonials(testimonials) {
                let html = '';

                testimonials.forEach((testimonial, index) => {
                    const name = typeof testimonial.name === 'string' ? JSON.parse(testimonial.name) :
                        testimonial.name;
                    const designation = typeof testimonial.designation === 'string' ? JSON.parse(testimonial
                        .designation) : testimonial.designation;

                    html += `
            <tr id="testimonial-row-${testimonial.id}">
                <td>${index + 1}</td>
                <td>
                    ${testimonial.image ? 
                        `<img src="/assets/admin/uploads/testimonial/${testimonial.image}" width="50" height="50px">` : 
                        ''}
                </td>
                <td>${name.en}</td>
                <td>${designation.en}</td>
                <td>${designation.ar}</td>
                <td>
                    <button class="btn btn-sm btn-primary editTestimonial" data-id="${testimonial.id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <form class="d-inline-block" action="/admin/testimonials/${testimonial.id}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm delete-testimonial" data-id="${testimonial.id}">
    <i class="fas fa-trash"></i> Delete
</button>
                    </form>
                </td>
            </tr>`;
                });

                $('#testimonialsTableBody').html(html);
            }

            // Refresh testimonials after CRUD operations
            function refreshTestimonials() {
                loadTestimonials();
            }

            // Call refreshTestimonials() after successful add/edit/delete operations




            $("#testimonialForm").submit(function(event) {
                event.preventDefault();
                $(".error").text("");
                let nameEn = $("#name_en").val().trim();
                let nameAr = $("#name_ar").val().trim();
                let designationEn = $("#designation_en").val().trim();
                let designationAr = $("#designation_ar").val().trim();
                let feedbackEn = $("#feedback_en").val().trim();
                let feedbackAr = $("#feedback_ar").val().trim();
                let orderNo = $("#order_no").val().trim();
                let image = $("#image")[0].files[0];

                let isValid = true;

                // Frontend validation
                if (nameEn.length < 1) {
                    $("#error_name_en").text("English name is required.");
                    isValid = false;
                }
                if (nameAr.length < 1) {
                    $("#error_name_ar").text("Arabic name is required.");
                    isValid = false;
                }
                if (designationEn.length < 1) {
                    $("#error_designation_en").text("English designation is required.");
                    isValid = false;
                }
                if (designationAr.length < 1) {
                    $("#error_designation_ar").text("Arabic designation is required.");
                    isValid = false;
                }
                if (feedbackEn.length < 1) {
                    $("#error_feedback_en").text("English feedback is required.");
                    isValid = false;
                }
                if (feedbackAr.length < 1) {
                    $("#error_feedback_ar").text("Arabic feedback is required.");
                    isValid = false;
                }
                if (isNaN(orderNo) || orderNo < 0) {
                    $("#error_order_no").text("Order number must be a positive number.");
                    isValid = false;
                }
                if (image) {
                    let allowedExtensions = ["jpg", "jpeg", "png", "gif"];
                    let fileExtension = image.name.split('.').pop().toLowerCase();
                    if (!allowedExtensions.includes(fileExtension)) {
                        $("#error_image").text("Only JPG, PNG, or GIF allowed.");
                        isValid = false;
                    }
                }

                if (!isValid) return; // Stop if validation fails

                // Prepare FormData
                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('testimonials.store') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        "X-CSRF-TOKEN": $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success("Testimonial added successfully!");

                            refreshTestimonials();

                            $("#testimonialForm")[0].reset();
                            $("#testimonialModal").removeClass("show").hide();
                            $(".modal-backdrop").remove();
                            $("body").removeClass("modal-open");
                        } else {
                            if (response.errors) {
                                $.each(response.errors, function(key, value) {
                                    $("#error_" + key.replace('.', '_')).text(value[0]);
                                });
                            }
                            toastr.error("Something went wrong! Please check the errors.");
                        }
                    },
                    error: function() {
                        toastr.error("Something went wrong!");
                    }
                });
            });

            $(document).on('click', '.editTestimonial', function() {
                let id = $(this).data('id');

                $.ajax({
                    url: `/admin/testimonials/${id}/edit`,
                    type: "GET",
                    success: function(response) {

                        // Ensure 'name', 'feedback', and 'designation' exist
                        let name = response.name || {
                            en: "",
                            ar: ""
                        };
                        let feedback = response.feedback || {
                            en: "",
                            ar: ""
                        };
                        let designation = response.designation || {
                            en: "",
                            ar: ""
                        };
                        $('#update_testimonial_id').val(id);
                        $('#update_name_en').val(name.en);
                        $('#update_name_ar').val(name.ar);
                        $('#update_feedback_en').val(feedback.en);
                        $('#update_feedback_ar').val(feedback.ar);
                        $('#update_designation_en').val(designation.en);
                        $('#update_designation_ar').val(designation.ar);
                        $('#update_order_no').val(response.order_no || '');
                        $('#update_status').val(response.status || '');

                        if (response.image) {
                            $('#image_preview').attr('src',
                                `/uploads/testimonials/${response.image}`).show();
                        } else {
                            $('#image_preview').hide();
                        }

                        $('#editTestimonialModal').modal('show');
                    }
                });
            });


            $('#editTestimonialForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);
                let id = $('#update_testimonial_id').val();
                let url = `/admin/testimonials/${id}`;

                // Append `_method` as Laravel does not accept PUT with FormData
                formData.append('_method', 'PUT');

                $.ajax({
                    url: url,
                    type: "POST", // Change from PUT to POST
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    },
                    success: function(response) {
                        $('#editTestimonialModal').modal('hide');
                        toastr.success("Testimonial updated successfully!");
                        refreshTestimonials();
                    },
                    error: function(response) {
                        $('.error').text('');
                        $.each(response.responseJSON.errors, function(key, error) {
                            $('#error_' + key.replace('.', '_')).text(error[0]);
                        });
                    }
                });
            });



            $(document).on("click", ".delete-testimonial", function() {
                let testimonialId = $(this).data("id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/admin/testimonials/${testimonialId}`,
                            type: "POST",
                            data: {
                                _method: "DELETE",
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: response.message,
                                    icon: "success",
                                    timer: 2000,
                                    showConfirmButton: false
                                });

                                refreshTestimonials();
                            },
                            error: function() {
                                Swal.fire({
                                    title: "Error!",
                                    text: "Failed to delete. Please try again.",
                                    icon: "error"
                                });
                            }
                        });
                    }
                });
            });

        });
    </script>
@endsection