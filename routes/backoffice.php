<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Auth
        Route::get('/signin', [CustomAuthController::class, 'index'])->name('signin');
        Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('signin.custom');

        Route::get('/signup', [CustomAuthController::class, 'registration'])->name('signup');
        Route::post('/custom-register', [CustomAuthController::class, 'customRegistration'])->name('signup.custom');

        // Protected admin pages (add middleware later)
        Route::middleware(['auth'])->group(function () {
            Route::get('/index_admin', [CustomAuthController::class, 'dashboard'])->name('dashboard');

            // Theme pages
            Route::view('/index', 'backoffice.pages.index')->name('index');
            Route::view('/brands', 'backoffice.pages.brands')->name('brands');
            Route::view('/cars', 'backoffice.pages.cars')->name('cars');

            
        });
    });

Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('/invoice-details', function () {
    return view('invoice-details');
})->name('invoice-details');

Route::get('/listing-details', function () {
    return view('listing-details');
})->name('listing-details');

Route::get('/listing-grid', function () {
    return view('listing-grid');
})->name('listing-grid');

Route::get('/listing-list', function () {
    return view('listing-list');
})->name('listing-list');

Route::get('/listing-map', function () {
    return view('listing-map');
})->name('listing-map');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/maintenance', function () {
    return view('maintenance');
})->name('maintenance');

Route::get('/our-team', function () {
    return view('our-team');
})->name('our-team');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password');

Route::get('/terms-condition', function () {
    return view('terms-condition');
})->name('terms-condition');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/user-booking-cancelled', function () {
    return view('user-booking-cancelled');
})->name('user-booking-cancelled');

Route::get('/user-booking-complete', function () {
    return view('user-booking-complete');
})->name('user-booking-complete');

Route::get('/user-booking-inprogress', function () {
    return view('user-booking-inprogress');
})->name('user-booking-inprogress');

Route::get('/user-booking-upcoming', function () {
    return view('user-booking-upcoming');
})->name('user-booking-upcoming');

Route::get('/user-bookings', function () {
    return view('user-bookings');
})->name('user-bookings');

Route::get('/user-dashboard', function () {
    return view('user-dashboard');
})->name('user-dashboard');

Route::get('/user-wallet', function () {
    return view('user-wallet');
})->name('user-wallet');

Route::get('/user-settings', function () {
    return view('user-settings');
})->name('user-settings');

Route::get('/user-wishlist', function () {
    return view('user-wishlist');
})->name('user-wishlist');

Route::get('/user-security', function () {
    return view('user-security');
})->name('user-security');

Route::get('/user-reviews', function () {
    return view('user-reviews');
})->name('user-reviews');

Route::get('/user-integration', function () {
    return view('user-integration');
})->name('user-integration');

Route::get('/user-messages', function () {
    return view('user-messages');
})->name('user-messages');

Route::get('/user-notifications', function () {
    return view('user-notifications');
})->name('user-notifications');

Route::get('/user-payment', function () {
    return view('user-payment');
})->name('user-payment');

Route::get('/user-preferences', function () {
    return view('user-preferences');
})->name('user-preferences');
Route::get('/booking-addon', function () {
    return view('booking-addon');
})->name('booking-addon');
Route::get('/booking-cancelled-calendar', function () {
    return view('booking-cancelled-calendar');
})->name('booking-cancelled-calendar');
Route::get('/booking-checkout', function () {
    return view('booking-checkout');
})->name('booking-checkout');
Route::get('/booking-complete-calendar', function () {
    return view('booking-complete-calendar');
})->name('booking-complete-calendar');
Route::get('/booking-detail', function () {
    return view('booking-detail');
})->name('booking-detail');
Route::get('/booking-inprogress-calendar', function () {
    return view('booking-inprogress-calendar');
})->name('booking-inprogress-calendar');
Route::get('/booking-success', function () {
    return view('booking-success');
})->name('booking-success');
Route::get('/booking-upcoming-calendar', function () {
    return view('booking-upcoming-calendar');
})->name('booking-upcoming-calendar');
Route::get('/bookings-calendar', function () {
    return view('bookings-calendar');
})->name('bookings-calendar');



