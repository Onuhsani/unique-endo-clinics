<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.head')
</head>
<body>
     <!-- [ Pre-loader ] start -->
     <div class="loader-bg">
        <div class="loader-bar"></div>
      </div>
      <!-- [ Pre-loader ] end -->
      <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
          <!-- [ Header ] start -->
          @include('layouts.admin.header')
         <!-- [ chat user list ] start -->

         <!-- [ chat user list ] end -->


            <!-- [ chat message ] start -->

            <!-- [ chat message ] end -->


          <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
              <!-- [ navigation menu ] start -->
                @include('layouts.admin.nav')
              <!-- [ navigation menu ] end -->
              <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                @yield('breadcrumb')
                <!-- [ breadcrumb ] end -->

                <div class="pcoded-inner-content">
                  <div class="main-body">
                    <div class="page-wrapper">
                      <!-- Page-body start -->
                      <div class="page-body">
                        <!-- Error-layout card start -->
                            @yield('contents')
                        <!-- Error-layout card end -->
                      </div>
                      <!-- Page-body end -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Main-body end -->
              <div id="styleSelector">

              </div>
            </div>
          </div>
        </div>
      </div>

    @include('layouts.admin.script')

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

    <!-- ================= REGISTER MODAL ================= -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="registerModalLabel">Create Admin Account</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full name" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter password" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
