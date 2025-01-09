<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 21:25:56 GMT -->
<head>
    <title>Unique Endo | Sign in</title>
    @include('layouts.admin.head')
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->

  <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material" method="POST" action="{{ route('admin.login') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="text-center">
                            {{-- <img src="../files/assets/images/logo.png" alt="logo.png"> --}}
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" id="email" class="form-control" required autocomplete="email">
                                    <span class="form-bar"></span>
                                    <label class="form-label float-label">Email</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" id="password" required autocomplete="current-password">
                                    <span class="form-bar"></span>
                                    <label class="form-label float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-start">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="form-label">
                                                <input type="checkbox" value="" id="remember_me" name="remember">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-end float-end">
                                            <a href="auth-reset-password.html" class="text-end f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-md waves-effect text-center m-b-20">LOGIN</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="text-inverse text-start">Don't have an account?<a href="auth-sign-up-social.html"> <b>Register here </b></a>for free!</p> --}}
                            </div>
                        </div>
                    </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

@include('layouts.admin.script')

</body>

</html>