Route::Group(['prefix' => 'admin'], function () { 

    Route::get('/index', function () {
    return view('admin.index');
    })->name('index');

    Route::get('/brands', function () {
        return view('admin.brands');
    })->name('brands'); 

    Route::get('/add-blog', function () {
        return view('admin.add-blog');
    })->name('add-blog'); 

    Route::get('/add-car', function () {
        return view('admin.add-car');
    })->name('add-car'); 

    Route::get('/add-invoice', function () {
        return view('admin.add-invoice');
    })->name('add-invoice');

    Route::get('/add-pages', function () {
        return view('admin.add-pages');
    })->name('add-pages');

    Route::get('/add-quotations', function () {
        return view('admin.add-quotations');
    })->name('add-quotations');

    Route::get('/add-reservation', function () {
        return view('admin.add-reservation');
    })->name('add-reservation');

    Route::get('/ai-configuration', function () {
        return view('admin.ai-configuration');
    })->name('ai-configuration');

    Route::get('/announcements', function () {
        return view('admin.announcements');
    })->name('announcements');

    Route::get('/bank-accounts', function () {
        return view('admin.bank-accounts');
    })->name('bank-accounts');

    Route::get('/blog-categories', function () {
        return view('admin.blog-categories');
    })->name('blog-categories');

    Route::get('/blog-comments', function () {
        return view('admin.blog-comments');
    })->name('blog-comments');

    Route::get('/blog-details', function () {
        return view('admin.blog-details');
    })->name('blog-details');

    Route::get('/blog-tags', function () {
        return view('admin.blog-tags');
    })->name('blog-tags');

    Route::get('/blogs', function () {
        return view('admin.blogs');
    })->name('blogs');

    Route::get('/email-setting', function () {
        return view('admin.email-setting');
    })->name('email-setting');

    Route::get('/email-templates', function () {
        return view('admin.email-templates');
    })->name('email-templates');

    Route::get('/form-basic-inputs', function () {
        return view('admin.form-basic-inputs');
    })->name('form-basic-inputs');

    Route::get('/form-checkbox-radios', function () {
        return view('admin.form-checkbox-radios');
    })->name('form-checkbox-radios');

    Route::get('/form-elements', function () {
        return view('admin.form-elements');
    })->name('form-elements');

    Route::get('/form-fileupload', function () {
        return view('admin.form-fileupload');
    })->name('form-fileupload');

    Route::get('/form-floating-labels', function () {
        return view('admin.form-floating-labels');
    })->name('form-floating-labels');

    Route::get('/form-grid-gutters', function () {
        return view('admin.form-grid-gutters');
    })->name('form-grid-gutters');

    Route::get('/form-horizontal', function () {
        return view('admin.form-horizontal');
    })->name('form-horizontal');

    Route::get('/form-input-groups', function () {
        return view('admin.form-input-groups');
    })->name('form-input-groups');

    Route::get('/form-mask', function () {
        return view('admin.form-mask');
    })->name('form-mask');

    Route::get('/form-pickers', function () {
        return view('admin.form-pickers');
    })->name('form-pickers');

    Route::get('/form-select', function () {
        return view('admin.form-select');
    })->name('form-select');

    Route::get('/form-select2', function () {
        return view('admin.form-select2');
    })->name('form-select2');

    Route::get('/form-validation', function () {
        return view('admin.form-validation');
    })->name('form-validation');

    Route::get('/form-vertical', function () {
        return view('admin.form-vertical');
    })->name('form-vertical');

    Route::get('/form-wizard', function () {
        return view('admin.form-wizard');
    })->name('form-wizard');

    Route::get('/fuel', function () {
        return view('admin.fuel');
    })->name('fuel');

    Route::get('/gdpr-cookies', function () {
        return view('admin.gdpr-cookies');
    })->name('gdpr-cookies');

    Route::get('/icon-bootstrap', function () {
        return view('admin.icon-bootstrap');
    })->name('icon-bootstrap');

    Route::get('/icon-feather', function () {
        return view('admin.icon-feather');
    })->name('icon-feather');

    Route::get('/icon-flag', function () {
        return view('admin.icon-flag');
    })->name('icon-flag');

    Route::get('/icon-fontawesome', function () {
        return view('admin.icon-fontawesome');
    })->name('icon-fontawesome');

    Route::get('/icon-ionic', function () {
        return view('admin.icon-ionic');
    })->name('icon-ionic');

    Route::get('/icon-material', function () {
        return view('admin.icon-material');
    })->name('icon-material');

    Route::get('/icon-pe7', function () {
        return view('admin.icon-pe7');
    })->name('icon-pe7');

    Route::get('/icon-remix', function () {
        return view('admin.icon-remix');
    })->name('icon-remix');

    Route::get('/icon-simpleline', function () {
        return view('admin.icon-simpleline');
    })->name('icon-simpleline');

    Route::get('/icon-tabler', function () {
        return view('admin.icon-tabler');
    })->name('icon-tabler');

    Route::get('/icon-themify', function () {
        return view('admin.icon-themify');
    })->name('icon-themify');

    Route::get('/icon-typicon', function () {
        return view('admin.icon-typicon');
    })->name('icon-typicon');

    Route::get('/icon-weather', function () {
        return view('admin.icon-weather');
    })->name('icon-weather');

    Route::get('/income-report', function () {
        return view('admin.income-report');
    })->name('income-report');

    Route::get('/inspections', function () {
        return view('admin.inspections');
    })->name('inspections');

    Route::get('/insurance-setting', function () {
        return view('admin.insurance-setting');
    })->name('insurance-setting');

    Route::get('/integrations-settings', function () {
        return view('admin.integrations-settings');
    })->name('integrations-settings');

    Route::get('/invoice-details', function () {
        return view('admin.invoice-details');
    })->name('invoice-details');

    Route::get('/invoice-setting', function () {
        return view('admin.invoice-setting');
    })->name('invoice-setting');

    Route::get('/invoice-template', function () {
        return view('admin.invoice-template');
    })->name('invoice-template');

    Route::get('/invoices', function () {
        return view('admin.invoices');
    })->name('invoices');

    Route::get('/language-setting', function () {
        return view('admin.language-setting');
    })->name('language-setting');

    Route::get('/language-setting2', function () {
        return view('admin.language-setting2');
    })->name('language-setting2');

    Route::get('/localization-setting', function () {
        return view('admin.localization-setting');
    })->name('localization-setting');

    Route::get('/locations', function () {
        return view('admin.locations');
    })->name('locations');

    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');

    Route::get('/login-setting', function () {
        return view('admin.login-setting');
    })->name('login-setting');

    Route::get('/maintenance-mode', function () {
        return view('admin.maintenance-mode');
    })->name('maintenance-mode');

    Route::get('/maintenance', function () {
        return view('admin.maintenance');
    })->name('maintenance');

    Route::get('/maps-leaflet', function () {
        return view('admin.maps-leaflet');
    })->name('maps-leaflet');

    Route::get('/maps-vector', function () {
        return view('admin.maps-vector');
    })->name('maps-vector');

    Route::get('/menu-management', function () {
        return view('admin.menu-management');
    })->name('menu-management');

    Route::get('/models', function () {
        return view('admin.models');
    })->name('models');

    Route::get('/newsletters', function () {
        return view('admin.newsletters');
    })->name('newsletters');

    Route::get('/notifications-setting', function () {
        return view('admin.notifications-setting');
    })->name('notifications-setting');

    Route::get('/otp', function () {
        return view('admin.otp');
    })->name('otp');

    Route::get('/pages', function () {
        return view('admin.pages');
    })->name('pages');

    Route::get('/payment-methods', function () {
        return view('admin.payment-methods');
    })->name('payment-methods');

    Route::get('/payments', function () {
        return view('admin.payments');
    })->name('payments');

    Route::get('/permissions', function () {
        return view('admin.permissions');
    })->name('permissions');

    Route::get('/plugin-managers', function () {
        return view('admin.plugin-managers');
    })->name('plugin-managers');

    Route::get('/prefixes', function () {
        return view('admin.prefixes');
    })->name('prefixes');

    Route::get('/pricing', function () {
        return view('admin.pricing');
    })->name('pricing');

    Route::get('/profile-setting', function () {
        return view('admin.profile-setting');
    })->name('profile-setting');

    Route::get('/quotations', function () {
        return view('admin.quotations');
    })->name('quotations');

    Route::get('/quotation-details', function () {
        return view('admin.quotation-details');
    })->name('quotation-details');

    Route::get('/rental-report', function () {
        return view('admin.rental-report');
    })->name('rental-report');

    Route::get('/rental-setting', function () {
        return view('admin.rental-setting');
    })->name('rental-setting');

    Route::get('/reservation-details', function () {
        return view('admin.reservation-details');
    })->name('reservation-details');

    Route::get('/reservations', function () {
        return view('admin.reservations');
    })->name('reservations');

    Route::get('/reset-password', function () {
        return view('admin.reset-password');
    })->name('reset-password');

    Route::get('/reviews', function () {
        return view('admin.reviews');
    })->name('reviews');

    Route::get('/roles-permissions', function () {
        return view('admin.roles-permissions');
    })->name('roles-permissions');

    Route::get('/safety-features', function () {
        return view('admin.safety-features');
    })->name('safety-features');

    Route::get('/seats', function () {
        return view('admin.seats');
    })->name('seats');

    Route::get('/security-setting', function () {
        return view('admin.security-setting');
    })->name('security-setting');

    Route::get('/seo-setup', function () {
        return view('admin.seo-setup');
    })->name('seo-setup');

    Route::get('/signatures-setting', function () {
        return view('admin.signatures-setting');
    })->name('signatures-setting');

    Route::get('/sitemap', function () {
        return view('admin.sitemap');
    })->name('sitemap');

    Route::get('/sms-gateways', function () {
        return view('admin.sms-gateways');
    })->name('sms-gateways');

    Route::get('/state', function () {
        return view('admin.state');
    })->name('state');

    Route::get('/steering', function () {
        return view('admin.steering');
    })->name('steering');

    Route::get('/storage', function () {
        return view('admin.storage');
    })->name('storage');

    Route::get('/system-backup', function () {
        return view('admin.system-backup');
    })->name('system-backup');

    Route::get('/system-update', function () {
        return view('admin.system-update');
    })->name('system-update');

    Route::get('/tables-basic', function () {
        return view('admin.tables-basic');
    })->name('tables-basic');

    Route::get('/tags', function () {
        return view('admin.tags');
    })->name('tags');

    Route::get('/tax-rates', function () {
        return view('admin.tax-rates');
    })->name('tax-rates');

    Route::get('/testimonials', function () {
        return view('admin.testimonials');
    })->name('testimonials');

    Route::get('/ticket-details', function () {
        return view('admin.ticket-details');
    })->name('ticket-details');

    Route::get('/tickets', function () {
        return view('admin.tickets');
    })->name('tickets');

    Route::get('/tracking', function () {
        return view('admin.tracking');
    })->name('tracking');

    Route::get('/tracker-setting', function () {
        return view('admin.tracker-setting');
    })->name('tracker-setting');

    Route::get('/transmissions', function () {
        return view('admin.transmissions');
    })->name('transmissions');

    Route::get('/types', function () {
        return view('admin.types');
    })->name('types');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');  

    Route::get('/doors', function () {
        return view('admin.doors');
    })->name('doors');

    Route::get('/drivers', function () {
        return view('admin.drivers');
    })->name('drivers');

    Route::get('/earnings-report', function () {
        return view('admin.earnings-report');
    })->name('earnings-report');

    Route::get('/edit-blog', function () {
        return view('admin.edit-blog');
    })->name('edit-blog');

    Route::get('/edit-car', function () {
        return view('admin.edit-car');
    })->name('edit-car');

    Route::get('/edit-invoice', function () {
        return view('admin.edit-invoice');
    })->name('edit-invoice');

    Route::get('/edit-menu', function () {
        return view('admin.edit-menu');
    })->name('edit-menu');

    Route::get('/edit-pages', function () {
        return view('admin.edit-pages');
    })->name('edit-pages');

    Route::get('/edit-quotations', function () {
        return view('admin.edit-quotations');
    })->name('edit-quotations');

    Route::get('/edit-reservation', function () {
        return view('admin.edit-reservation');
    })->name('edit-reservation');

    Route::get('/email-setting', function () {
        return view('admin.email-setting');
    })->name('email-setting');

    Route::get('/email-templates', function () {
        return view('admin.email-templates');
    })->name('email-templates');

    Route::get('/enquiries', function () {
        return view('admin.enquiries');
    })->name('enquiries');

    Route::get('/extra-services', function () {
        return view('admin.extra-services');
    })->name('extra-services');

    Route::get('/faq-category', function () {
        return view('admin.faq-category');
    })->name('faq-category');

    Route::get('/faq', function () {
        return view('admin.faq');
    })->name('faq');

    Route::get('/features', function () {
        return view('admin.features');
    })->name('features');

    Route::get('/forgot-password', function () {
        return view('admin.forgot-password');
    })->name('forgot-password');

    Route::get('/calendar', function () {
        return view('admin.calendar');
    })->name('calendar');

    Route::get('/cars', function () {
        return view('admin.cars');
    })->name('cars');

    Route::get('/chat', function () {
        return view('admin.chat');
    })->name('chat');

    Route::get('/city', function () {
        return view('admin.city');
    })->name('city');

    Route::get('/clear-cache', function () {
        return view('admin.clear-cache');
    })->name('clear-cache');

    Route::get('/color', function () {
        return view('admin.color');
    })->name('color');

    Route::get('/company-setting', function () {
        return view('admin.company-setting');
    })->name('company-setting');

    Route::get('/contact-messages', function () {
        return view('admin.contact-messages');
    })->name('contact-messages');

    Route::get('/countries', function () {
        return view('admin.countries');
    })->name('countries');

    Route::get('/coupons', function () {
        return view('admin.coupons');
    })->name('coupons');

    Route::get('/currencies', function () {
        return view('admin.currencies');
    })->name('currencies');

    Route::get('/custom-fields', function () {
        return view('admin.custom-fields');
    })->name('custom-fields');

    Route::get('/customers-companies', function () {
        return view('admin.customers-companies');
    })->name('customers-companies');

    Route::get('/customers', function () {
        return view('admin.customers');
    })->name('customers');

    Route::get('/cylinders', function () {
        return view('admin.cylinders');
    })->name('cylinders');

    Route::get('/database-backup', function () {
        return view('admin.database-backup');
    })->name('database-backup');

    Route::get('/ui-accordion', function () {
        return view('admin.ui-accordion');
    })->name('ui-accordion');

    Route::get('/ui-alerts', function () {
        return view('admin.ui-alerts');
    })->name('ui-alerts');

    Route::get('/ui-avatar', function () {
        return view('admin.ui-avatar');
    })->name('ui-avatar');

    Route::get('/ui-badges', function () {
        return view('admin.ui-badges');
    })->name('ui-badges');

    Route::get('/ui-borders', function () {
        return view('admin.ui-borders');
    })->name('ui-borders');

    Route::get('/ui-breadcrumb', function () {
        return view('admin.ui-breadcrumb');
    })->name('ui-breadcrumb');

    Route::get('/ui-button-group', function () {
        return view('admin.ui-button-group');
    })->name('ui-button-group');

    Route::get('/ui-buttons', function () {
        return view('admin.ui-buttons');
    })->name('ui-buttons');

    Route::get('/ui-cards', function () {
        return view('admin.ui-cards');
    })->name('ui-cards');

    Route::get('/ui-carousel', function () {
        return view('admin.ui-carousel');
    })->name('ui-carousel');

    Route::get('/ui-clipboard', function () {
        return view('admin.ui-clipboard');
    })->name('ui-clipboard');

    Route::get('/ui-colors', function () {
        return view('admin.ui-colors');
    })->name('ui-colors');

    Route::get('/ui-counter', function () {
        return view('admin.ui-counter');
    })->name('ui-counter');

    Route::get('/ui-drag-drop', function () {
        return view('admin.ui-drag-drop');
    })->name('ui-drag-drop');

    Route::get('/ui-dropdowns', function () {
        return view('admin.ui-dropdowns');
    })->name('ui-dropdowns');

    Route::get('/ui-grid', function () {
        return view('admin.ui-grid');
    })->name('ui-grid');

    Route::get('/ui-images', function () {
        return view('admin.ui-images');
    })->name('ui-images');

    Route::get('/ui-lightbox', function () {
        return view('admin.ui-lightbox');
    })->name('ui-lightbox');

    Route::get('/ui-media', function () {
        return view('admin.ui-media');
    })->name('ui-media');

    Route::get('/ui-modals', function () {
        return view('admin.ui-modals');
    })->name('ui-modals');

    Route::get('/ui-nav-tabs', function () {
        return view('admin.ui-nav-tabs');
    })->name('ui-nav-tabs');

    Route::get('/ui-offcanvas', function () {
        return view('admin.ui-offcanvas');
    })->name('ui-offcanvas');

    Route::get('/ui-pagination', function () {
        return view('admin.ui-pagination');
    })->name('ui-pagination');

    Route::get('/ui-placeholders', function () {
        return view('admin.ui-placeholders');
    })->name('ui-placeholders');

    Route::get('/ui-popovers', function () {
        return view('admin.ui-popovers');
    })->name('ui-popovers');

    Route::get('/ui-progress', function () {
        return view('admin.ui-progress');
    })->name('ui-progress');

    Route::get('/ui-rangeslider', function () {
        return view('admin.ui-rangeslider');
    })->name('ui-rangeslider');

    Route::get('/ui-rating', function () {
        return view('admin.ui-rating');
    })->name('ui-rating');

    Route::get('/ui-ribbon', function () {
        return view('admin.ui-ribbon');
    })->name('ui-ribbon');

    Route::get('/ui-scrollbar', function () {
        return view('admin.ui-scrollbar');
    })->name('ui-scrollbar');

    Route::get('/ui-sortable', function () {
        return view('admin.ui-sortable');
    })->name('ui-sortable');

    Route::get('/ui-spinner', function () {
        return view('admin.ui-spinner');
    })->name('ui-spinner');

    Route::get('/ui-stickynote', function () {
        return view('admin.ui-stickynote');
    })->name('ui-stickynote');

    Route::get('/ui-sweetalerts', function () {
        return view('admin.ui-sweetalerts');
    })->name('ui-sweetalerts');

    Route::get('/ui-swiperjs', function () {
        return view('admin.ui-swiperjs');
    })->name('ui-swiperjs');

    Route::get('/ui-text-editor', function () {
        return view('admin.ui-text-editor');
    })->name('ui-text-editor');

    Route::get('/ui-timeline', function () {
        return view('admin.ui-timeline');
    })->name('ui-timeline');

    Route::get('/ui-toasts', function () {
        return view('admin.ui-toasts');
    })->name('ui-toasts');

    Route::get('/ui-tooltips', function () {
        return view('admin.ui-tooltips');
    })->name('ui-tooltips');

    Route::get('/ui-typography', function () {
        return view('admin.ui-typography');
    })->name('ui-typography');

    Route::get('/car-details', function () {
        return view('admin.car-details');
    })->name('car-details');

    Route::get('/chart-apex', function () {
        return view('admin.chart-apex');
    })->name('chart-apex');

    Route::get('/chart-c3', function () {
        return view('admin.chart-c3');
    })->name('chart-c3');

    Route::get('/chart-flot', function () {
        return view('admin.chart-flot');
    })->name('chart-flot');

    Route::get('/chart-js', function () {
        return view('admin.chart-js');
    })->name('chart-js');

    Route::get('/chart-morris', function () {
        return view('admin.chart-morris');
    })->name('chart-morris');

    Route::get('/chart-peity', function () {
        return view('admin.chart-peity');
    })->name('chart-peity');

    Route::get('/company-details', function () {
        return view('admin.company-details');
    })->name('company-details');

    Route::get('/cronjob', function () {
        return view('admin.cronjob');
    })->name('cronjob');

    Route::get('/customer-details', function () {
        return view('admin.customer-details');
    })->name('customer-details');

    Route::get('/data-tables', function () {
        return view('admin.data-tables');
    })->name('data-tables');

    Route::get('/ui-video', function () {
        return view('admin.ui-video');
    })->name('ui-video');
    
    Route::get('/ui-buttons-group', function () {
        return view('admin.ui-buttons-group');
    })->name('ui-buttons-group');
});
