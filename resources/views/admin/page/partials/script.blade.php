{{-- Testimonial Section --}}


<script>
    $(document).ready(function() {
        loadTestimonials();

        function loadTestimonials() {
            let pageId = "{{ $page->id }}"; // Assuming you have the page ID available in your script
            // const pageId = {{$page->id}};
            $.ajax({
                url: `/admin/testimonials/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
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
            <td>${testimonial.image?`<img src="/assets/admin/uploads/testimonial/${testimonial.image}" width="50" height="50px">`:''}</td>
            <td>${name.en}</td><td>${designation.en}</td><td>${designation.ar}</td>
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

{{-- procedure section --}}
<script>
    $(document).ready(function() {
        // Load procedures on page load
        loadProcedures();

        function loadProcedures() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/admin/procedures/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#proceduresTableBody').html(
                        '<tr><td colspan="6" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderProcedures(response.data);
                    } else {
                        $('#proceduresTableBody').html(
                            '<tr><td colspan="6" class="text-center">No procedures found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#proceduresTableBody').html(
                        '<tr><td colspan="6" class="text-center text-danger">Error loading procedures</td></tr>'
                    );
                    console.error("Error loading procedures:", xhr.responseText);
                }
            });
        }

        function renderProcedures(procedures) {
            let html = '';
            procedures.forEach((procedure, index) => {
                const title = typeof procedure.title === 'string' ? JSON.parse(procedure.title) : procedure.title;
                html += `
                <tr id="procedure-row-${procedure.id}">
                    <td>${index + 1}</td>
                    <td>
                        ${procedure.image ? 
                            `<img src="/assets/admin/uploads/procedure/${procedure.image}" width="50" height="50">` : 
                            '<i class="fas fa-image text-muted"></i>'}
                    </td>
                    <td>${title.en}</td>
                    <td>${procedure.order_no}</td>
                    <td>
                        <span class="badge ${procedure.status === 'active' ? 'bg-success' : 'bg-secondary'}">
                            ${procedure.status}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary editProcedure" data-id="${procedure.id}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger delete-procedure" data-id="${procedure.id}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>`;
            });
            $('#proceduresTableBody').html(html);
        }

        // Add new procedure with validation
        $("#procedureForm").submit(function(e) {
            e.preventDefault();
            $(".error").text("");
            // Get all required field values
            const titleEn = $("#procedureTitleEn").val().trim();
            const titleAr = $("#procedureTitleAr").val().trim();
            const status = $("#procedureStatus").val();
            // Validate required fields
            let isValid = true;

            if (!titleEn) {
                $("#procedureErrorTitleEn").text("English title is required");
                isValid = false;
            }

            if (!titleAr) {
                $("#procedureErrorTitleAr").text("Arabic title is required");
                isValid = false;
            }

            if (!status) {
                $("#procedureErrorStatus").text("Status is required");
                isValid = false;
            }

            if (!isValid) {
                toastr.error("Please fill all required fields");
                return;
            }
            let formData = new FormData(this);
            $.ajax({
                url: "{{ route('procedures.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    toastr.success("Procedure added successfully");
                    $("#procedureForm")[0].reset();
                    $("#procedureModal").modal('hide');
                    loadProcedures();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $("#procedureError" + key.replace('.', '').replace(/\[|\]/g, '')).text(value[0]);
                        });
                    } else {
                        toastr.error("Something went wrong");
                    }
                }
            });
        });

        // Edit procedure with validation
        $(document).on('click', '.editProcedure', function() {
            let id = $(this).data('id');
            $.ajax({
                url: `/admin/procedures/${id}/edit`,
                type: "GET",
                success: function(response) {
                    let title = response.title || {
                        en: "",
                        ar: ""
                    };
                    let subtitle = response.subtitle || {
                        en: "",
                        ar: ""
                    };
                    let description = response.description || {
                        en: "",
                        ar: ""
                    };
                    $('#editProcedureId').val(id);
                    $('#editProcedureTitleEn').val(title.en);
                    $('#editProcedureTitleAr').val(title.ar);
                    $('#editProcedureSubtitleEn').val(subtitle.en);
                    $('#editProcedureSubtitleAr').val(subtitle.ar);
                    $('#editProcedureDescriptionEn').val(description.en);
                    $('#editProcedureDescriptionAr').val(description.ar);
                    $('#editProcedureOrderNo').val(response.order_no || 0);
                    $('#editProcedureStatus').val(response.status || 'active');
                    $('#editProcedureImagePreview').html(
                        response.image ?
                        `<img src="/assets/admin/uploads/procedure/${response.image}" width="100" class="img-thumbnail">` :
                        '<p>No image</p>'
                    );
                    $('#editProcedureModal').modal('show');
                }
            });
        });

        // Update procedure with validation
        $('#editProcedureForm').submit(function(e) {
            e.preventDefault();
            $(".error").text("");
            // Get all required field values
            const titleEn = $("#editProcedureTitleEn").val().trim();
            const titleAr = $("#editProcedureTitleAr").val().trim();
            const status = $("#editProcedureStatus").val();
            // Validate required fields
            let isValid = true;
            if (!titleEn) {
                $("#editProcedureErrorTitleEn").text("English title is required");
                isValid = false;
            }

            if (!titleAr) {
                $("#editProcedureErrorTitleAr").text("Arabic title is required");
                isValid = false;
            }

            if (!status) {
                $("#editProcedureErrorStatus").text("Status is required");
                isValid = false;
            }

            if (!isValid) {
                toastr.error("Please fill all required fields");
                return;
            }

            let id = $('#editProcedureId').val();
            let formData = new FormData(this);
            formData.append('_method', 'PUT');

            $.ajax({
                url: `/admin/procedures/${id}`,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    toastr.success("Procedure updated successfully");
                    $('#editProcedureModal').modal('hide');
                    loadProcedures();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $("#editProcedureError" + key.replace('.', '').replace(/\[|\]/g, '')).text(value[0]);
                        });
                    } else {
                        toastr.error("Something went wrong");
                    }
                }
            });
        });

        // Delete procedure
        $(document).on('click', '.delete-procedure', function() {
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/procedures/${id}`,
                        type: "POST",
                        data: {
                            _method: "DELETE",
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Procedure has been deleted.',
                                'success'
                            );
                            loadProcedures();
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Failed to delete procedure.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>
{{-- end script --}}

{{-- document required --}}

<script>
    $(document).ready(function() {
        // Load documents on page load
        loadDocuments();

        function loadDocuments() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/admin/document-requireds/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#documentsTableBody').html(
                        '<tr><td colspan="6" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderDocuments(response.data);
                    } else {
                        $('#documentsTableBody').html(
                            '<tr><td colspan="6" class="text-center">No documents found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#documentsTableBody').html(
                        '<tr><td colspan="6" class="text-center text-danger">Error loading documents</td></tr>'
                    );
                    console.error("Error loading documents:", xhr.responseText);
                }
            });
        }

        function renderDocuments(documents) {
            let html = '';
            documents.forEach((document, index) => {
                const title = typeof document.title === 'string' ? JSON.parse(document.title) : document.title;
                const description = typeof document.description === 'string' ? JSON.parse(document.description) : document.description;

                html += `
                <tr id="document-row-${document.id}">
                    <td>${index + 1}</td>
                    <td>
                        ${document.icon ? 
                            `<img src="/assets/admin/uploads/document/${document.icon}" width="50" height="50">` : 
                            '<i class="fas fa-image text-muted"></i>'}
                    </td>
                    <td>${title.en}</td>
                    <td>${document.order_no}</td>
                    <td>
                        <span class="badge ${document.status === 'active' ? 'bg-success' : 'bg-secondary'}">
                            ${document.status}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary editDocument" data-id="${document.id}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger delete-document" data-id="${document.id}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>`;
            });
            $('#documentsTableBody').html(html);
        }

        // Add new document with validation
        $("#documentForm").submit(function(e) {
            e.preventDefault();
            $(".error").text("");

            // Get all required field values
            const titleEn = $("#documentTitleEn").val().trim();
            const titleAr = $("#documentTitleAr").val().trim();
            const status = $("#documentStatus").val();

            // Validate required fields
            let isValid = true;

            if (!titleEn) {
                $("#documentErrorTitleEn").text("English title is required");
                isValid = false;
            }

            if (!titleAr) {
                $("#documentErrorTitleAr").text("Arabic title is required");
                isValid = false;
            }

            if (!status) {
                $("#documentErrorStatus").text("Status is required");
                isValid = false;
            }

            if (!isValid) {
                toastr.error("Please fill all required fields");
                return;
            }
            let formData = new FormData(this);
            $.ajax({
                url: "{{ route('document-requireds.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    toastr.success("Document added successfully");
                    $("#documentForm")[0].reset();
                    $("#documentModal").modal('hide');
                    loadDocuments();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $("#documentError" + key.replace('.', '').replace(/\[|\]/g, '')).text(value[0]);
                        });
                    } else {
                        toastr.error("Something went wrong");
                    }
                }
            });
        });

        // Edit document with validation
        $(document).on('click', '.editDocument', function() {
            let id = $(this).data('id');
            $.ajax({
                url: `/admin/document-requireds/${id}/edit`,
                type: "GET",
                success: function(response) {
                    let title = response.title || {
                        en: "",
                        ar: ""
                    };
                    let description = response.description || {
                        en: "",
                        ar: ""
                    };

                    $('#editDocumentId').val(id);
                    $('#editDocumentTitleEn').val(title.en);
                    $('#editDocumentTitleAr').val(title.ar);
                    $('#editDocumentDescriptionEn').val(description.en);
                    $('#editDocumentDescriptionAr').val(description.ar);
                    $('#editDocumentOrderNo').val(response.order_no || 0);
                    $('#editDocumentStatus').val(response.status || 'active');

                    $('#editDocumentIconPreview').html(
                        response.icon ?
                        `<img src="/assets/admin/uploads/document/${response.icon}" width="100" class="img-thumbnail">` :
                        '<p>No icon</p>'
                    );

                    $('#editDocumentModal').modal('show');
                }
            });
        });

        // Update document with validation
        $('#editDocumentForm').submit(function(e) {
            e.preventDefault();
            $(".error").text("");

            // Get all required field values
            const titleEn = $("#editDocumentTitleEn").val().trim();
            const titleAr = $("#editDocumentTitleAr").val().trim();
            const status = $("#editDocumentStatus").val();

            // Validate required fields
            let isValid = true;

            if (!titleEn) {
                $("#editDocumentErrorTitleEn").text("English title is required");
                isValid = false;
            }

            if (!titleAr) {
                $("#editDocumentErrorTitleAr").text("Arabic title is required");
                isValid = false;
            }

            if (!status) {
                $("#editDocumentErrorStatus").text("Status is required");
                isValid = false;
            }

            if (!isValid) {
                toastr.error("Please fill all required fields");
                return;
            }

            let id = $('#editDocumentId').val();
            let formData = new FormData(this);
            formData.append('_method', 'PUT');

            $.ajax({
                url: `/admin/document-requireds/${id}`,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    toastr.success("Document updated successfully");
                    $('#editDocumentModal').modal('hide');
                    loadDocuments();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $("#editDocumentError" + key.replace('.', '').replace(/\[|\]/g, '')).text(value[0]);
                        });
                    } else {
                        toastr.error("Something went wrong");
                    }
                }
            });
        });

        // Delete document
        $(document).on('click', '.delete-document', function() {
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/document-requireds/${id}`,
                        type: "POST",
                        data: {
                            _method: "DELETE",
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Document has been deleted.',
                                'success'
                            );
                            loadDocuments();
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Failed to delete document.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>

{{-- faqs section --}}

<script>
    $(document).ready(function() {
        // Load FAQs on page load
        loadFAQs();

        function loadFAQs() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/admin/faqs/page/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#faqsTableBody').html(
                        '<tr><td colspan="6" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderFAQs(response.data);
                    } else {
                        $('#faqsTableBody').html(
                            '<tr><td colspan="6" class="text-center">No FAQs found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#faqsTableBody').html(
                        '<tr><td colspan="6" class="text-center text-danger">Error loading FAQs</td></tr>'
                    );
                    console.error("Error loading FAQs:", xhr.responseText);
                    toastr.error("Failed to load FAQs");
                }
            });
        }

        function renderFAQs(faqs) {
            let html = '';
            faqs.forEach((faq, index) => {
                // Safely parse JSON fields
                const question = typeof faq.question === 'string' ? JSON.parse(faq.question) : faq.question || {
                    en: '',
                    ar: ''
                };
                const answer = typeof faq.answer === 'string' ? JSON.parse(faq.answer) : faq.answer || {
                    en: '',
                    ar: ''
                };

                // Shorten the answer for display
                const shortAnswer = answer.en.length > 50 ?
                    answer.en.substring(0, 50) + '...' :
                    answer.en || 'No answer';

                html += `
            <tr id="faq-row-${faq.id}">
                <td>${index + 1}</td>
                <td>${question.en || 'No question'}</td>
                <td title="${answer.en}">${shortAnswer}</td>
                <td>${faq.order_no || 0}</td>
                <td>
                    <span class="badge ${faq.status === 'active' ? 'bg-success' : 'bg-secondary'}">
                        ${faq.status}
                    </span>
                </td>
                <td>
                    <button class="btn btn-sm btn-primary editFaq" data-id="${faq.id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-danger delete-faq" data-id="${faq.id}">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </td>
            </tr>`;
            });
            $('#faqsTableBody').html(html);
        }


        // Edit FAQ with validation
        $(document).on('click', '.editFaq', function() {
            let id = $(this).data('id');
            $.ajax({
                url: `/admin/faqs/${id}/edit`,
                type: "GET",
                beforeSend: function() {
                    $(this).prop('disabled', true);
                },
                success: function(response) {
                    // Parse JSON fields if needed
                    const question = typeof response.question === 'string' ?
                        JSON.parse(response.question) :
                        response.question || {
                            en: "",
                            ar: ""
                        };
                    const answer = typeof response.answer === 'string' ?
                        JSON.parse(response.answer) :
                        response.answer || {
                            en: "",
                            ar: ""
                        };

                    $('#editFaqId').val(id);
                    $('#editFaqQuestionEn').val(question.en);
                    $('#editFaqQuestionAr').val(question.ar);
                    $('#editFaqAnswerEn').val(answer.en);
                    $('#editFaqAnswerAr').val(answer.ar);
                    $('#editFaqOrderNo').val(response.order_no || 0);
                    $('#editFaqStatus').val(response.status || 'active');

                    $('#editFaqModal').modal('show');
                },
                error: function(xhr) {
                    console.error("Error loading FAQ:", xhr.responseText);
                    toastr.error("Failed to load FAQ data");
                },
                complete: function() {
                    $(this).prop('disabled', false);
                }
            });
        });

        // Update FAQ with validation - FIXED VERSION
        $('#editFaqForm').submit(function(e) {
            e.preventDefault();
            $(".error").text("");
            // Get all required field values
            const questionEn = $("#editFaqQuestionEn").val().trim();
            const questionAr = $("#editFaqQuestionAr").val().trim();
            const answerEn = $("#editFaqAnswerEn").val().trim();
            const answerAr = $("#editFaqAnswerAr").val().trim();
            const status = $("#editFaqStatus").val();

            // Validate required fields
            let isValid = true;

            if (!questionEn) {
                $("#editFaqErrorQuestionEn").text("English question is required");
                isValid = false;
            }

            if (!questionAr) {
                $("#editFaqErrorQuestionAr").text("Arabic question is required");
                isValid = false;
            }

            if (!answerEn) {
                $("#editFaqErrorAnswerEn").text("English answer is required");
                isValid = false;
            }

            if (!answerAr) {
                $("#editFaqErrorAnswerAr").text("Arabic answer is required");
                isValid = false;
            }

            if (!isValid) {
                toastr.error("Please fill all required fields");
                return;
            }

            let id = $('#editFaqId').val();

            // Prepare form data in correct format
            const formData = new FormData();
            formData.append('_method', 'PUT'); // This is crucial for resource routes
            formData.append('question[en]', questionEn);
            formData.append('question[ar]', questionAr);
            formData.append('answer[en]', answerEn);
            formData.append('answer[ar]', answerAr);
            formData.append('order_no', $("#editFaqOrderNo").val() || 0);
            formData.append('status', status);
            formData.append('_token', "{{ csrf_token() }}");

            // Use the resource route URL
            const url = "{{ route('faqs.update', ':id') }}".replace(':id', id);

            $.ajax({
                url: url,
                type: "POST", // Still POST but with _method=PUT
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#editFaqSubmitBtn").prop('disabled', true)
                        .html('<i class="fas fa-spinner fa-spin"></i> Updating...');
                },
                success: function(response) {
                    toastr.success("FAQ updated successfully");
                    $('#editFaqModal').modal('hide');
                    loadFAQs();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        // Handle validation errors
                        if (errors['question.en']) {
                            $("#editFaqErrorQuestionEn").text(errors['question.en'][0]);
                        }
                        if (errors['question.ar']) {
                            $("#editFaqErrorQuestionAr").text(errors['question.ar'][0]);
                        }
                        if (errors['answer.en']) {
                            $("#editFaqErrorAnswerEn").text(errors['answer.en'][0]);
                        }
                        if (errors['answer.ar']) {
                            $("#editFaqErrorAnswerAr").text(errors['answer.ar'][0]);
                        }
                        if (errors['status']) {
                            $("#editFaqErrorStatus").text(errors['status'][0]);
                        }
                    } else {
                        toastr.error("Something went wrong");
                        console.error("Update error:", xhr.responseText);
                    }
                },
                complete: function() {
                    $("#editFaqSubmitBtn").prop('disabled', false).html('Update');
                }
            });
        });

        // Update FAQ with validation
        $(document).ready(function() {
            // ... (keep your existing loadFAQs and renderFAQs functions)

            // Add new FAQ with validation - UPDATED VERSION
            $("#faqForm").submit(function(e) {
                e.preventDefault();
                $(".error").text("");

                // Get all required field values
                const questionEn = $("#faqQuestionEn").val().trim();
                const questionAr = $("#faqQuestionAr").val().trim();
                const answerEn = $("#faqAnswerEn").val().trim();
                const answerAr = $("#faqAnswerAr").val().trim();
                const status = $("#faqStatus").val();

                // Validate required fields
                let isValid = true;

                if (!questionEn) {
                    $("#faqErrorQuestionEn").text("English question is required");
                    isValid = false;
                }

                if (!questionAr) {
                    $("#faqErrorQuestionAr").text("Arabic question is required");
                    isValid = false;
                }

                if (!answerEn) {
                    $("#faqErrorAnswerEn").text("English answer is required");
                    isValid = false;
                }

                if (!answerAr) {
                    $("#faqErrorAnswerAr").text("Arabic answer is required");
                    isValid = false;
                }

                if (!isValid) {
                    toastr.error("Please fill all required fields");
                    return;
                }

                // Prepare form data in the correct format
                const formData = new FormData();
                formData.append('page_id', $("#faqPageId").val());
                formData.append('question[en]', questionEn);
                formData.append('question[ar]', questionAr);
                formData.append('answer[en]', answerEn);
                formData.append('answer[ar]', answerAr);
                formData.append('order_no', $("#faqOrderNo").val() || 0);
                formData.append('status', status);
                formData.append('_token', "{{ csrf_token() }}");

                $.ajax({
                    url: "{{ route('faqs.store') }}",
                    type: "POST",
                    data: formData,
                    processData: false, // Important for FormData
                    contentType: false, // Important for FormData
                    beforeSend: function() {
                        $("#faqSubmitBtn").prop('disabled', true)
                            .html('<i class="fas fa-spinner fa-spin"></i> Saving...');
                    },
                    success: function(response) {
                        toastr.success("FAQ added successfully");
                        $("#faqForm")[0].reset();
                        $("#faqModal").modal('hide');
                        loadFAQs();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            // Handle validation errors
                            if (errors['question.en']) {
                                $("#faqErrorQuestionEn").text(errors['question.en'][0]);
                            }
                            if (errors['question.ar']) {
                                $("#faqErrorQuestionAr").text(errors['question.ar'][0]);
                            }
                            if (errors['answer.en']) {
                                $("#faqErrorAnswerEn").text(errors['answer.en'][0]);
                            }
                            if (errors['answer.ar']) {
                                $("#faqErrorAnswerAr").text(errors['answer.ar'][0]);
                            }
                            if (errors['status']) {
                                $("#faqErrorStatus").text(errors['status'][0]);
                            }
                        } else {
                            toastr.error("Something went wrong");
                            console.error("Error:", xhr.responseText);
                        }
                    },
                    complete: function() {
                        $("#faqSubmitBtn").prop('disabled', false).html('Save');
                    }
                });
            });

            // ... (keep your existing edit, update, and delete functions)
        });

        // Delete FAQ with confirmation
        $(document).on('click', '.delete-faq', function() {
            let id = $(this).data('id');
            const $deleteBtn = $(this);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/faqs/${id}`,
                        type: "POST",
                        data: {
                            _method: "DELETE",
                            _token: "{{ csrf_token() }}"
                        },
                        beforeSend: function() {
                            $deleteBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'FAQ has been deleted.',
                                'success'
                            );
                            loadFAQs();
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Error!',
                                xhr.responseJSON.message || 'Failed to delete FAQ.',
                                'error'
                            );
                            console.error("Delete error:", xhr.responseText);
                        },
                        complete: function() {
                            $deleteBtn.prop('disabled', false).html('<i class="fas fa-trash"></i> Delete');
                        }
                    });
                }
            });
        });
    });
