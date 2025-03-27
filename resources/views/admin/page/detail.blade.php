@extends('admin.layouts.master')
@section('title', 'Page Detail')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-tabs mt-2">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs mx-3 my-1" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white active" id="custom-tabs-testimonial-tab" data-toggle="pill"
                                        href="#custom-tabs-testimonial" role="tab"
                                        aria-controls="custom-tabs-testimonial" aria-selected="true">Testimonials</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-hero-section-tab" data-toggle="pill"
                                        href="#custom-tabs-hero-section" role="tab"
                                        aria-controls="custom-tabs-hero-section" aria-selected="false">Hero Section</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-intro-section-tab" data-toggle="pill"
                                        href="#custom-tabs-intro-section" role="tab"
                                        aria-controls="custom-tabs-intro-section" aria-selected="false">Intro Section</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-section-title-tab" data-toggle="pill"
                                        href="#custom-tabs-section-title" role="tab"
                                        aria-controls="custom-tabs-section-title" aria-selected="false">Section Title</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-feature-image-tab" data-toggle="pill"
                                        href="#custom-tabs-feature-image" role="tab"
                                        aria-controls="custom-tabs-feature-image" aria-selected="false">Feature Image</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-procedure-tab" data-toggle="pill"
                                        href="#custom-tabs-procedure" role="tab"
                                        aria-controls="custom-tabs-procedure" aria-selected="false">Procedure</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-cta-tab" data-toggle="pill"
                                        href="#custom-tabs-cta" role="tab"
                                        aria-controls="custom-tabs-cta" aria-selected="false">CallToAction</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-faq-tab" data-toggle="pill"
                                        href="#custom-tabs-faq" role="tab"
                                        aria-controls="custom-tabs-faq" aria-selected="false">FAQs</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-document-required-tab" data-toggle="pill"
                                        href="#custom-tabs-document-required" role="tab"
                                        aria-controls="custom-tabs-document-required" aria-selected="false">Document Required</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-whychooseus-tab" data-toggle="pill"
                                        href="#custom-tabs-whychooseus" role="tab"
                                        aria-controls="custom-tabs-whychooseus" aria-selected="false">WhyChooseUs</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-features-tab" data-toggle="pill"
                                        href="#custom-tabs-features" role="tab"
                                        aria-controls="custom-tabs-features" aria-selected="false">Features</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success text-white" id="custom-tabs-whyusimage-tab" data-toggle="pill"
                                        href="#custom-tabs-whyusimage" role="tab"
                                        aria-controls="custom-tabs-whyusimage" aria-selected="false">WhyUsImage</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-tabContent">

                                <div class="tab-pane fade active show" id="custom-tabs-testimonial" role="tabpanel"
                                    aria-labelledby="custom-tabs-testimonial-tab">
                                    @include('admin.page.partials.testimonial')
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-hero-section" role="tabpanel"
                                    aria-labelledby="custom-tabs-hero-section-tab">
                                    @include('admin.page.partials.hero-section')
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-intro-section" role="tabpanel"
                                    aria-labelledby="custom-tabs-intro-section-tab">
                                    Introduction Section
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-section-title" role="tabpanel"
                                    aria-labelledby="custom-tabs-section-title-tab">
                                    Section Title
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-feature-image" role="tabpanel"
                                    aria-labelledby="custom-tabs-feature-image-tab">
                                    Feature Image
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-procedure" role="tabpanel"
                                    aria-labelledby="custom-tabs-procedure-tab">
                                    Procedure
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-cta" role="tabpanel"
                                    aria-labelledby="custom-tabs-cta-tab">
                                    Call To Action
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-faq" role="tabpanel"
                                    aria-labelledby="custom-tabs-faq-tab">
                                    Frequently Asked Questions
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-document-required" role="tabpanel"
                                    aria-labelledby="custom-tabs-document-required-tab">
                                    Document Required
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-whychooseus" role="tabpanel"
                                    aria-labelledby="custom-tabs-whychooseus-tab">
                                    Why Choose Us
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-features" role="tabpanel"
                                    aria-labelledby="custom-tabs-features-tab">
                                    Features
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-whyusimage" role="tabpanel"
                                    aria-labelledby="custom-tabs-whyusimage-tab">
                                    Why Us Images
                                </div>

                            </div>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
            </div>
    </section>
