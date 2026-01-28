	<!-- jQuery -->
	<script src="{{URL::asset('admin_assets/js/jquery-3.7.1.min.js')}}"></script>

	<!-- Feather Icon JS -->
	<script src="{{URL::asset('admin_assets/js/feather.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{URL::asset('admin_assets/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Slimscroll JS -->
	<script src="{{URL::asset('admin_assets/js/jquery.slimscroll.min.js')}}"></script>

	<!-- Datatable JS -->
	<script src="{{URL::asset('admin_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/datatables/dataTables.bootstrap5.min.js')}}"></script>
	
	<!-- Select2 JS -->
	<script src="{{URL::asset('admin_assets/plugins/select2/js/select2.min.js')}}"></script>

@if (Route::is(['add-blog', 'add-pages', 'announcements', 'coupons', 'edit-blog', 'edit-pages', 'gdpr-cookies', 'invoice-setting', 'maintenance-mode', 'newsletters', 'payments', 'ticket-details', 'tickets', 'ui-text-editor']))
	<!-- Quill JS -->
	<script src="{{URL::asset('admin_assets/plugins/quill/quill.min.js')}}"></script>
@endif
	
@if (Route::is(['add-car', 'edit-car', 'car-details']))
	<!-- Fancybox JS -->
	<script src="{{URL::asset('admin_assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>	
@endif

	<!-- Daterangepikcer JS -->
	<script src="{{URL::asset('admin_assets/js/moment.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/bootstrap-datetimepicker.min.js')}}"></script>

@if (Route::is(['bank-accounts', 'clear-cache', 'company-setting', 'cronjob', 'currencies', 'database-backup', 'email-setting', 'gdpr-cookies', 'insurance-setting', 'integrations-settings', 'localization-setting', 'notification-setting', 'payment-methods', 'plugin-managers', 'rental-setting', 'security-setting', 'sitemap', 'sms-gateways', 'storage', 'system-backup', 'system-update', 'tax-rates', 'tracker-setting']))
	<!-- Validation-->
	<script src="{{URL::asset('admin_assets/js/validation.js')}}"></script>
@endif

@if (Route::is(['add-car', 'bank-accounts', 'brands', 'car-details', 'chat', 'clear-cache', 'color', 'company-setting', 'cronjob', 'currencies', 'cylinders', 'database-backup', 'doors', 'earnings-report', 'edit-car', 'email-setting', 'extra-services', 'features', 'fuel', 'gdpr-cookies', 'income-report', 'inspections', 'insurance-setting', 'integrations-settings', 'localization-setting', 'models', 'notification-setting', 'payment-methods', 'plugin-managers', 'rental-report', 'rental-setting', 'safety-features', 'seats', 'security-setting', 'sitemap', 'sms-gateways', 'steering', 'storage', 'system-backup', 'system-update', 'tags', 'tax-rates', 'ticket-details', 'tracker-setting', 'tracking', 'transmissions', 'types' ]))
	<!-- Sticky Sidebar JS -->
	<script src="{{URL::asset('admin_assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
@endif


	<!-- Bootstrap Tagsinput JS -->
    <script src="{{URL::asset('admin_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>

@if (Route::is(['bank-accounts', 'chart-apex', 'clear-cache', 'company-setting', 'cronjob', 'currencies', 'database-backup', 'earnings-report', 'email-setting', 'gdpr-cookies', 'income-report', 'index', 'insurance-setting', 'integrations-settings', 'localization-setting', 'notification-setting', 'payment-methods', 'plugin-managers','rental-report', 'rental-setting', 'security-setting', 'sitemap', 'sms-gateways', 'storage', 'system-backup', 'system-update', 'tax-rates', 'tracker-setting' ]))
	<!-- ApexChart JS -->
	<script src="{{URL::asset('admin_assets/plugins/apexchart/apexcharts.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/apexchart/chart-data.js')}}"></script>
@endif

@if (Route::is(['form-fileupload']))
	<!-- Fileupload JS -->
	<script src="{{URL::asset('admin_assets/plugins/fileupload/fileupload.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/file-upload.js')}}"></script>
@endif

@if (Route::is(['form-mask']))
	<!-- Mask JS -->
	<script src="{{URL::asset('admin_assets/js/jquery.maskedinput.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/mask.js')}}"></script>
@endif

