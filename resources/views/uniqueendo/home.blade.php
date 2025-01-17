@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | Homepage
@endsection

@section('contents')
    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero__text">
                        <span>RESTORE YOUR COMFORT, REGAIN YOUR LIFE. </span>
                        <h2>Take the best Endoscopy Treatment with us</h2>
                        <a href="#" class="primary-btn normal-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Consultation Section Begin -->
    <section class="consultation">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="consultation__form" id="consultation__form">
                        <div class="section-title">
                            <span>REQUEST FOR YOUR</span>
                            <h2>Consultation</h2>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('appointments.add') }}" method="POST" file="True" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('POST') --}}
                            <input type="text" placeholder="Enter your full name" name="name" id="name" required />
                            <input type="text" placeholder="Enter your email" name="email" id="email" required />
                            <div class="datepicker__item">
                                <input type="text" placeholder="Pick a date" class="datepicker" name="date" id="date" required/>
                                <i class="fa fa-calendar"></i>
                            </div>
                            <select name="clinic" id="clinic" required>
                                <option value="">Type of service</option>
                                <option value="">Endoscopy and Endo Therapy</option>
                                <option value="">Minimal Access Surgery</option>
                                <option value="">Edourology</option>
                                <option value="">Gynae Endoscopy</option>
                                <option value="">General Surgery</option>
                            </select>
                            <button type="submit" class="site-btn1 btn-primary">Book appoitment</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="consultation__text">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__text__item">
                                    <div class="section-title">
                                        <span>Welcome to UniqueEndo</span>
                                        <h2>Find Best Doctors With <b>UniqueEndo</b></h2>
                                    </div>
                                    <p>Discover Leading Specialists in Endoscopy with UniqueEndo, where we connect
                                        you with top medical professionals who utilize advanced endoscopic techniques
                                        to provide accurate diagnoses and effective treatments for a range of
                                        gastrointestinal and surgical conditions, ensuring a patient-centered approach
                                        and exceptional care at every step of your journey toward health and recovery.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__video set-bg" data-setbg="img/consultation-video.jpeg">
                                    <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation Section End -->

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

    <!-- Services Section Begin -->
    <section class="services spad set-bg" data-setbg="img/services-bg.jpg" id="clinics">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>CLINICS</span>
                        <h2>What we offer</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__btn">
                        <a href="#" class="primary-btn">Contact us</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <a href="#">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/en-1.png" widht="80px" height="80px" alt="image"/>
                                {{-- <span class="flaticon-044-endoscopy"></span> --}}
                            </div>
                            <div class="services__item__text">
                                <h5>Endoscopy and Endo therapy</h5>
                                <p>Advanced minimally invasive procedures for accurate diagnosis and effective treatment.
                                </p><br />
                                <h6 class="primary-btn">Click to view details >></h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6">
                    <a href="#">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/en-5.png" widht="80px" height="80px" alt="image"/>
                                {{-- <span class="flaticon-027-beauty"></span> --}}
                            </div>
                            <div class="services__item__text">
                                <h5>Minimal access surgery</h5>
                                <p>Innovative surgical techniques that reduce recovery time and minimize discomfort.
                                </p><br />
                                <h6 class="primary-btn">Click to view details >></h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6">
                    <a href="#">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/en-3.png" widht="80px" height="80px" alt="image"/>
                                {{-- <span class="flaticon-031-anatomy"></span> --}}
                            </div>
                            <div class="services__item__text">
                                <h5>Edourology</h5>
                                <p>Specialized care focusing on urinary tract and male reproductive health.
                                </p><br />
                                <h6 class="primary-btn">Click to view details >></h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6">
                    <a href="#">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/en-4.png" widht="80px" height="80px" alt="image"/>
                                {{-- <span class="flaticon-008-abdominoplasty"></span> --}}
                            </div>
                            <div class="services__item__text">
                                <h5>Gynae endoscopy</h5>
                                <p>Precision procedures for diagnosing and treating women's reproductive health issues.
                                </p><br />
                                <h6 class="primary-btn">Click to view details >></h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6">
                    <a href="#">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/en-6.png" widht="80px" height="80px" alt="image"/>
                                {{-- <span class="flaticon-008-abdominoplasty"></span> --}}
                            </div>
                            <div class="services__item__text">
                                <h5>General surgery</h5>
                                <p>Comprehensive surgical services tailored to meet diverse patient needs.
                                </p><br />
                                <h6 class="primary-btn">Click to view details >></h6>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Services Section End -->

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
                        <img src="img/logo.jpg" alt="">
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
                        <img src="img/logo.jpg" alt="">
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
                        <img src="img/logo.jpg" alt="">
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

    <!-- Gallery Begin -->
    <div class="gallery">
        <div class="gallery__container">
            <div class="grid-sizer"></div>
            <div class="gc__item set-bg" data-setbg="img/gallery/endoscopy.jpg">
                <a href="img/gallery/gallery-1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/endoscopy.jpg">
                <a href="img/gallery/gallery-2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/endoscopy.jpg">
                <a href="img/gallery/gallery-3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item gc__item__large set-bg" data-setbg="img/gallery/endoscopy.jpg">
                <a href="img/gallery/gallery-4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/endoscopy.jpg">
                <a href="img/gallery/gallery-5.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/endoscopy.jpg">
                <a href="img/gallery/gallery-6.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/endoscopy.jpg">
                <a href="img/gallery/gallery-7.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Latest News Begin -->
    {{-- <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Our News</span>
                        <h2>Skin care tips</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="latest__btn">
                        <a href="#" class="primary-btn">View all news</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">Here’s how you can get a natural glow this party season</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">Get better skin with these top 10 tips for skin care</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">8 Ways to Save Your Skin if You Exercise Outside This Winter</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Latest News End -->
@endsection