@endsection

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

    


<script>
    $(document).ready(function() {
            
            loadHeroSections();

            function loadHeroSections() {
                $.ajax({
                    url: '/hero-sections',
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function() {
                        // Show loading indicator
                        $('#herosectionsTableBody').html(
                            '<tr><td colspan="5" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                        );
                    },
                    success: function(response) {
                        if (response.data && response.data.length > 0) {
                            renderHeroSections(response.data);
                        } else {
                            $('#herosectionsTableBody').html(
                                '<tr><td colspan="5" class="text-center">No herosections found</td></tr>'
                            );
                        }
                    },
                    error: function(xhr) {
                        $('#herosectionsTableBody').html(
                            '<tr><td colspan="5" class="text-center text-danger">Error loading herosections</td></tr>'
                        );
                        console.error("Error loading herosections:", xhr.responseText);
                    }
                });
            }

            // Function to render herosections in table

            function renderHeroSections(herosections) {
                let html = '';

                herosections.forEach((herosection, index) => {
                    const title = typeof herosection.title === 'string' ? JSON.parse(herosection.title) :
                        herosection.title;
                    const subtitle = typeof herosection.subtitle === 'string' ? JSON.parse(herosection
                        .subtitle) : herosection.subtitle;

                    html += `
            <tr id="herosection-row-${herosection.id}">
                <td>${index + 1}</td>
                <td>
                    ${herosection.background_image ? 
                        `<img src="/uploads/hero_section/${herosection.background_image}" width="50" height="50px">` : 
                        ''}
                </td>
                <td>${title.en}</td>
                <td>${subtitle.en}</td>
                <td>
                    <button class="btn btn-sm btn-primary editHeroSection" data-id="${herosection.id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <form class="d-inline-block" action="/admin/hero-sections/${herosection.id}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm delete-herosection" data-id="${herosection.id}">
    <i class="fas fa-trash"></i> Delete
</button>
                    </form>
                </td>
            </tr>`;
                });

                $('#herosectionsTableBody').html(html);
            }

            function refreshHeroSections() {
                loadHeroSections();
            }



            $("#herosectionForm").submit(function(event) {
                event.preventDefault();


                $(".error").text("");
                let titleEn = $("#title_en").val().trim();
                let titleAr = $("#title_ar").val().trim();
                let subtitleEn = $("#subtitle_en").val().trim();
                let subtitleAr = $("#subtitle_ar").val().trim();
                let descriptionEn = $("#description_en").val().trim();
                let descriptionAr = $("#description_ar").val().trim();
                let image = $("#background_image")[0].files[0];

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
                    // $("#error_feedback_en").text("English feedback is required.");
                    isValid = true;
                }
                if (descriptionAr.length < 1) {
                    // $("#error_feedback_ar").text("Arabic feedback is required.");
                    isValid = true;
                }
                if (image) {
                    let allowedExtensions = ["jpg", "jpeg", "png", "gif", "webp"];
                    let fileExtension = image.name.split('.').pop().toLowerCase();
                    if (!allowedExtensions.includes(fileExtension)) {
                        $("#error_image").text("Only JPG, PNG, Webp, or GIF allowed.");
                        isValid = false;
                    }
                }

                if (!isValid) return;

                // Prepare FormData
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
                            toastr.success("HeroSection added successfully!");

                            refreshHeroSections();

                            $("#herosectionForm")[0].reset();
                            $("#herosectionModal").removeClass("show").hide();
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

            $(document).on('click', '.editHeroSection', function() {
                let id = $(this).data('id');

                $.ajax({
                    url: `/admin/herosections/${id}/edit`,
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
                        $('#update_herosection_id').val(id);
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
                                `/uploads/herosections/${response.image}`).show();
                        } else {
                            $('#image_preview').hide();
                        }

                        $('#editHeroSectionModal').modal('show');
                    }
                });
            });


            $('#editHeroSectionForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);
                let id = $('#update_herosection_id').val();
                let url = `/admin/herosections/${id}`;

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
                        $('#editHeroSectionModal').modal('hide');
                        toastr.success("HeroSection updated successfully!");
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
                            url: `/admin/herosections/${herosectionId}`,
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

        });
</script>
@endsection