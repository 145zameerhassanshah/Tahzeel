{{-- Testimonial Section --}}


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







{{-- Hero Section --}}



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

            $(document).on("click", ".editFeature", function () {
                let id = $(this).data("id");

                $.ajax({
                    url: "{{ route('admin.feature.edit', ':id') }}".replace(":id", id), 
                    type: "GET",
                    success: function (response) {
                        let title = response.title ? response.title : { en: "", ar: "" };
                        let subtitle = response.subtitle ? response.subtitle : { en: "", ar: "" };
                        let description = response.description ? response.description : { en: "", ar: "" };

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
                    error: function (xhr) {
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

        });
</script>




{{-- Feature Section --}}



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

                        $('#update_feature_feature_id').val(id);
                        $('#update_feature_title_en').val(title.en);
                        $('#update_feature_title_ar').val(title.ar);
                        $('#update_feature_subtitle_en').val(subtitle.en);
                        $('#update_feature_subtitle_ar').val(subtitle.ar);
                        $('#update_feature_description_en').val(description.en);
                        $('#update_feature_description_ar').val(description.ar);
                        $('#update_feature_status').val(response.status);
                        $('#update_feature_icon').val(icon);
                        $('#update_feature_order_no').val(response.order_no);

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
