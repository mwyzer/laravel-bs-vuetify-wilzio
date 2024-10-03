<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet"
        integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .title {
            background: linear-gradient(to right, #42b983, #5f7081);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div>


        <div class="d-flex justify-content-center align-items-center mt-5">


            <div class="card">
                <div class="card-body">
                    <h1 class="text-center title">Vuetify</h1>
                    <h4 class="text-center mt-5">Reset Password</h4>
                    <form id="resetPasswordForm" class="mt-5"
                        action="{{ route('reset-password.auth', ['user' => $user]) }}" method="POST">
                        @csrf

                        <div id="resetPasswordError" class="alert alert-danger mt-3" style="display: none;"></div>
                        <div id="resetPasswordSuccess" class="alert alert-success mt-3" style="display: none;"></div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter your new password">
                            <div id="passwordError" class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmed_password"
                                placeholder="Confirm your new password">
                            <div id="confirmed_passwordError" class="invalid-feedback"></div>
                        </div>

                        <button type="submit" class="btn btn-success w-100" id="resetPasswordBtn">
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#resetPasswordForm').submit(function(event) {
                event.preventDefault();

                // Clear previous errors
                $('#resetPasswordError').hide();
                $('#resetPasswordSuccess').hide();
                $('.invalid-feedback').text('').hide();

                var formData = {
                    password: $('#password').val(),
                    confirmed_password: $('#confirmPassword').val(),
                };

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    dataType: 'json',
                    encode: true,
                }).done(function(data) {
                    $('#resetPasswordSuccess').text(data.message).show();
                    $('#resetPasswordError').hide();

                    Swal.fire({
                        title: 'Loading...',
                        showConfirmButton: false, // Hide the default "Confirm" button
                        timer: 1500, // Sets the timer for 1500 milliseconds (1.5 seconds)
                        allowOutsideClick: false, // Prevents the user from clicking outside the modal to close it
                        allowEscapeKey: false, // Prevents the user from using the Escape key to close the modal

                    }).then(() => {
                        location.href = "/";
                    });
                }).fail(function(data) {
                    if (data.responseJSON.errors) {
                        $.each(data.responseJSON.errors, function(key, value) {
                            $('#' + key + 'Error').text(value[0]).show();
                        });
                    } else {
                        $('#resetPasswordError').text(data.responseJSON.message).show();
                    }
                    $('#resetPasswordSuccess').hide();
                });
            });

            // Real-time validation
            $('#password, #confirmPassword').on('input', function() {
                $(this).removeClass('is-invalid');
                $(this).siblings('.invalid-feedback').text('').hide();
            });
        });
    </script>
</body>

</html>
