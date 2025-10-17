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

      <!-- Appointment Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appointmentModalLabel">Book an Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('appointments.add') }}" method="POST">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" required>
                    </div>

                    <!-- Appointment Date -->
                    <div class="mb-3">
                        <label for="appointment_date" class="form-label">Appointment Date</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>

                    <!-- Type of Service -->
                    <div class="mb-3">
                        <label for="service_type" class="form-label">Type of Service</label>
                        <select class="form-select" name="clinic" required>
                            <option value="" disabled selected>Select a service</option>
                            <option value="consultation">Endoscopy and endotherapy</option>
                            <option value="checkup">Minimal access surgery</option>
                            <option value="treatment">Minimally invasive paediatric surgery</option>
                            <option value="treatment">Endourology</option>
                            <option value="treatment">Gynae Endoscopy</option>
                            <option value="treatment">General Surgery</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Blinking Image -->
<img src="{{ asset('img/nhia.png') }}" alt="UniqueEndo Icon" class="blink-image">



    @include('layouts.uniqueendo.footer')
    @include('layouts.uniqueendo.scripts')

    <script>
  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("openModal") === "appointment") {
      const appointmentModal = new bootstrap.Modal(document.getElementById('appointmentModal'));
      appointmentModal.show();

      // optional: remove query from URL after opening
      if (history.replaceState) {
        const cleanUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
        history.replaceState({}, document.title, cleanUrl);
      }
    }
  });
</script>

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
