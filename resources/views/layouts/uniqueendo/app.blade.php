<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.uniqueendo.head')
</head>
<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            {{-- <a href="index-2.html"><img src="img/logo.png" alt=""></a> --}}
            <a href="index-2.html"><h4>{{config('app.name')}}</h4></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Appointment</a>
        </div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i> +234 (0) 703 132 3030</li>
            <li><i class="fa fa-map-marker"></i> Full address, Makurdi, Benue State</li>
            <li><i class="fa fa-clock-o"></i> Mon to Sun 8:00am to 18:00pm</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
        </div>
    </div>

    @include('layouts.uniqueendo.header')

    <!-- Main section -->

    @yield('contents')

    <!-- Main Section End -->

    @include('layouts.uniqueendo.footer')
    @include('layouts.uniqueendo.scripts')


    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
    </script>
</body>
</html>
