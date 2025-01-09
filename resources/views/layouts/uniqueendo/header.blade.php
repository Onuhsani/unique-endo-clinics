<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <ul class="header__top__left">
                        <li><i class="fa fa-phone"></i> +234 (0) 805 555 4264</li>
                        <li><i class="fa fa-map-marker"></i> 4, Ameh Idoko Street, Behind Union Bank, Wurukum, Makurdi, Benue State</li>
                        <li><i class="fa fa-clock-o"></i> 24hrs Mon to Sun </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="header__top__right">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="index-2.html"><img src="img/ue_logo.jpg" alt=""></a>
                    {{-- <a href="index-2.html"><h3>{{ config('app.name') }}</h3></a> --}}
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__menu__option">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('uniqueendo.home') }}">Home</a></li>
                            <li><a href="{{ route('uniqueendo.about') }}">About</a></li>
                            {{-- <li><a href="services.html">Services</a></li> --}}
                            <li><a href="#">Clinics</a>
                                <ul class="dropdown">
                                    <li><a href="pricing.html" style="text-transform: none;">Endoscopy and endotherapy</a></li>
                                    <li><a href="doctor.html" style="text-transform: none;">Minimal access surgery</a></li>
                                    <li><a href="blog-details.html" style="text-transform: none;">Edourology</a></li>
                                    <li><a href="blog-details.html" style="text-transform: none;">Gynae endoscopy</a></li>
                                    <li><a href="blog-details.html" style="text-transform: none;">General surgery</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('uniqueendo.gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('uniqueendo.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header__btn">
                        {{-- <a href="{{ route('uniqueendo.appointment') }}" class="primary-btn">Appointment</a> --}}
                        <a href="{{route('uniqueendo.home')}}#consultation__form" class="primary-btn">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
