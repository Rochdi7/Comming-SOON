@if (!Route::is(['blog-details','user-bookings','user-booking-cancelled','user-booking-complete','user-booking-inprogress','user-booking-upcoming','user-dashboard','user-reviews','user-wishlist','user-messages','user-wallet','user-payment','user-settings','user-integration','user-notifications','user-preferences','user-security','booking-cancelled-calendar','booking-addon','booking-checkout','booking-complete-calendar','booking-detail','booking-inprogress-calendar','bookings-calendar','booking-payment','booking-addon','booking-success','booking-payment','booking-upcoming-calendar']))
    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">{{ $title }}</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $li_1 }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $li_2 }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->
@endif

@if (Route::is(['blog-details']))
    <!-- Breadscrumb Section -->
    <div class="blogbanner">
        <div class="blogbanner-content">
            <span class="blog-hint">Health</span>
            <h1>The Top 25 Bike Stores In Toronto By Neighbourhood</h1>
            <ul class="entry-meta meta-item justify-content-center">
                <li>
                    <div class="post-author">
                        <div class="post-author-img">
                            <img src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}" alt="author">
                        </div>
                        <a href="javascript:void(0)"><span> John Doe </span></a>
                    </div>
                </li>
                <li class="date-icon"><i class="fa-solid fa-calendar-days"></i> June 6, 2023</li>
            </ul>
        </div>
    </div>
    <!-- /Breadscrumb Section -->
@endif

@if (Route::is(['user-bookings','user-booking-cancelled','user-booking-complete','user-booking-inprogress','user-booking-upcoming','user-dashboard','user-reviews','user-wishlist','user-messages','user-wallet','user-payment','user-settings','user-integration','user-notifications','user-preferences','user-security','booking-cancelled-calendar','booking-addon','booking-checkout','booking-complete-calendar','booking-detail','booking-inprogress-calendar','bookings-calendar','booking-payment','booking-addon','booking-success','booking-payment','booking-upcoming-calendar']))
    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">{{ $title }}</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $li_1 }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->
@endif
