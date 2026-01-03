    <!-- Dashboard Menu -->
    <div class="dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-menu">
                        <ul>
                            <li>
                                <a href="{{ url('user-dashboard') }}"
                                    class="{{ Request::is('user-dashboard') ? 'active' : '' }}">
                                    <img src="{{ URL::asset('/build/img/icons/dashboard-icon.svg') }}" alt="Icon">
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('user-bookings') }}"
                                    class="{{ Request::is(
                                        'user-bookings',
                                        'user-booking-cancelled',
                                        'user-booking-complete',
                                        'user-booking-inprogress',
                                        'user-booking-upcoming',
                                        'booking-cancelled-calendar',
                                        'booking-complete-calendar',
                                        'booking-inprogress-calendar',
                                        'booking-upcoming-calendar',
                                        'bookings-calendar',
                                    )
                                        ? 'active'
                                        : '' }}">
                                    <img src="{{ URL::asset('/build/img/icons/booking-icon.svg') }}" alt="Icon">
                                    <span>My Bookings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('user-reviews') }}"
                                    class="{{ Request::is('user-reviews') ? 'active' : '' }}">
                                    <img src="{{ URL::asset('/build/img/icons/review-icon.svg') }}" alt="Icon">
                                    <span>Reviews</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('user-wishlist') }}"
                                    class="{{ Request::is('user-wishlist') ? 'active' : '' }}">
                                    <img src="{{ URL::asset('/build/img/icons/wishlist-icon.svg') }}" alt="Icon">
                                    <span>Wishlist</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('user-messages') }}"
                                    class="{{ Request::is('user-messages') ? 'active' : '' }}">
                                    <img src="{{ URL::asset('/build/img/icons/message-icon.svg') }}" alt="Icon">
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('user-wallet') }}"
                                    class="{{ Request::is('user-wallet') ? 'active' : '' }}">
                                    <img src="{{ URL::asset('/build/img/icons/wallet-icon.svg') }}" alt="Icon">
                                    <span>My Wallet</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('user-payment') }}"
                                    class="{{ Request::is('user-payment') ? 'active' : '' }}">
                                    <img src="{{ URL::asset('/build/img/icons/payment-icon.svg') }}" alt="Icon">
                                    <span>Payments</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('user-settings') }}"
                                    class="{{ Request::is('user-settings', 'user-integration', 'user-notifications', 'user-preferences', 'user-security') ? 'active' : '' }}">
                                    <img src="{{ URL::asset('/build/img/icons/settings-icon.svg') }}" alt="Icon">
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Dashboard Menu -->
