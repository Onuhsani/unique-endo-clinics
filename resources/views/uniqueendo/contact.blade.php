@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | Contact us
@endsection

@section('contents')
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>Address</h5>
                            <p>4, Ameh Idoko Street, Behind Union Bank, Wurukum, Makurdi, Benue State</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>Hotline</h5>
                            <p>+234 (0) 805 555 4264 • +234 (0) 703 132 3030</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>Email</h5>
                            {{-- <p><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ad9fffafae5f8fecaede7ebe3e6a4e9e5e7">[email&#160;protected]</a></p> --}}
                            <p>uniqueendoscopy@gmail.com</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="contact__content">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__pic">
                            <img src="img/contact-pic.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <h3>Get in touch</h3>
                            <form action="{{ route('messages.send') }}" method="POST" file="True" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="name" id="name" placeholder="Enter your name" required/>
                                <input type="text" placeholder="Enter your email" name="email" id="email" required/>
                                {{-- <input type="text" placeholder="Website"> --}}
                                <textarea placeholder="Whats on your mind" name="message" id="message" required></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection
