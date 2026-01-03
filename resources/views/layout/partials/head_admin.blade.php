	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('admin_assets/img/favicon.png')}}">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('admin_assets/img/apple-touch-icon.png')}}">

	<!-- Theme Settings Js -->
	<script src="{{URL::asset('admin_assets/js/theme-script.js')}}"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/css/bootstrap.min.css')}}">

	<!-- Bootstrap Icon CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/icons/bootstrap/bootstrap-icons.min.css')}}">

	<!-- Tabler Icon CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/tabler-icons/tabler-icons.min.css')}}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/select2/css/select2.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/fontawesome/css/all.min.css')}}">

@if (Route::is(['add-blog', 'add-pages', 'announcements', 'coupons', 'edit-blog', 'edit-pages', 'gdpr-cookies', 'invoice-setting', 'maintenance-mode', 'newsletters', 'payments', 'ticket-details', 'tickets', 'ui-text-editor']))
	<!-- Quill CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/quill/quill.snow.css')}}">
@endif

@if (Route::is(['add-car', 'edit-car', 'car-details']))
	<!-- Fancybox CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/fancybox/jquery.fancybox.min.css')}}">
@endif

@if (Route::is(['chart-apex', 'form-vertical', 'form-wizard', 'table-basic', 'ui-nav-tabs']))
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/css/feather.css')}}">
@endif	

@if (Route::is(['icon-feather']))
	<!-- Feather CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/icons/feather/feather.css')}}">
@endif

@if (Route::is(['add-quotations', 'bank-accounts', 'clear-cache', 'company-details', 'company-setting', 'cronjob', 'currencies', 'customer-details', 'customers-companies', 'customers', 'database-backup', 'drivers', 'edit-quotations', 'email-setting', 'form-mask', 'gdpr-cookies', 'insurance-setting', 'integrations-settings', 'localization-setting', 'locations', 'notification-setting', 'payment-methods', 'plugin-managers', 'profile-setting', 'rental-setting', 'security-setting', 'sitemap', 'sms-gateways', 'storage', 'system-backup', 'system-update', 'tax-rates', 'tickets', 'tracker-setting', 'users' ]))
	<!-- Mobile CSS-->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/intltelinput/css/intlTelInput.css')}}">
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/intltelinput/css/demo.css')}}">
@endif

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets//plugins/datatables/dataTables.bootstrap5.min.css')}}">

@if (Route::is(['add-car', 'add-invoice', 'add-quotations', 'add-reservation', 'calendar', 'car-details', 'company-details', 'coupons', 'customer-details', 'customers', 'drivers', 'edit-car', 'edit-invoice', 'edit-quotations', 'edit-reservation', 'inspections', 'invoice-details', 'locations', 'maintenance', 'quotation-details', 'reservation-details']))
	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/css/bootstrap-datetimepicker.min.css')}}">
@endif

@if (Route::is(['add-blog', 'add-car', 'add-pages','ai-configuration', 'announcements', 'blog-details', 'blog-tags', 'car-details', 'currencies', 'custom-fields', 'drivers', 'edit-blog', 'edit-car', 'edit-pages', 'email-templates', 'invoice-setting', 'invoice-template', 'language-setting', 'language-setting2', 'locations', 'login-setting', 'maintenance-mode', 'prefixes', 'profile-setting', 'seo-setup', 'signatures-setting', 'sitemap', 'tax-rates']))
	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
@endif
	
@if (Route::is(['form-pickers']))	
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/flatpickr/flatpickr.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/daterangepicker/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/jquery-timepicker/jquery-timepicker.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/pickr/pickr-themes.css')}}" />
@endif

@if (Route::is(['form-wizard']))	
	<!-- Wizard CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/twitter-bootstrap-wizard/form-wizard.css')}}">
@endif
@if (Route::is(['ui-sortable','ui-clipboard']))	
<!-- Dragula CSS -->
<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/dragula/css/dragula.min.css')}}">
@endif

@if (Route::is(['icon-flag']))
	<!-- Flag CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/icons/flags/flags.css')}}">
@endif

@if (Route::is(['icon-ionic']))
	<!-- Ionic CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/icons/ionic/ionicons.css')}}">
@endif
@if (Route::is(['ui-swiperjs']))
<!-- Swiper CSS -->
<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/swiper/swiper-bundle.min.css')}}">
@endif

@if (Route::is(['icon-material']))
	<!-- Material CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/material/materialdesignicons.css')}}">
@endif

@if (Route::is(['ui-rangeslider']))
<!-- Rangeslider CSS -->
<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
@endif

@if (Route::is(['icon-pe7']))
	<!-- Pe7 CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/icons/pe7/pe-icon-7.css')}}">
@endif
@if (Route::is(['ui-lightbox']))
<!-- Lightbox CSS -->
<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/lightbox/glightbox.min.css')}}">

@endif
@if (Route::is(['ui-drag-drop']))
<!-- Dragula CSS -->
<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/dragula/css/dragula.min.css')}}">
@endif

@if (Route::is(['icon-remix']))
	<!-- Remix Icon CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/remix/fonts/remixicon.css')}}">
@endif

@if (Route::is(['icon-simpleline']))
	<!-- Simpleline CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/simpleline/simple-line-icons.css')}}">
@endif

@if (Route::is(['icon-themify']))
	<!-- Themify CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/icons/themify/themify.css')}}">
@endif

@if (Route::is(['icon-typicon']))
	<!-- Tyicons CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/icons/typicons/typicons.css')}}">
@endif

@if (Route::is(['maps-leaflet']))
	<!-- Leaflet Maps CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/leaflet/leaflet.css')}}">
@endif

@if (Route::is(['maps-vector']))
	<!-- Jsvector Maps -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/jsvectormap/css/jsvectormap.min.css')}}">
@endif

@if (Route::is(['coupons']))
	<script>
        (function () {
            try {
                const darkMode = localStorage.getItem('darkMode') === 'enabled';
    
                // Apply theme to <html> before rendering
                document.documentElement.classList.toggle('dark-mode', darkMode);
                document.documentElement.classList.toggle('light-mode', !darkMode);
                document.documentElement.setAttribute('dark-mode', darkMode ? 'dark' : 'light');
            } catch (e) {
                console.warn('localStorage is not available.', e);
            }
        })();
    </script>
@endif

@if (Route::is(['icon-weather']))
	<!-- Weather CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/icons/weather/weathericons.css')}}">
@endif
@if (Route::is(['ui-scrollbar']))
<!-- Main CSS -->
<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/scrollbar/scroll.min.css')}}">
@endif
@if (Route::is(['icon-toasts']))
<!-- Toast CSS -->
<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/toastr/toatr.css')}}">
@endif
@if (Route::is(['ui-stickynote']))
<!-- Sticky CSS -->
<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/stickynote/sticky.css')}}">

@endif


@if (Route::is(['chart-c3']))
	<!-- ChartC3 CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/c3-chart/c3.min.css')}}">
@endif

    <!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/plugins/daterangepicker/daterangepicker.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{URL::asset('admin_assets/css/style.css')}}">