</script>

{{-- call to action  --}}

<script>
    $(document).ready(function() {
        // Load CTAs on page load
        loadCTAs();

        function loadCTAs() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/admin/call-to-actions/page/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#ctasTableBody').html(
                        '<tr><td colspan="6" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderCTAs(response.data);
                    } else {
                        $('#ctasTableBody').html(
                            '<tr><td colspan="6" class="text-center">No CTAs found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#ctasTableBody').html(
                        '<tr><td colspan="6" class="text-center text-danger">Error loading CTAs</td></tr>'
                    );
                    console.error("Error loading CTAs:", xhr.responseText);
                }
            });
        }

        function renderCTAs(ctas) {
            let html = '';
            ctas.forEach((cta, index) => {
                const title = typeof cta.title === 'string' ? JSON.parse(cta.title) : cta.title;
                const buttonText = typeof cta.button_text === 'string' ? JSON.parse(cta.button_text) : cta.button_text;

                html += `
                <tr id="cta-row-${cta.id}">
                    <td>${index + 1}</td>
                    <td>${title.en}</td>
                    <td>${buttonText.en}</td>
                    <td>${cta.button_link}</td>
                    <td>
                        <span class="badge ${cta.status === 'active' ? 'bg-success' : 'bg-secondary'}">
                            ${cta.status}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary editCta" data-id="${cta.id}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger delete-cta" data-id="${cta.id}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>`;
            });
            $('#ctasTableBody').html(html);
        }

        // Add new CTA with validation
        $("#ctaForm").submit(function(e) {
            e.preventDefault();
            $(".error").text("");

            // Get all required field values
            const titleEn = $("#ctaTitleEn").val().trim();
            const titleAr = $("#ctaTitleAr").val().trim();
            const buttonTextEn = $("#ctaButtonTextEn").val().trim();
            const buttonTextAr = $("#ctaButtonTextAr").val().trim();
            const buttonLink = $("#ctaButtonLink").val().trim();
            const status = $("#ctaStatus").val();

            // Validate required fields
            let isValid = true;

            if (!titleEn) {
                $("#ctaErrorTitleEn").text("English title is required");
                isValid = false;
            }

            if (!titleAr) {
                $("#ctaErrorTitleAr").text("Arabic title is required");
                isValid = false;
            }

            if (!buttonTextEn) {
                $("#ctaErrorButtonTextEn").text("English button text is required");
                isValid = false;
            }

            if (!buttonTextAr) {
                $("#ctaErrorButtonTextAr").text("Arabic button text is required");
                isValid = false;
            }

            if (!buttonLink) {
                $("#ctaErrorButtonLink").text("Button link is required");
                isValid = false;
            }

            if (!status) {
                $("#ctaErrorStatus").text("Status is required");
                isValid = false;
            }

            if (!isValid) {
                toastr.error("Please fill all required fields");
                return;
            }

            let formData = {
                page_id: $("#ctaPageId").val(),
                title: {
                    en: titleEn,
                    ar: titleAr
                },
                subtitle: {
                    en: $("#ctaSubtitleEn").val(),
                    ar: $("#ctaSubtitleAr").val()
                },
                button_text: {
                    en: buttonTextEn,
                    ar: buttonTextAr
                },
                button_link: buttonLink,
                status: status,
                _token: "{{ csrf_token() }}"
            };

            $.ajax({
                url: "{{ route('call-to-actions.store') }}",
                type: "POST",
                data: formData,
                dataType: 'json',
                success: function(response) {
                    toastr.success("CTA added successfully");
                    $("#ctaForm")[0].reset();
                    $("#ctaModal").modal('hide');
                    loadCTAs();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $("#ctaError" + key.replace('.', '').replace(/\[|\]/g, '')).text(value[0]);
                        });
                    } else {
                        toastr.error("Something went wrong");
                    }
                }
            });
        });

        // Edit CTA with validation
        $(document).on('click', '.editCta', function() {
            let id = $(this).data('id');
            $.ajax({
                url: `/admin/call-to-actions/${id}/edit`,
                type: "GET",
                success: function(response) {
                    let title = response.title || {
                        en: "",
                        ar: ""
                    };
                    let subtitle = response.subtitle || {
                        en: "",
                        ar: ""
                    };
                    let buttonText = response.button_text || {
                        en: "",
                        ar: ""
                    };

                    $('#editCtaId').val(id);
                    $('#editCtaTitleEn').val(title.en);
                    $('#editCtaTitleAr').val(title.ar);
                    $('#editCtaSubtitleEn').val(subtitle.en);
                    $('#editCtaSubtitleAr').val(subtitle.ar);
                    $('#editCtaButtonTextEn').val(buttonText.en);
                    $('#editCtaButtonTextAr').val(buttonText.ar);
                    $('#editCtaButtonLink').val(response.button_link);
                    $('#editCtaStatus').val(response.status || 'active');

                    $('#editCtaModal').modal('show');
                }
            });
        });

        // Update CTA with validation
        $('#editCtaForm').submit(function(e) {
            e.preventDefault();
            $(".error").text("");

            // Get all required field values
            const titleEn = $("#editCtaTitleEn").val().trim();
            const titleAr = $("#editCtaTitleAr").val().trim();
            const buttonTextEn = $("#editCtaButtonTextEn").val().trim();
            const buttonTextAr = $("#editCtaButtonTextAr").val().trim();
            const buttonLink = $("#editCtaButtonLink").val().trim();
            const status = $("#editCtaStatus").val();

            // Validate required fields
            let isValid = true;

            if (!titleEn) {
                $("#editCtaErrorTitleEn").text("English title is required");
                isValid = false;
            }

            if (!titleAr) {
                $("#editCtaErrorTitleAr").text("Arabic title is required");
                isValid = false;
            }

            if (!buttonTextEn) {
                $("#editCtaErrorButtonTextEn").text("English button text is required");
                isValid = false;
            }

            if (!buttonTextAr) {
                $("#editCtaErrorButtonTextAr").text("Arabic button text is required");
                isValid = false;
            }

            if (!buttonLink) {
                $("#editCtaErrorButtonLink").text("Button link is required");
                isValid = false;
            }

            if (!status) {
                $("#editCtaErrorStatus").text("Status is required");
                isValid = false;
            }

            if (!isValid) {
                toastr.error("Please fill all required fields");
                return;
            }

            let id = $('#editCtaId').val();
            let formData = {
                title: {
                    en: titleEn,
                    ar: titleAr
                },
                subtitle: {
                    en: $("#editCtaSubtitleEn").val(),
                    ar: $("#editCtaSubtitleAr").val()
                },
                button_text: {
                    en: buttonTextEn,
                    ar: buttonTextAr
                },
                button_link: buttonLink,
                status: status,
                _method: "PUT",
                _token: "{{ csrf_token() }}"
            };

            $.ajax({
                url: `/admin/call-to-actions/${id}`,
                type: "POST",
                data: formData,
                dataType: 'json',
                success: function(response) {
                    toastr.success("CTA updated successfully");
                    $('#editCtaModal').modal('hide');
                    loadCTAs();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $("#editCtaError" + key.replace('.', '').replace(/\[|\]/g, '')).text(value[0]);
                        });
                    } else {
                        toastr.error("Something went wrong");
                    }
                }
            });
        });

        // Delete CTA
        $(document).on('click', '.delete-cta', function() {
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/call-to-actions/${id}`,
                        type: "POST",
                        data: {
                            _method: "DELETE",
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'CTA has been deleted.',
                                'success'
                            );
                            loadCTAs();
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Failed to delete CTA.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>

{{-- Hero Section --}}

<script>
    $(document).ready(function() {
        // Load hero sections on page load
        loadHeroSections();

        function loadHeroSections() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/hero-sections/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#herosectionsTableBody').html(
                        '<tr><td colspan="5" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderHeroSections(response.data);
                    } else {
                        $('#herosectionsTableBody').html(
                            '<tr><td colspan="5" class="text-center">No hero sections found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#herosectionsTableBody').html(
                        '<tr><td colspan="5" class="text-center text-danger">Error loading hero sections</td></tr>'
                    );
                    console.error("Error loading hero sections:", xhr.responseText);
                }
            });
        }

        function renderHeroSections(herosections) {
            let html = '';

            herosections.forEach((herosection, index) => {
                // Safely handle JSON fields
                const title = typeof herosection.title === 'string' ?
                    JSON.parse(herosection.title) :
                    herosection.title || {
                        en: '',
                        ar: ''
                    };

                const subtitle = typeof herosection.subtitle === 'string' ?
                    JSON.parse(herosection.subtitle) :
                    herosection.subtitle || {
                        en: '',
                        ar: ''
                    };

                html += `
                <tr id="herosection-row-${herosection.id}">
                    <td>${index + 1}</td>
                    <td>
                        ${herosection.background_image ? 
                            `<img src="/uploads/hero_section/${herosection.background_image}" width="50" height="50" class="img-thumbnail">` : 
                            'No Image'}
                    </td>
                    <td>${title.en || 'No title'}</td>
                    <td>${subtitle.en || 'No subtitle'}</td>
                    <td>
                        <button class="btn btn-sm btn-primary editHeroSection" data-id="${herosection.id}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger delete-herosection" data-id="${herosection.id}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>`;
            });

            $('#herosectionsTableBody').html(html);
        }

        function refreshHeroSections() {
            loadHeroSections();
        }

        // Add Hero Section Form Submission
        $("#herosectionForm").submit(function(event) {
            event.preventDefault();
            $(".error").text("");

            // Basic frontend validation
            let isValid = true;
            if (!$("#title_en").val().trim()) {
                $("#error_title_en").text("English title is required");
                isValid = false;
            }
            if (!$("#title_ar").val().trim()) {
                $("#error_title_ar").text("Arabic title is required");
                isValid = false;
            }
            if (!isValid) return;

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.hero_section.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success("Hero Section added successfully!");
                        $("#herosectionForm")[0].reset();
                        $("#herosectionModal").modal('hide');
                        refreshHeroSections();
                    } else if (response.errors) {
                        $.each(response.errors, function(key, value) {
                            $("#error_" + key.replace('.', '_')).text(value[0]);
                        });
                        toastr.error("Please fix the errors");
                    }
                },
                error: function(xhr) {
                    toastr.error("Something went wrong!");
                    console.error(xhr.responseText);
                }
            });
        });

        // Edit Hero Section
        $(document).on('click', '.editHeroSection', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.hero_section.edit', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(response) {
                    // Handle multilingual fields
                    const title = typeof response.title === 'string' ?
                        JSON.parse(response.title) : response.title || {
                            en: '',
                            ar: ''
                        };
                    const subtitle = typeof response.subtitle === 'string' ?
                        JSON.parse(response.subtitle) : response.subtitle || {
                            en: '',
                            ar: ''
                        };
                    const description = typeof response.description === 'string' ?
                        JSON.parse(response.description) : response.description || {
                            en: '',
                            ar: ''
                        };

                    // Populate form
                    $('#update_herosection_id').val(id);
                    $('#update_title_en').val(title.en);
                    $('#update_title_ar').val(title.ar);
                    $('#update_subtitle_en').val(subtitle.en);
                    $('#update_subtitle_ar').val(subtitle.ar);
                    $('#update_description_en').val(description.en);
                    $('#update_description_ar').val(description.ar);
                    $('#update_status').val(response.status);

                    // Image preview
                    if (response.background_image) {
                        $('#editHeroSectionModal').find('.image-preview').html(
                            `<img src="/uploads/hero_section/${response.background_image}" width="100" class="img-thumbnail">`
                        );
                    } else {
                        $('#editHeroSectionModal').find('.image-preview').html('<p>No image</p>');
                    }

                    $('#editHeroSectionModal').modal('show');
                },
                error: function(xhr) {
                    toastr.error("Failed to load hero section data");
                    console.error(xhr.responseText);
                }
            });
        });

        // Update Hero Section
        $('#editHeroSectionForm').on('submit', function(e) {
            e.preventDefault();
            $('.error').text('');

            let formData = new FormData(this);
            let id = $('#update_herosection_id').val();
            let url = `{{ route('admin.hero_section.update', ':id') }}`.replace(':id', id);

            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $('#editHeroSectionModal').modal('hide');
                    toastr.success("Hero Section updated successfully!");
                    refreshHeroSections();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        $.each(xhr.responseJSON.errors, function(key, error) {
                            $('#error_' + key.replace('.', '_')).text(error[0]);
                        });
                    } else {
                        toastr.error("Something went wrong!");
                    }
                }
            });
        });

        // Delete Hero Section
        $(document).on("click", ".delete-herosection", function() {
            let herosectionId = $(this).data("id");

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
                        url: `/hero-section/delete/${herosectionId}/`,
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            _method: "DELETE"
                        },
                        success: function(response) {
                            Swal.fire({
                                title: "Deleted!",
                                text: response.message,
                                icon: "success",
                                timer: 2000,
                                showConfirmButton: false
                            });
                            refreshHeroSections();
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Error!",
                                text: xhr.responseJSON.message || "Failed to delete",
                                icon: "error"
                            });
                        }
                    });
                }
            });
        });
    });
