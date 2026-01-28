<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Dreamsrent - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreamsrent - Admin Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('admin_assets/img/favicon.png') }}">

    @include('layout.partials.head_admin')
</head>

<body>
    @if (Route::is(['login', 'otp', 'reset-password', 'forgot-password']))

        <body class="login-page">
    @endif


    <div class="main-wrapper">
        @auth
            @include('backoffice.layout.partials.header_admin')
            @include('backoffice.layout.partials.sidebar_admin')
        @endauth

        @yield('content')
    </div>

    @component('admin/components.modalpopup')
    @endcomponent
    @include('layout.partials.footer_admin-script')

</body>

</html>