@if (Route::is(['form-pickers']))	
	<script src="{{URL::asset('admin_assets/plugins/moment/moment.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/flatpickr/flatpickr.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/jquery-timepicker/jquery-timepicker.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/pickr/pickr.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/@simonwep/pickr/pickr.min.js')}}"></script>
	
	<!-- Page JS -->
	<script src="{{URL::asset('admin_assets/js/forms-pickers.js')}}"></script>
@endif
@if (Route::is(['ui-drag-drop']))
<!-- Dragula JS -->
<script src="{{URL::asset('admin_assets/plugins/dragula/js/dragula.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/dragula/js/drag-drop.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/dragula/js/draggable-cards.js')}}"></script>
@endif


@if (Route::is(['form-validation']))
	<script src="{{URL::asset('admin_assets/js/form-validation.js')}}"></script>
@endif

@if (Route::is(['ui-clipboard']))
<!-- Clipboard JS -->
<script src="{{URL::asset('admin_assets/plugins/clipboard/clipboard.min.js')}}"></script>
@endif

@if (Route::is(['form-wizard']))
	<script src="{{URL::asset('admin_assets/js/form-wizard.js')}}"></script>

	<!-- Wizard JS -->
	<script src="{{URL::asset('admin_assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/twitter-bootstrap-wizard/prettify.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/twitter-bootstrap-wizard/form-wizard.js')}}"></script>
@endif

@if (Route::is(['index', 'tracking']))
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
	<script src="{{URL::asset('admin_assets/js/map.js')}}"></script>
@endif

@if (Route::is(['ui-swiperjs']))
<!-- Swiper JS -->
<script src="{{URL::asset('admin_assets/plugins/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/@simonwep/pickr/pickr.min.js')}}"></script>

<!-- Internal Swiper JS -->
<script src="{{URL::asset('admin_assets/js/swiper.js')}}"></script>
@endif

@if (Route::is(['ui-counter']))
<!-- Counter JS -->
<script src="{{URL::asset('admin_assets/plugins/countup/jquery.counterup.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/countup/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/countup/jquery.missofis-countdown.js')}}"></script>
<script src="{{URL::asset('admin_assets/js/counter.js')}}"></script>
@endif


@if (Route::is(['chart-peity', 'index', 'chat' ]))
	<!-- Peity Chart -->
    <script src="{{URL::asset('admin_assets/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/peity/chart-data.js')}}"></script>
@endif

@if (Route::is(['maps-leaflet']))
	<!-- Leaflet Maps JS -->
	<script src="{{URL::asset('admin_assets/plugins/leaflet/leaflet.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/leaflet.js')}}"></script>
@endif

@if (Route::is(['maps-vector']))
	<!-- JSVector Maps MapsJS -->
	<script src="{{URL::asset('admin_assets/plugins/jsvectormap/js/jsvectormap.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/jsvectormap/maps/world-merc.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/us-merc-en.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/russia.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/spain.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/canada.js')}}"></script>
	<script src="{{URL::asset('admin_assets/js/jsvectormap.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/@simonwep/pickr/pickr.min.js')}}"></script>
@endif

@if (Route::is(['calendar']))
	<!-- Fullcalendar JS -->
	<script src="{{URL::asset('admin_assets/plugins/fullcalendar/index.global.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/fullcalendar/calendar-data.js')}}"></script>
@endif

@if (Route::is(['otp']))
	<!-- Custom JS -->
	<script src="{{URL::asset('admin_assets/js/otp.js')}}"></script>
@endif
@if (Route::is(['ui-tooltips','ui-popovers']))
<script src="{{URL::asset('admin_assets/js/popover.js')}}"></script>
@endif
@if (Route::is(['ui-stickynote']))
<!-- Stickynote JS -->
<script src="{{URL::asset('admin_assets/js/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/stickynote/sticky.js')}}"></script>
@endif

@if (Route::is(['chart-c3']))
	<!-- Chart JS -->
	<script src="{{URL::asset('admin_assets/plugins/c3-chart/d3.v5.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/c3-chart/c3.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/c3-chart/chart-data.js')}}"></script>
@endif

@if (Route::is(['chart-flot']))
	<!-- Chart JS -->
	<script src="{{URL::asset('admin_assets/plugins/flot/jquery.flot.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/flot/jquery.flot.pie.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/flot/chart-data.js')}}"></script>
@endif

@if (Route::is(['chart-js']))
	<!-- Chart JS -->
	<script src="{{URL::asset('admin_assets/plugins/chartjs/chart.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/chartjs/chart-data.js')}}"></script>
@endif

