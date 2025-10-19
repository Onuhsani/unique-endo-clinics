@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | About us
@endsection

@section('contents')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('uniqueendo.home') }}">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__video set-bg" data-setbg="img/consultation-video.jpeg">
                        <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>ABOUT OUR CLINIC</span>
                            <h2>Welcome to the UniqueEndo</h2>
                        </div>
                        <p>Experience top-quality care with our advanced endoscopy and minimally invasive treatments, tailored to support your well-being.</p>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Providing excellence in healthcare, every step of the way.</li>
                            <li><i class="fa fa-check-circle"></i> A Path to Health and Relief</li>
                            <li><i class="fa fa-check-circle"></i> Building a compassionate and healing environment for a healthier tomorrow.</li>
                        </ul>
                        <a href="#" class="primary-btn normal-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Why choose us?</span>
                        <h2>Offer for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-1.png" alt="">
                        <h5>Advanced equipment</h5>
                        <p>At UniqueEndo, we invest in state-of-the-art endoscopic technology and advanced equipment, ensuring that our patients receive the highest standard of care with the latest diagnostic and treatment capabilities.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-2.png" alt="">
                        <h5>Qualified doctors</h5>
                        <p>Our team of highly qualified doctors specializes in endoscopy and is dedicated to providing personalized care, leveraging their extensive training and experience to deliver accurate diagnoses and effective treatment plans.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-3.png" alt="">
                        <h5>Certified services</h5>
                        <p>UniqueEndo is committed to excellence, offering certified endoscopic services that meet the highest industry standards, ensuring safety, reliability, and peace of mind for our patients.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-4.png" alt="">
                        <h5>Emergency care</h5>
                        <p>We understand that medical emergencies can arise unexpectedly, which is why UniqueEndo provides prompt emergency care, allowing our patients to receive immediate attention and specialized treatment when they need it most.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Our Expert Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{ asset('img/Logo.jpg') }}" alt="Doctor">
                        <h5>Dr. Unique</h5>
                        <span>Surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{ asset('img/Logo.jpg') }}" alt="Doctor">
                        <h5>Dr. Unique</h5>
                        <span>Surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{ asset('img/Logo.jpg') }}" alt="Doctor">
                        <h5>Dr. Unique</h5>
                        <span>Surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
@endsection