</script>
<script>
    $(document).on("click", ".editFeature", function() {
        let id = $(this).data("id");
        $.ajax({
            url: "{{ route('admin.feature.edit', ':id') }}".replace(":id", id),
            type: "GET",
            success: function(response) {
                let title = response.title ? response.title : {
                    en: "",
                    ar: ""
                };
                let subtitle = response.subtitle ? response.subtitle : {
                    en: "",
                    ar: ""
                };
                let description = response.description ? response.description : {
                    en: "",
                    ar: ""
                };

                // Populate form fields
                $("#update_feature_id").val(id);
                $("#update_title_en").val(title.en);
                $("#update_title_ar").val(title.ar);
                $("#update_subtitle_en").val(subtitle.en);
                $("#update_subtitle_ar").val(subtitle.ar);
                $("#update_description_en").val(description.en);
                $("#update_description_ar").val(description.ar);
                $("#update_icon").val(response.icon);
                $("#update_status").val(response.status);
                $("#update_order_no").val(response.order_no);
                // Show the modal
                $("#editFeatureModal").modal("show");
            },
            error: function(xhr) {
                console.log("AJAX Error:", xhr);
            },
        });
    });

    $('#editHeroSectionForm').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        let id = $('#update_herosection_id').val();
        let url = `{{ route('admin.hero_section.update', ':id') }}`.replace(':id', id);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            success: function(response) {
                $('#editHeroSectionModal').modal('hide');
                toastr.success("Hero Section updated successfully!");
                refreshHeroSections();
            },
            error: function(response) {
                $('.error').text('');
                $.each(response.responseJSON.errors, function(key, error) {
                    $('#error_' + key.replace('.', '_')).text(error[0]);
                });
            }
        });
    });

    $(document).on("click", ".delete-herosection", function() {
        let herosectionId = $(this).data("id");

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
                    url: `/hero-section/delete/${herosectionId}/`,
                    type: "POST",
                    data: {
                        _method: "POST",
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

                        refreshHeroSections();
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

    // });
    // 
</script>

{{-- Feature Section --}}

<script>
    $(document).ready(function() {
        // Initialize CSRF token for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Load features on page load
        loadFeatures();

        function loadFeatures() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/feature/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#featuresTableBody').html(
                        '<tr><td colspan="5" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderFeatures(response.data);
                    } else {
                        $('#featuresTableBody').html(
                            '<tr><td colspan="8" class="text-center">No features found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#featuresTableBody').html(
                        '<tr><td colspan="5" class="text-center text-danger">Error loading features</td></tr>'
                    );
                    console.error("Error loading features:", xhr.responseText);
                }
            });
        }

        function renderFeatures(features) {
            let html = '';
            features.forEach((feature, index) => {
                // Parse JSON fields if needed
                const title = typeof feature.title === 'string' ? JSON.parse(feature.title) : feature.title;
                const subtitle = typeof feature.subtitle === 'string' ? JSON.parse(feature.subtitle) : feature.subtitle;
                const description = typeof feature.description === 'string' ? JSON.parse(feature.description) : feature.description;
                const icon = typeof feature.icon === 'string' ? JSON.parse(feature.icon) : feature.icon;
                html += `
                <tr id="feature-row-${feature.id}">
                    <td>${index + 1}</td>
                    <td>${icon || ''}</td>
                    <td>${title?.en || ''}</td>
                    <td>${subtitle?.en || ''}</td>
                    <td>${description?.en || ''}</td>
                    <td>
                        <span class="badge ${feature.status === 'active' ? 'bg-success' : 'bg-secondary'}">
                            ${feature.status}
                        </span>
                    </td>
                    <td>${order_no?.en || ''}</td>
                    <td>
                        <button class="btn btn-sm btn-primary edit-feature" data-id="${feature.id}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger delete-feature" data-id="${feature.id}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>`;
            });
            $('#featuresTableBody').html(html);
        }

        $("#featureForm").submit(function(e) {
            e.preventDefault();
            // Simple form data collection
            let formData = {
                page_id: $('[name="page_id"]').val(),
                title: {
                    en: $('[name="title_en"]').val().trim(),
                    ar: $('[name="title_ar"]').val().trim()
                },
                subtitle: {
                    en: $('[name="subtitle_en"]').val().trim(),
                    ar: $('[name="subtitle_ar"]').val().trim()
                },
                description: {
                    en: $('[name="description_en"]').val().trim(),
                    ar: $('[name="description_ar"]').val().trim()
                },
                // icon: $('[name="icon"]').val().trim(), // Simple icon collection
                order_no: $('[name="order_no"]').val() || 0,
                status: $('[name="status"]').val()
            };
            // Simple AJAX call
            $.ajax({
                url: "{{ route('admin.feature.store') }}",
                type: "POST",
                data: JSON.stringify(formData),
                contentType: "application/json", // Tell server you're sending JSON
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token if needed
                },
                success: function(response) {
                    if (response.success) {
                        $("#featureForm")[0].reset();
                        $("#featureModal").modal('hide');
                        loadFeatures();
                    }
                },
                error: function(xhr) {
                    alert('Error: ' + (xhr.responseJSON.message || "Something went wrong"));
                }
            });

        });

        // Edit Feature - Show Modal
        $(document).on('click', '.edit-feature', function() {
            const featureId = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.feature.edit', ':id') }}".replace(':id', featureId),
                type: "GET",
                beforeSend: function() {
                    $(this).prop('disabled', true);
                },
                success: function(response) {
                    $('#update_feature_id').val(featureId);
                    $('#update_feature_title_en').val(response.title?.en || '');
                    $('#update_feature_title_ar').val(response.title?.ar || '');
                    $('#update_feature_subtitle_en').val(response.subtitle?.en || '');
                    $('#update_feature_subtitle_ar').val(response.subtitle?.ar || '');
                    $('#update_feature_description_en').val(response.description?.en || '');
                    $('#update_feature_description_ar').val(response.description?.ar || '');
                    $('#update_feature_icon').val(response.icon || '');
                    $('#update_feature_order_no').val(response.order_no || 0);
                    $('#update_feature_status').val(response.status || 'active');

                    $('#editFeatureModal').modal('show');
                },
                error: function(xhr) {
                    toastr.error("Failed to load feature data");
                    console.error("Error:", xhr.responseText);
                },
                complete: function() {
                    $(this).prop('disabled', false);
                }
            });
        });

        // Update Feature
        $("#editFeatureForm").submit(function(e) {
            e.preventDefault();
            $(".error").text("");

            const featureId = $('#update_feature_id').val();
            const formData = {
                title: {
                    en: $("#update_feature_title_en").val().trim(),
                    ar: $("#update_feature_title_ar").val().trim()
                },
                subtitle: {
                    en: $("#update_feature_subtitle_en").val().trim(),
                    ar: $("#update_feature_subtitle_ar").val().trim()
                },
                description: {
                    en: $("#update_feature_description_en").val().trim(),
                    ar: $("#update_feature_description_ar").val().trim()
                },
                icon: $("#update_feature_icon").val().trim(),
                order_no: $("#update_feature_order_no").val() || 0,
                status: $("#update_feature_status").val(),
                _method: "PUT"
            };

            $.ajax({
                url: "{{ route('admin.feature.update', ':id') }}".replace(':id', featureId),
                type: "POST",
                data: formData,
                beforeSend: function() {
                    $('button[type="submit"]', '#editFeatureForm').prop('disabled', true)
                        .html('<i class="fas fa-spinner fa-spin"></i> Updating...');
                },
                success: function(response) {
                    toastr.success("Feature updated successfully");
                    $("#editFeatureModal").modal('hide');
                    loadFeatures();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        Object.keys(errors).forEach(key => {
                            const errorId = `error_${key.replace('.', '_')}`;
                            $(`#${errorId}`).text(errors[key][0]);
                        });
                        toastr.error("Please fix the validation errors");
                    } else {
                        toastr.error("Failed to update feature");
                        console.error("Error:", xhr.responseText);
                    }
                },
                complete: function() {
                    $('button[type="submit"]', '#editFeatureForm').prop('disabled', false).html('Update');
                }
            });
        });

        // Delete Feature
        $(document).on("click", ".delete-feature", function() {
            const featureId = $(this).data("id");

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
                        url: "{{ route('admin.feature.delete', ':id') }}".replace(':id', featureId),
                        type: "DELETE",
                        success: function(response) {
                            toastr.success("Feature deleted successfully");
                            loadFeatures();
                        },
                        error: function(xhr) {
                            toastr.error("Failed to delete feature");
                            console.error("Error:", xhr.responseText);
                        }
                    });
                }
            });
        });
    });
