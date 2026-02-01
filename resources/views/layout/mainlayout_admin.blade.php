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

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('admin_assets/img/favicon.png') }}">

    @include('layout.partials.head_admin')
</head>

<body class="{{ Route::is(['login','otp','reset-password','forgot-password']) ? 'login-page' : '' }}">

    <div class="main-wrapper">
        @if (! Route::is(['login','otp','reset-password','forgot-password']))
            @include('layout.partials.header_admin')
            @include('layout.partials.sidebar_admin')
        @endif

        @yield('content')
    </div>

    {{-- ✅ Toasts (à ajouter) --}}
    @include('backoffice.layout.partials._toasts')

    @component('admin/components.modalpopup')
    @endcomponent

    {{-- ✅ Scripts UNE seule fois --}}
    @include('layout.partials.footer_admin-script')

</body>
</html>
