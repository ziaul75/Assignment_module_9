<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include your CSS or link to a front-end framework -->
</head>
<body>
    @include('layouts.navigation')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
