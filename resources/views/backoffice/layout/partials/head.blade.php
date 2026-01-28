<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('build/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('build/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('build/plugins/fontawesome/css/all.min.css') }}">

@if (
    !Route::is([
        'coming-soon',
        'error-404',
        'error-500',
        'register',
        'login',
        'reset-password',
        'forgot-password',
        'maintenance',
    ]))
    @if (!Route::is(['pricing', 'faq', 'gallery', 'our-team', 'terms-condition', 'privacy-policy', 'booking-addon']))
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('build/plugins/select2/css/select2.min.css') }}">
    @endif
    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/aos/aos.css') }}">
@endif
@if (Route::is(['booking-addon','index-4', 'index-3','listing-details','index-2','index','booking-checkout','booking-detail','booking-payment','booking-success']))
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/boxicons/css/boxicons.min.css') }}">
@endif
@if (Route::is(['user-payment', 'user-bookings']))
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/datatables/datatables.min.css') }}">
@endif

@if (Route::is([
        'about-us',
        'index',
        'listing-details',
        'listing-grid',
        'booking-addon',
        'index-2',
        'index-3',
        'index-4',
        'listing-map','booking-checkout','booking-detail','booking-success'
    ]))
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ url('build/css/bootstrap-datetimepicker.min.css') }}">
@endif

@if (Route::is([
        'booking-payment',
        'booking',
        'about-us',
        'index',
        'listing-details',
        'booking-addon',
        'index-2',
        'index-3',
        'index-4',
        'listing-list',
        'listing-grid',
        'listing-map','booking-checkout','booking-detail','booking-success','booking'
    ]))
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('build/css/owl.carousel.min.css') }}">
@endif

@if (Route::is(['index-2','listing-details','gallery','index-4']))
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/fancybox/fancybox.css') }}">
@endif
@if (Route::is(['listing-grid', 'listing-list', 'booking-addon', 'listing-map','booking-checkout','booking-detail','booking-success']))
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
@endif

@if (!Route::is(['error-404', 'error-500']))
    <!-- Fearther CSS -->
    <link rel="stylesheet" href="{{ url('build/css/feather.css') }}">
@endif

@if (Route::is(['booking-payment', 'booking', 'listing-details', 'booking-addon', 'index-3']))
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/slick/slick.css') }}">
@endif

<!-- Datatables CSS -->
<link rel="stylesheet" href="{{ url('build/plugins/datatables/datatables.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('build/css/style.css') }}">