</script>

{{-- Intro Section --}}

<script>
    $(document).ready(function() {
        loadIntroSections();

        function loadIntroSections() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/Intro-sections/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    // Show loading indicator
                    $('#introsectionsTableBody').html(
                        '<tr><td colspan="5" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderIntroSections(response.data);
                    } else {
                        $('#introsectionsTableBody').html(
                            '<tr><td colspan="5" class="text-center">No introsections found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#introsectionsTableBody').html(
                        '<tr><td colspan="5" class="text-center text-danger">Error loading introsections</td></tr>'
                    );
                    console.error("Error loading introsections:", xhr.responseText);
                }
            });
        }

        // Function to render introsections in table

        function renderIntroSections(introsections) {
            let html = '';

            introsections.forEach((introsection, index) => {
                let formattedText = introsection.type.replace(/_/g, ' ');
                formattedText = formattedText.charAt(0).toUpperCase() + formattedText.slice(1);
                const introtitle = typeof introsection.title === 'string' ? JSON.parse(introsection.title) :
                    introsection.title;
                const introsubtitle = typeof introsection.subtitle === 'string' ? JSON.parse(introsection
                    .subtitle) : introsection.subtitle;

                html += `
            <tr id="introsection-row-${introsection.id}">
                <td>${index + 1}</td>
                <td>
                    ${formattedText}
                </td>
                <td>${introtitle.en}</td>
                <td>${introsubtitle.en}</td>
                <td>
                    <button class="btn btn-sm btn-primary editIntroSection" data-id="${introsection.id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <form class="d-inline-block" action="/admin/Intro-sections/${introsection.id}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm delete-introsection" data-id="${introsection.id}">
    <i class="fas fa-trash"></i> Delete
</button>
                    </form>
                </td>
            </tr>`;
            });

            $('#introsectionsTableBody').html(html);
        }

        function refreshIntroSections() {
            loadIntroSections();
        }



        $("#introsectionForm").submit(function(event) {
            event.preventDefault();


            $(".error").text("");
            let introtitleEn = $("#intro_title_en").val().trim();
            let introtitleAr = $("#intro_title_ar").val().trim();
            let introsubtitleEn = $("#intro_subtitle_en").val().trim();
            let introsubtitleAr = $("#intro_subtitle_ar").val().trim();
            let introdescriptionEn = $("#intro_description_en").val().trim();
            let introdescriptionAr = $("#intro_description_ar").val().trim();

            let isValid = true;

            // Frontend validation
            if (introtitleEn.length < 1) {
                $("#error_intro_name_en").text("English name is required.");
                isValid = false;
            }
            if (introtitleAr.length < 1) {
                $("#error_intro_name_ar").text("Arabic name is required.");
                isValid = false;
            }
            if (introdescriptionEn.length < 1) {
                $("#error_intro_designation_en").text("English description is required.");
                isValid = false;
            }
            if (introdescriptionAr.length < 1) {
                $("#error_intro_designation_ar").text("Arabic description is required.");
                isValid = false;
            }
            if (introsubtitleEn.length < 1) {
                // $("#error_feedback_en").text("English feedback is required.");
                isValid = true;
            }
            if (introsubtitleAr.length < 1) {
                // $("#error_feedback_ar").text("Arabic feedback is required.");
                isValid = true;
            }

            if (!isValid) return;

            // Prepare FormData
            let introformData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.intro_section.store') }}",
                type: "POST",
                data: introformData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success("IntroSection added successfully!");

                        refreshIntroSections();

                        $("#introsectionForm")[0].reset();
                        $("#introsectionModal").removeClass("show").hide();
                        $(".modal-backdrop").remove();
                        $("body").removeClass("modal-open");
                    } else {
                        if (response.errors) {
                            $.each(response.errors, function(key, value) {
                                $("#error_intro_" + key.replace('.', '_')).text(value[0]);
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

        $(document).on('click', '.editIntroSection', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.intro_section.edit', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(response) {

                    let introtitle = response.title ? response.title : {
                        en: "",
                        ar: ""
                    };
                    let introsubtitle = response.subtitle ? response.subtitle : {
                        en: "",
                        ar: ""
                    };
                    let introdescription = response.description ? response.description : {
                        en: "",
                        ar: ""
                    };

                    // Populate form fields
                    $('#update_introsection_id').val(id);
                    $('#update_intro_title_en').val(introtitle.en);
                    $('#update_intro_title_ar').val(introtitle.ar);
                    $('#update_intro_subtitle_en').val(introsubtitle.en);
                    $('#update_intro_subtitle_ar').val(introsubtitle.ar);
                    $('#update_intro_description_en').val(introdescription.en);
                    $('#update_intro_description_ar').val(introdescription.ar);
                    $('#update_intro_status').val(response.status);
                    $('#update_intro_type').val(response.type);

                    // Ensure background image is set
                    if (response.images) {
                        let imagePath = `/uploads/introsections/${response.images}`;
                        $('#image_preview').attr('src', imagePath).show();
                    } else {
                        $('#image_preview').hide();
                    }

                    // Show the modal
                    $('#editIntroSectionModal').modal('show');
                },
                error: function(xhr) {
                    console.log("AJAX Error:", xhr);
                }
            });
        });



        $('#editIntroSectionForm').on('submit', function(e) {
            e.preventDefault();

            let introformData = new FormData(this);
            let id = $('#update_introsection_id').val();
            let url = `{{ route('admin.intro_section.update', ':id') }}`.replace(':id', id);

            $.ajax({
                url: url,
                type: "POST",
                data: introformData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $('#editIntroSectionModal').modal('hide');
                    toastr.success("Intro Section updated successfully!");
                    refreshIntroSections();
                },
                error: function(response) {
                    $('.error').text('');
                    $.each(response.responseJSON.errors, function(key, error) {
                        $('#error_intro_' + key.replace('.', '_')).text(error[0]);
                    });
                }
            });
        });

        $(document).on("click", ".delete-introsection", function() {
            let introsectionId = $(this).data("id");

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
                        url: `/Intro-section/delete/${introsectionId}/`,
                        type: "POST",
                        data: {
                            _method: "POST",
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

                            refreshIntroSections();
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const typeSelect = document.getElementById("intro_type");
        const imageInput = document.getElementById("intro_images");

        typeSelect.addEventListener("change", function() {
            let maxFiles = 1;

            if (this.value === "double_image") {
                maxFiles = 2;
            } else if (this.value === "tripple_image") {
                maxFiles = 3;
            }

            imageInput.addEventListener("change", function() {
                if (this.files.length > maxFiles) {
                    alert(`You can only select up to ${maxFiles} images.`);
                    this.value = "";
                }
            });
        });
    });
</script>

{{-- Section Title --}}

<script>
    $(document).ready(function() {
        loadSectionTitles();

        function loadSectionTitles() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/section-titles/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    // Show loading indicator
                    $('#sectiontitlesTableBody').html(
                        '<tr><td colspan="5" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderSectionTitles(response.data);
                    } else {
                        $('#sectiontitlesTableBody').html(
                            '<tr><td colspan="5" class="text-center">No sectiontitles found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#sectiontitlesTableBody').html(
                        '<tr><td colspan="5" class="text-center text-danger">Error loading sectiontitles</td></tr>'
                    );
                    console.error("Error loading sectiontitles:", xhr.responseText);
                }
            });
        }

        // Function to render sectiontitles in table

        function renderSectionTitles(sectiontitles) {
            let html = '';

            sectiontitles.forEach((sectiontitle, index) => {
                let formattedText = sectiontitle.type.replace(/_/g, ' ');
                formattedText = formattedText.charAt(0).toUpperCase() + formattedText.slice(1);
                const sectionstitle = typeof sectiontitle.title === 'string' ? JSON.parse(sectiontitle.title) :
                    sectiontitle.title;
                const sectionsubtitle = typeof sectiontitle.subtitle === 'string' ? JSON.parse(sectiontitle
                    .subtitle) : sectiontitle.subtitle;

                html += `
            <tr id="sectiontitle-row-${sectiontitle.id}">
                <td>${index + 1}</td>
                <td>
                    ${formattedText}
                </td>
                <td>${sectionstitle.en}</td>
                <td>${sectionsubtitle.en}</td>
                <td>
                    <button class="btn btn-sm btn-primary editSectionTitle" data-id="${sectiontitle.id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <form class="d-inline-block" action="/admin/section-titles/${sectiontitle.id}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm delete-sectiontitle" data-id="${sectiontitle.id}">
    <i class="fas fa-trash"></i> Delete
</button>
                    </form>
                </td>
            </tr>`;
            });

            $('#sectiontitlesTableBody').html(html);
        }

        function refreshSectionTitles() {
            loadSectionTitles();
        }



        $("#sectiontitleForm").submit(function(event) {
            event.preventDefault();


            $(".error").text("");
            let sectiontitleEn = $("#section_title_en").val().trim();
            let sectiontitleAr = $("#section_title_ar").val().trim();
            let sectionsubtitleEn = $("#section_subtitle_en").val().trim();
            let sectionsubtitleAr = $("#section_subtitle_ar").val().trim();

            let isValid = true;

            // Frontend validation
            if (sectiontitleEn.length < 1) {
                $("#error_section_name_en").text("English name is required.");
                isValid = false;
            }
            if (sectiontitleAr.length < 1) {
                $("#error_section_name_ar").text("Arabic name is required.");
                isValid = false;
            }
            if (sectionsubtitleEn.length < 1) {
                // $("#error_feedback_en").text("English feedback is required.");
                isValid = true;
            }
            if (sectionsubtitleAr.length < 1) {
                // $("#error_feedback_ar").text("Arabic feedback is required.");
                isValid = true;
            }

            if (!isValid) return;

            // Prepare FormData
            let sectionformData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.section_title.store') }}",
                type: "POST",
                data: sectionformData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success("SectionTitle added successfully!");

                        refreshSectionTitles();

                        $("#sectiontitleForm")[0].reset();
                        $("#sectiontitleModal").removeClass("show").hide();
                        $(".modal-backdrop").remove();
                        $("body").removeClass("modal-open");
                    } else {
                        if (response.errors) {
                            $.each(response.errors, function(key, value) {
                                $("#error_section_" + key.replace('.', '_')).text(value[0]);
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

        $(document).on('click', '.editSectionTitle', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.section_title.edit', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(response) {

                    let sectiontitle = response.title ? response.title : {
                        en: "",
                        ar: ""
                    };
                    let sectionsubtitle = response.subtitle ? response.subtitle : {
                        en: "",
                        ar: ""
                    };
                    let sectiondescription = response.description ? response.description : {
                        en: "",
                        ar: ""
                    };

                    // Populate form fields
                    $('#update_sectiontitle_id').val(id);
                    $('#update_section_title_en').val(sectiontitle.en);
                    $('#update_section_title_ar').val(sectiontitle.ar);
                    $('#update_section_subtitle_en').val(sectionsubtitle.en);
                    $('#update_section_subtitle_ar').val(sectionsubtitle.ar);
                    $('#update_section_status').val(response.status);
                    $('#update_section_type').val(response.type);

                    // Show the modal
                    $('#editSectionTitleModal').modal('show');
                },
                error: function(xhr) {
                    console.log("AJAX Error:", xhr);
                }
            });
        });



        $('#editSectionTitleForm').on('submit', function(e) {
            e.preventDefault();

            let sectionformData = new FormData(this);
            let id = $('#update_sectiontitle_id').val();
            let url = `{{ route('admin.section_title.update', ':id') }}`.replace(':id', id);

            $.ajax({
                url: url,
                type: "POST",
                data: sectionformData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $('#editSectionTitleModal').modal('hide');
                    toastr.success("SectionTitle updated successfully!");
                    refreshSectionTitles();
                },
                error: function(response) {
                    $('.error').text('');
                    $.each(response.responseJSON.errors, function(key, error) {
                        $('#error_section_' + key.replace('.', '_')).text(error[0]);
                    });
                }
            });
        });

        $(document).on("click", ".delete-sectiontitle", function() {
            let sectiontitleId = $(this).data("id");

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
                        url: `/section-title/delete/${sectiontitleId}/`,
                        type: "POST",
                        data: {
                            _method: "POST",
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

                            refreshSectionTitles();
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

{{-- Why Choose Us Section --}}



<script>
    $(document).ready(function() {

        loadWhyUs();

        function loadWhyUs() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/why-choose-us/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#whyusTableBody').html(
                        '<tr><td colspan="5" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderWhyUs(response.data);
                    } else {
                        $('#whyusTableBody').html(
                            '<tr><td colspan="5" class="text-center">No Records found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#whyusTableBody').html(
                        '<tr><td colspan="5" class="text-center text-danger">Error loading whyus</td></tr>'
                    );
                    console.error("Error loading whyus:", xhr.responseText);
                }
            });
        }

        // Function to render whyuss in table

        function renderWhyUs(whyuses) {
            let html = '';
            whyuses.forEach((whyus, index) => {
                const title = typeof whyus.title === 'string' ? JSON.parse(whyus.title) :
                    whyus.title;
                const subtitle = typeof whyus.subtitle === 'string' ? JSON.parse(whyus.subtitle) : whyus.subtitle;
                const description = typeof whyus.description === 'string' ? JSON.parse(whyus.description) : whyus.description;
                const icon = typeof whyus.icon === 'string' ? JSON.parse(whyus.icon) : whyus.icon;
                html += `
                <tr id="whyus-row-${whyus.id}">
                <td>${index + 1}</td>
                <td>${icon}</td>
                <td>${title.en}</td>
                <td>${subtitle.en}</td>
                <td>
                <button class="btn btn-sm btn-primary editFeature" data-id="${whyus.id}"><i class="fas fa-edit"></i> Edit</button>
                    <form class="d-inline-block" action="/whyus/delete/${whyus.id}">
                    @csrf
                    @method('POST')
                    <button type="button" class="btn btn-danger btn-sm delete-whyus" data-id="${whyus.id}">
                    <i class="fas fa-trash"></i> Delete
                    </button>
                    </form>
                </td>
            </tr>`;
            });
            $('#whyusTableBody').html(html);
        }

        function refreshWhyUs() {
            loadWhyUs();
        }

        $("#whyusForm").submit(function(event) {
            event.preventDefault();
            $(".error").text("");
            let titleEn = $("#title_en").val().trim();
            let titleAr = $("#title_ar").val().trim();
            let subtitleEn = $("#subtitle_en").val().trim();
            let subtitleAr = $("#subtitle_ar").val().trim();
            let descriptionEn = $("#description_en").val().trim();
            let descriptionAr = $("#description_ar").val().trim();
            let status = $('#status').val().trim();
            let icon = $("#icon").val().trim();
            let isValid = true;
            // Frontend validation
            if (titleEn.length < 1) {
                $("#error_name_en").text("English name is required.");
                isValid = false;
            }
            if (titleAr.length < 1) {
                $("#error_name_ar").text("Arabic name is required.");
                isValid = false;
            }
            if (subtitleEn.length < 1) {
                $("#error_subtitle").text("English subtitle is required.");
                isValid = false;
            }
            if (subtitleAr.length < 1) {
                $("#error_subtitle").text("Arabic subtitle is required.");
                isValid = false;
            }
            if (descriptionEn.length < 1) {
                isValid = true;
            }
            if (descriptionAr.length < 1) {
                isValid = true;
            }
            if (icon.length < 1) {
                $('#error_icon').text("Icon Field is required.");
                isValid = false;
            }
            if (!isValid) return;
            // Prepare FormData
            let formData = new FormData(this);
            $.ajax({
                url: "{{ route('admin.why-choose-us.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success("Feature added successfully!");
                        refreshWhyUs();
                        $("#whyusForm")[0].reset();
                        $("#whyusModal").removeClass("show").hide();
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
                error: function(xhr) {
                    console.error("AJAX Error:", xhr.responseText);
                    toastr.error("Something went wrong!");
                }
            });
        });

        $(document).on('click', '.editFeature', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.why-choose-us.edit', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(response) {

                    let title = response.title ? response.title : {
                        en: "",
                        ar: ""
                    };
                    let subtitle = response.subtitle ? response.subtitle : {
                        en: "",
                        ar: ""
                    };
                    let description = response.description ? response.description : {
                        en: "",
                        ar: ""
                    };
                    let icon = response.icon ? response.icon : "";

                    $('#update_whyus_id').val(id);
                    $('#update_whyus_title_en').val(title.en);
                    $('#update_whyus_title_ar').val(title.ar);
                    $('#update_whyus_subtitle_en').val(subtitle.en);
                    $('#update_whyus_subtitle_ar').val(subtitle.ar);
                    $('#update_whyus_description_en').val(description.en);
                    $('#update_whyus_description_ar').val(description.ar);
                    $('#update_whyus_status').val(response.status);
                    $('#update_whyus_icon').val(icon);
                    $('#update_whyus_order_no').val(response.order_no);

                    // Show the modal
                    $('#editWhyUsModal').modal('show');
                },
                error: function(xhr) {
                    console.log("AJAX Error:", xhr);
                }
            });
        });


        $('#editWhyUsForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            let id = $('#update_whyus_id').val();
            let url = `{{ route('admin.why-choose-us.update', ':id') }}`.replace(':id', id);

            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $('#editWhyUsModal').modal('hide');
                    toastr.success("Hero Section updated successfully!");
                    refreshWhyUs();
                },
                error: function(response) {
                    $('.error').text('');
                    $.each(response.responseJSON.errors, function(key, error) {
                        $('#error_' + key.replace('.', '_')).text(error[0]);
                    });
                }
            });
        });

        $(document).on("click", ".delete-whyus", function() {
            let whyusId = $(this).data("id");

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
                        url: `/why-choose-us/delete/${whyusId}`,
                        type: "POST",
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content') // Get CSRF token from meta tag
                        },
                        success: function(response) {
                            Swal.fire({
                                title: "Deleted!",
                                text: response.message,
                                icon: "success",
                                timer: 2000,
                                showConfirmButton: false
                            });
                            refreshWhyUs(); // Function to refresh the list
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

{{-- Feature Image Section --}}
<script>
    $(document).ready(function() {

        loadFeatureImages();

        function loadFeatureImages() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/feature-images/${pageId}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#featureimgsTableBody').html(
                        '<tr><td colspan="5" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                    );
                },
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        loadFeatureImageImages(response.data);
                    } else {
                        $('#featureimgsTableBody').html(
                            '<tr><td colspan="5" class="text-center">No features found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#featureimgsTableBody').html(
                        '<tr><td colspan="5" class="text-center text-danger">Error loading feature images</td></tr>'
                    );
                    console.error("Error loading features:", xhr.responseText);
                }
            });
        }

        // Function to render features in table
        function loadFeatureImageImages(featureimgs) {
            let html = '';
            featureimgs.forEach((featureimg, index) => {
                const title = typeof featureimg.title === 'string' ? JSON.parse(featureimg.title) :
                    featureimg.title;
                const subtitle = typeof featureimg.subtitle === 'string' ? JSON.parse(featureimg
                    .subtitle) : featureimg.subtitle;
                const description = typeof featureimg.description === 'string' ? JSON.parse(featureimg
                    .description) : featureimg.description;
                html += `
            <tr id="featureimg-row-${featureimg.id}">
                <td>${index + 1}</td>
                <td>
                    ${featureimg.image ? 
                        `<img src="/assets/admin/uploads/feature_image/${featureimg.image}" width="50" height="50px">` : 
                        ''}
                </td>
                <td>${title.en}</td>
                <td>${subtitle.en}</td>
                <td>
                    <button class="btn btn-sm btn-primary editFeatureImage" data-id="${featureimg.id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <form class="d-inline-block" action="/feature-image/delete/${featureimg.id}" method="post">
                        @csrf
                        @method('POST')
                        <button type="button" class="btn btn-danger btn-sm delete-featureimg" data-id="${featureimg.id}">
    <i class="fas fa-trash"></i> Delete
</button>
                    </form>
                </td>
            </tr>`;
            });

            $('#featureimgsTableBody').html(html);
        }

        function refreshFeatureImages() {
            loadFeatureImages();
        }



        $("#featureimgForm").submit(function(event) {
            event.preventDefault();

            $(".error").text("");
            let titleEn = $("#title_en").val().trim();
            let titleAr = $("#title_ar").val().trim();
            let subtitleEn = $("#subtitle_en").val().trim();
            let subtitleAr = $("#subtitle_ar").val().trim();
            let descriptionEn = $("#description_en").val().trim();
            let descriptionAr = $("#description_ar").val().trim();
            let status = $('#status').val().trim();
            let image = $("#image")[0].files[0];

            let isValid = true;

            // Frontend validation
            if (titleEn.length < 1) {
                $("#error_name_en").text("English name is required.");
                isValid = false;
            }
            if (titleAr.length < 1) {
                $("#error_name_ar").text("Arabic name is required.");
                isValid = false;
            }
            if (subtitleEn.length < 1) {
                $("#error_designation_en").text("English designation is required.");
                isValid = false;
            }
            if (subtitleAr.length < 1) {
                $("#error_designation_ar").text("Arabic designation is required.");
                isValid = false;
            }
            if (descriptionEn.length < 1) {
                isValid = true;
            }
            if (descriptionAr.length < 1) {
                isValid = true;
            }
            if (image) {
                let allowedExtensions = ["jpg", "jpeg", "png", "gif", "webp"];
                let fileExtension = image.name.split('.').pop().toLowerCase();
                if (!allowedExtensions.includes(fileExtension)) {
                    $("#error_image").text("Only JPG, PNG, WEBP, or GIF allowed.");
                    isValid = false;
                }
            }

            if (!isValid) return;

            // Prepare FormData
            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.feature-image.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success("FeatureImage added successfully!");

                        refreshFeatureImages();

                        $("#featureimgForm")[0].reset();
                        $("#featureimgModal").removeClass("show").hide();
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


        $(document).on('click', '.editFeatureImage', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.feature-image.edit', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(response) {

                    let title = response.title ? response.title : {
                        en: "",
                        ar: ""
                    };
                    let subtitle = response.subtitle ? response.subtitle : {
                        en: "",
                        ar: ""
                    };
                    let description = response.description ? response.description : {
                        en: "",
                        ar: ""
                    };

                    $('#update_featureimg_id').val(id);
                    $('#update_featureimg_title_en').val(title.en);
                    $('#update_featureimg_title_ar').val(title.ar);
                    $('#update_featureimg_subtitle_en').val(subtitle.en);
                    $('#update_featureimg_subtitle_ar').val(subtitle.ar);
                    $('#update_featureimg_description_en').val(description.en);
                    $('#update_featureimg_description_ar').val(description.ar);
                    $('#update_featureimg_status').val(response.status);
                    $('#update_featureimg_order_no').val(response.order_no);

                    if (response.image) {
                        $('#image_preview').attr('src',
                            `/assets/admin/uploads/feature_image//${response.image}`).show();
                    } else {
                        $('#image_preview').hide();
                    }

                    // Show the modal
                    $('#editFeatureImageModal').modal('show');
                },
                error: function(xhr) {
                    console.log("AJAX Error:", xhr);
                }
            });
        });


        $('#editFeatureImageForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            let id = $('#update_featureimg_id').val();
            let url = `{{ route('admin.feature-image.update', ':id') }}`.replace(':id', id);

            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $('#editFeatureImageModal').modal('hide');
                    toastr.success("Hero Section updated successfully!");
                    refreshFeatureImages();
                },
                error: function(response) {
                    $('.error').text('');
                    $.each(response.responseJSON.errors, function(key, error) {
                        $('#error_' + key.replace('.', '_')).text(error[0]);
                    });
                }
            });
        });

        $(document).on("click", ".delete-featureimg", function() {
            let featureId = $(this).data("id");
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
                        url: `/feature-image/delete/${featureId}/`,
                        type: "POST",
                        data: {
                            _method: "POST",
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

                            refreshFeatureImages();
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


{{-- Why Choose Us Image Section Start --}}
<script>
    $(document).ready(function() {
        WhyUsImages();

        function WhyUsImages() {
            let pageId = "{{ $page->id }}";
            $.ajax({
                url: `/why-us-image/${pageId}`,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        renderWhyUsImg(response.data);
                    } else {
                        $('#whyusimgsTableBody').html(
                            '<tr><td colspan="8" class="text-center">No Records found</td></tr>'
                        );
                    }
                },
                error: function(xhr) {
                    $('#whyusimgsTableBody').html(
                        '<tr><td colspan="8" class="text-center text-danger">Error loading Records</td></tr>'
                    );
                    console.error("Error loading Records:", xhr.responseText);
                }
            });
        }

        function renderWhyUsImg(whyusImage) {
            let html = '';
            whyusImage.forEach((whyus, index) => {
                const title = typeof whyus.title === 'string' ? JSON.parse(whyus.title) : whyus.title;
                const subtitle = typeof whyus.subtitle === 'string' ? JSON.parse(whyus.subtitle) : whyus.subtitle;
                const description = typeof whyus.description === 'string' ? JSON.parse(whyus.description) : whyus.description;
                const icon = typeof whyus.icon === 'string' ? JSON.parse(whyus.icon) : whyus.icon;
                html += `
                <tr id="whyusImg-row-${whyus.id}">
                <td>${index + 1}</td>
                <td>${title.en}</td>
                <td>${subtitle.en}</td>
                <td>${description.en}</td>
                <td>${whyus.image?`<img src="/assets/admin/uploads/why_us_image/${whyus.image}" width="50" height="50px">`:''}</td>
                <td>${whyus.order_no}</td>
                
                <td><span class="badge ${whyus.status === 'active' ? 'bg-success' : 'bg-secondary'}">
                ${whyus.status}</span></td>

                <td>
                <button class="btn btn-sm btn-primary delete-whyusImg" data-id="${whyus.id}"><i class="fas fa-edit"></i>Delete</button>
                <button class="btn btn-sm btn-primary editWhyUsImg" data-id="${whyus.id}"><i class="fas fa-edit"></i> Edit</button>
                </td>
            </tr>`;
            });
            $('#whyusimgsTableBody').html(html);
        }

        function refreshWhyUsImg() {
            WhyUsImages();
        }

        $("#whyusimgForm").submit(function(event) {
            event.preventDefault();
            $(".error").text("");
            let titleEn = $("#title_en").val().trim();
            let titleAr = $("#title_ar").val().trim();
            let subtitleEn = $("#subtitle_en").val().trim();
            let subtitleAr = $("#subtitle_ar").val().trim();
            let descriptionEn = $("#description_en").val().trim();
            let descriptionAr = $("#description_ar").val().trim();
            let status = $('#status').val().trim();
            let image = $("#image").val().trim();
            let isValid = true;
            // Frontend validation
            if (titleEn.length < 1) {
                $("#error_name_en").text("English name is required.");
                isValid = false;
            }
            if (titleAr.length < 1) {
                $("#error_name_ar").text("Arabic name is required.");
                isValid = false;
            }
            if (subtitleEn.length < 1) {
                $("#error_subtitle").text("English subtitle is required.");
                isValid = false;
            }
            if (subtitleAr.length < 1) {
                $("#error_subtitle").text("Arabic subtitle is required.");
                isValid = false;
            }
            if (descriptionEn.length < 1) {
                isValid = true;
            }
            if (descriptionAr.length < 1) {
                isValid = true;
            }
            if (icon.length < 1) {
                $('#error_icon').text("Icon Field is required.");
                isValid = false;
            }
            if (!isValid) return;
            // Prepare FormData
            let formData = new FormData(this);
            $.ajax({
                url: "{{ route('admin.why-us-image.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success("Feature added successfully!");

                        refreshWhyUsImg();
                        $("#whyusimgForm")[0].reset();
                        $("#whyusImgModal").removeClass("show").hide();
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
                error: function(xhr) {
                    console.error("AJAX Error:", xhr.responseText);
                    toastr.error("Something went wrong!");
                }
            });
        });

        $('#editWhyusImageForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let id = $('#update_whyusimg_id').val();
            let url = `{{ route('admin.why-us-image.update', ':id') }}`.replace(':id', id);
            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $('#editWhyusImageModal').modal('hide');
                    toastr.success("Hero Section updated successfully!");
                    refreshWhyUsImg();
                },
                error: function(response) {
                    $('.error').text('');
                    $.each(response.responseJSON.errors, function(key, error) {
                        $('#error_' + key.replace('.', '_')).text(error[0]);
                    });
                }
            });
        });

        $(document).on('click', '.editWhyUsImg', function() {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('admin.why-choose-us.edit', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(response) {

                    let title = response.title ? response.title : {
                        en: "",
                        ar: ""
                    };
                    let subtitle = response.subtitle ? response.subtitle : {
                        en: "",
                        ar: ""
                    };
                    let description = response.description ? response.description : {
                        en: "",
                        ar: ""
                    };
                    let icon = response.icon ? response.icon : "";
                    $('#update_whyusimg_id').val(id);
                    $('#update_whyusimg_title_en').val(title.en);
                    $('#update_whyusimg_title_ar').val(title.ar);
                    $('#update_whyusimg_subtitle_en').val(subtitle.en);
                    $('#update_whyusimg_subtitle_ar').val(subtitle.ar);
                    $('#update_whyusimg_description_en').val(description.en);
                    $('#update_whyusimg_description_ar').val(description.ar);
                    $('#update_whyusimg_status').val(response.status);
                    $('#update_whyusimg_order_no').val(response.order_no);
                    $('#update_image').val(response.image);
                    // Show the modal
                    $('#editWhyusImageModal').modal('show');
                },
                error: function(xhr) {
                    console.log("AJAX Error:", xhr);
                }
            });
        });

        $(document).on("click", ".delete-whyusImg", function() {
            let whyusId = $(this).data("id");
            alert(whyusId);
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
                        url: `/why-us-image/delete/${whyusId}`,
                        type: "POST",
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content') // Get CSRF token from meta tag
                        },
                        success: function(response) {
                            Swal.fire({
                                title: "Deleted!",
                                text: response.message,
                                icon: "success",
                                timer: 2000,
                                showConfirmButton: false
                            });
                            refreshWhyUsImg(); // Function to refresh the list
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
{{-- Why Choose Us Image Section End--}}