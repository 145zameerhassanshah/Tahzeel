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
                                    <a class="nav-link btn btn-success btn-sm text-white active" id="custom-tabs-testimonial-tab" data-toggle="pill"
                                        href="#custom-tabs-testimonial" role="tab"
                                        aria-controls="custom-tabs-testimonial" aria-selected="true">Testimonials</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-hero-section-tab" data-toggle="pill"
                                        href="#custom-tabs-hero-section" role="tab"
                                        aria-controls="custom-tabs-hero-section" aria-selected="false">Hero Section</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-intro-section-tab" data-toggle="pill"
                                        href="#custom-tabs-intro-section" role="tab"
                                        aria-controls="custom-tabs-intro-section" aria-selected="false">Intro Section</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-section-title-tab" data-toggle="pill"
                                        href="#custom-tabs-section-title" role="tab"
                                        aria-controls="custom-tabs-section-title" aria-selected="false">Section Title</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-feature-image-tab" data-toggle="pill"
                                        href="#custom-tabs-feature-image" role="tab"
                                        aria-controls="custom-tabs-feature-image" aria-selected="false">Feature Image</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-procedure-tab" data-toggle="pill"
                                        href="#custom-tabs-procedure" role="tab"
                                        aria-controls="custom-tabs-procedure" aria-selected="false">Procedure</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-cta-tab" data-toggle="pill"
                                        href="#custom-tabs-cta" role="tab"
                                        aria-controls="custom-tabs-cta" aria-selected="false">CallToAction</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-faq-tab" data-toggle="pill"
                                        href="#custom-tabs-faq" role="tab"
                                        aria-controls="custom-tabs-faq" aria-selected="false">FAQs</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-document-required-tab" data-toggle="pill"
                                        href="#custom-tabs-document-required" role="tab"
                                        aria-controls="custom-tabs-document-required" aria-selected="false">Document Required</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-whychooseus-tab" data-toggle="pill"
                                        href="#custom-tabs-whychooseus" role="tab"
                                        aria-controls="custom-tabs-whychooseus" aria-selected="false">WhyChooseUs</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-features-tab" data-toggle="pill"
                                        href="#custom-tabs-features" role="tab"
                                        aria-controls="custom-tabs-features" aria-selected="false">Features</a>
                                </li>
                                <li class="nav-item mx-1 my-1">
                                    <a class="nav-link btn btn-success btn-sm text-white" id="custom-tabs-whyusimage-tab" data-toggle="pill"
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
                                    @include('admin.page.partials.intro-section')
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-section-title" role="tabpanel"
                                    aria-labelledby="custom-tabs-section-title-tab">
                                    @include('admin.page.partials.section-title')
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
                                    @include('admin.page.partials.why-choose-us')
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-features" role="tabpanel"
                                    aria-labelledby="custom-tabs-features-tab">
                                    @include('admin.page.partials.feature')
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

@include('admin.page.partials.script')
    
<script>
    $(document).ready(function() {
            
            loadWhyUs();

            function loadWhyUs() {
                $.ajax({
                    url: '/why-choose-us',
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
                                '<tr><td colspan="5" class="text-center">No whyus found</td></tr>'
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
                    const subtitle = typeof whyus.subtitle === 'string' ? JSON.parse(whyus
                        .subtitle) : whyus.subtitle;

                    const description = typeof whyus.description === 'string' ? JSON.parse(whyus
                        .description) : whyus.description;

                    const icon = typeof whyus.icon === 'string' ? JSON.parse(whyus.icon) : whyus.icon;

                    html += `
            <tr id="whyus-row-${whyus.id}">
                <td>${index + 1}</td>
                <td>
                    ${icon}
                </td>
                <td>${title.en}</td>
                <td>${subtitle.en}</td>
                <td>
                    <button class="btn btn-sm btn-primary editFeature" data-id="${whyus.id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <form class="d-inline-block" action="/whyus/delete/${whyus.id}" method="post">
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

                        let title = response.title ? response.title : { en: "", ar: "" };
                        let subtitle = response.subtitle ? response.subtitle : { en: "", ar: "" };
                        let description = response.description ? response.description : { en: "", ar: "" };
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


@endsection