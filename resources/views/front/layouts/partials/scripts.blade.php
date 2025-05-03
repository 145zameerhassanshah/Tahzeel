<script src="{{ asset('front/dist/assets/js/plugins.js') }}"></script>
<script src="{{ asset('front/dist/assets/js/theme.js') }}"></script>
<script src="{{ asset('front/dist/assets/js/customScript.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('js')
<script>
    $(document).ready(function() {
        // Handle form submission
        $('#submitButton').on('click', function(e) {
            e.preventDefault();
            // Disable button and show spinner
            $(this).prop('disabled', true);
            $('#spinner').show();
            var formData = $('#contactForm').serialize();
            // Set up CSRF token for AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/store-inquiry', // Adjust to your backend route
                data: formData,
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thank you!',
                            text: response.message,
                        });
                        // Reset button and spinner
                        $('#submitButton').prop('disabled', false);
                        $('#spinner').hide();
                        $('#contactForm')[0].reset(); // Reset form fields
                    }
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorList = '<ul style="color:red;">';
                    $.each(errors, function(key, value) {
                        errorList += '<li>' + value[0] + '</li>';
                    });
                    errorList += '</ul>';
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: errorList, // Use html to render error list
                    });
                    // Reset button and spinner on error
                    $('#submitButton').prop('disabled', false);
                    $('#spinner').hide();
                }
            });
        });
    });
</script>