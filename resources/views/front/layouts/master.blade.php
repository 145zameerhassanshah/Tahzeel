<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tah-zeel</title>
    @include('front.layouts.partials.styles')
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
