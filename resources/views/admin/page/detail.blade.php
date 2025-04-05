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
                                    @include('admin.page.partials.intro-section')
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
                                    @include('admin.page.partials.procedure')
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-cta" role="tabpanel"
                                    aria-labelledby="custom-tabs-cta-tab">
                                    @include('admin.page.partials.call-to-action')
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-faq" role="tabpanel"
                                    aria-labelledby="custom-tabs-faq-tab">
                                    @include('admin.page.partials.faqs')
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-document-required" role="tabpanel"
                                    aria-labelledby="custom-tabs-document-required-tab">
                                    @include('admin.page.partials.document-required')
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-whychooseus" role="tabpanel"
                                    aria-labelledby="custom-tabs-whychooseus-tab">
                                    Why Choose Us
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
            
            loadFeatures();

            function loadFeatures() {
                $.ajax({
                    url: '/features',
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function() {
                        // Show loading indicator
                        $('#featuresTableBody').html(
                            '<tr><td colspan="5" class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</td></tr>'
                        );
                    },
                    success: function(response) {
                        if (response.data && response.data.length > 0) {
                            renderFeatures(response.data);
                        } else {
                            $('#featuresTableBody').html(
                                '<tr><td colspan="5" class="text-center">No features found</td></tr>'
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

            // Function to render features in table

            function renderFeatures(features) {
                let html = '';

                features.forEach((feature, index) => {
                    const title = typeof feature.title === 'string' ? JSON.parse(feature.title) :
                        feature.title;
                    const subtitle = typeof feature.subtitle === 'string' ? JSON.parse(feature
                        .subtitle) : feature.subtitle;

                    const description = typeof feature.description === 'string' ? JSON.parse(feature
                        .description) : feature.description;

                    html += `
            <tr id="feature-row-${feature.id}">
                <td>${index + 1}</td>
                <td>
                    ${feature.icon}
                </td>
                <td>${title.en}</td>
                <td>${subtitle.en}</td>
                <td>
                    <button class="btn btn-sm btn-primary editFeature" data-id="${feature.id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <form class="d-inline-block" action="/feature/delete/${feature.id}" method="post">
                        @csrf
                        @method('POST')
                        <button type="button" class="btn btn-danger btn-sm delete-feature" data-id="${feature.id}">
    <i class="fas fa-trash"></i> Delete
</button>
                    </form>
                </td>
            </tr>`;
                });

                $('#featuresTableBody').html(html);
            }

            function refreshFeatures() {
                loadFeatures();
            }



            $("#featureForm").submit(function(event) {
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
                if (icon.length < 1) {
                    $('#error_icon').text("Icon Field is required.");
                    isValid = false;
                }

                if (!isValid) return;

                // Prepare FormData
                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('admin.feature.store') }}",
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

                            refreshFeatures();

                            $("#featureForm")[0].reset();
                            $("#featureModal").removeClass("show").hide();
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

                $(document).on('click', '.editFeature', function() {
                    let id = $(this).data('id');

                    $.ajax({
                        url: "{{ route('admin.feature.edit', ':id') }}".replace(':id', id), 
                        type: "GET",
                        success: function(response) {

                            let title = response.title ? response.title : { en: "", ar: "" };
                            let subtitle = response.subtitle ? response.subtitle : { en: "", ar: "" };
                            let description = response.description ? response.description : { en: "", ar: "" };
                            let icon = response.icon ? response.icon : "";

                            $('#update_feature_id').val(id);
                            $('#update_title_en').val(title.en);
                            $('#update_title_ar').val(title.ar);
                            $('#update_subtitle_en').val(subtitle.en);
                            $('#update_subtitle_ar').val(subtitle.ar);
                            $('#update_description_en').val(description.en);
                            $('#update_description_ar').val(description.ar);
                            $('#update_status').val(response.status);
                            $('#update_icon').val(icon);
                            $('#update_order_no').val(response.order_no);

                            // Show the modal
                            $('#editFeatureModal').modal('show');
                        },
                        error: function(xhr) {
                            console.log("AJAX Error:", xhr);
                        }
                    });
                });




            $('#editFeatureForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);
                let id = $('#update_feature_id').val();
                let url = `{{ route('admin.feature.update', ':id') }}`.replace(':id', id);

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
                        $('#editFeatureModal').modal('hide');
                        toastr.success("Hero Section updated successfully!");
                        refreshFeatures();
                    },
                    error: function(response) {
                        $('.error').text('');
                        $.each(response.responseJSON.errors, function(key, error) {
                            $('#error_' + key.replace('.', '_')).text(error[0]);
                        });
                    }
                });
            });

            $(document).on("click", ".delete-feature", function() {
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
                            url: `/feature/delete/${featureId}/`,
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

                                refreshFeatures();
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