@if (Route::is(['chart-morris']))
	<!-- Chart JS -->
	<script src="{{URL::asset('admin_assets/plugins/morris/raphael-min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/morris/morris.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/morris/chart-data.js')}}"></script>
@endif

@if (Route::is(['coupons']))
	<script>
        document.addEventListener('DOMContentLoaded', () => {
            const darkModeToggle = document.getElementById('dark-mode-toggle');
            const lightModeToggle = document.getElementById('light-mode-toggle');
    
            if (!darkModeToggle || !lightModeToggle) return;
    
            const toggleMode = (enableDark) => {
                document.documentElement.classList.toggle('dark-mode', enableDark);
                document.documentElement.classList.toggle('light-mode', !enableDark);
                document.documentElement.setAttribute('dark-mode', enableDark ? 'dark' : 'light');
    
                try {
                    localStorage.setItem('darkMode', enableDark ? 'enabled' : 'disabled');
                } catch (e) {
                    console.warn('localStorage is not available.', e);
                }
    
                updateToggleButtons(enableDark);
            };
    
            const updateToggleButtons = (enableDark) => {
                darkModeToggle.classList.toggle('activate', enableDark);
                lightModeToggle.classList.toggle('activate', !enableDark);
            };
    
            // Apply correct button state
            updateToggleButtons(localStorage.getItem('darkMode') === 'enabled');
    
            // Event listeners
            darkModeToggle.addEventListener('click', () => toggleMode(true));
            lightModeToggle.addEventListener('click', () => toggleMode(false));
        });
    </script>
@endif

@if (Route::is(['ui-sweetalerts']))
<!-- Sweetalert 2 -->
<script src="{{URL::asset('admin_assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>
@endif

@if (Route::is(['ui-toasts']))
	<!-- Toast JS -->
	<script src="{{URL::asset('admin_assets/plugins/toastr/toastr.min.js')}}"></script>
	<script src="{{URL::asset('admin_assets/plugins/toastr/toastr.js')}}"></script>
@endif

@if (Route::is(['ui-sortable','edit-menu']))
	<!-- Sortable JS -->
    <script src="{{URL::asset('admin_assets/plugins/sortablejs/Sortable.min.js')}}"></script>

    <!-- Internal Sortable JS -->
    <script src="{{URL::asset('admin_assets/js/sortable.js')}}"></script>
@endif

@if (Route::is(['language-setting']))
	<script src="{{URL::asset('admin_assets/js/circle-progress.js')}}"></script>
@endif
@if (Route::is(['ui-scrollbar']))
<!-- Plyr JS -->
<script src="{{URL::asset('admin_assets/plugins/scrollbar/scrollbar.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/scrollbar/custom-scroll.js')}}"></script>
@endif
@if (Route::is(['ui-rating']))
	<!-- Rater JS -->
	<script src="{{URL::asset('admin_assets/plugins/rater-js/index.js')}}"></script>

	<!-- Internal Ratings JS -->
	<script src="{{URL::asset('admin_assets/js/ratings.js')}}"></script>
@endif
@if (Route::is(['ui-lightbox']))
<!-- Lightbox JS -->
<script src="{{URL::asset('admin_assets/plugins/lightbox/glightbox.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/lightbox/lightbox.js')}}"></script>
@endif
@if (Route::is(['ui-rangeslider']))
<!-- Rangeslider JS -->
<script src="{{URL::asset('admin_assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{URL::asset('admin_assets/plugins/ion-rangeslider/js/custom-rangeslider.js')}}"></script>
@endif

@if (Route::is(['add-quotations', 'bank-accounts', 'clear-cache', 'company-details', 'company-setting', 'cronjob', 'currencies', 'customer-details', 'customer-companies', 'customers', 'database-backup', 'drivers', 'edit-quotations', 'email-setting', 'gdpr-cookies', 'insurance-setting', 'integrations-settings', 'localization-setting', 'locations', 'notification-setting', 'payment-methods', 'plugin-managers', 'profile-setting', 'rental-setting', 'security-setting', 'sitemap', 'sms-gateways', 'storage', 'system-backup', 'system-update', 'tax-rates', 'tickets', 'tracker-setting', 'users' ]))
	<!-- Mobile Input -->
	<script src="{{URL::asset('admin_assets/plugins/intltelinput/js/intlTelInput.js')}}"></script>
@endif
	<!-- Custom JS -->
	<script src="{{URL::asset('admin_assets/js/script.js')}}"></script>
