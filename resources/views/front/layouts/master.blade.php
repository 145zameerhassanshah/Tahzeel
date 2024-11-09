<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tah-zeel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('assets/core/fav.png') }}">

    @include('front.layouts.partials.styles')
    <style>
        #submitButton {
            position: relative;
        }

        .spinner-border {
            display: inline-block;
            vertical-align: middle;
            margin-left: 8px;
        }
    </style>
</head>

<body>

    @include('front.layouts.partials.top-navbar')

    @yield('content')
    <!-- start footer -->
    @include('front.layouts.partials.footer')
    <!-- Social Media Icons Section -->
    @include('front.partials.social-links')

    @include('front.layouts.partials.scripts')
</body>

</html>
