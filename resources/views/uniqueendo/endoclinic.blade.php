@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | Endoscopy
@endsection

@section('contents')

    <!-- Hero Section -->
     <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                         <h1>Endoscopy Services</h1>
                        <h5 class="text-danger">See inside with precision and care</h5>
                        <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="container py-5">
    {{-- <h2 class="mb-5" style="text-align: center">About Endoscopy</h2> --}}
    <p>Endoscopy is a modern medical procedure that allows doctors to look inside the body using a thin, flexible tube fitted with a light and camera, called an endoscope. It is often used to diagnose the cause of symptoms such as persistent stomach pain, difficulty swallowing, bleeding, or digestive issues. Unlike traditional surgery, endoscopy is minimally invasive, meaning it does not require large cuts, and in many cases, patients can return home the same day. Through the camera, doctors can see real-time images of internal organs, and in some cases, they can also perform treatments such as removing small growths or taking tissue samples for further tests. <br /> <br />The procedure is considered safe and effective, with very little discomfort to the patient. Depending on the type, the endoscope may be inserted through the mouth, rectum, or a tiny incision, making it adaptable for examining different parts of the body such as the stomach, colon, lungs, or bladder. Patients may experience mild effects like bloating, sore throat, or cramps afterward, but these usually fade quickly. Endoscopy has become an important tool in modern healthcare because it helps doctors detect diseases early, provide accurate diagnoses, and sometimes treat conditions on the spot, all while avoiding the risks and long recovery times associated with major surgery.</p>
    </section>

    <!-- Benefits -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">Key Benefits</h2>
        <ul class="list-unstyled">
        <li><span class="benefit-icon">✅</span>Quick recovery</li>
        <li><span class="benefit-icon">✅</span>Less pain</li>
        <li><span class="benefit-icon">✅</span>High success rate</li>
        <li><span class="benefit-icon">✅</span>Affordable & accessible</li>
        </ul>
    </div>
    </section>

    <!-- Conditions Treated -->
    <section class="container py-5">
    <h2 class="mb-5" style="text-align: center">Conditions Treated</h2>
    <div class="row">
        <div class="col-md-4">Stomach ulcers</div>
        <div class="col-md-4">Chronic pain</div>
        <div class="col-md-4">Bleeding disorders</div>
    </div>
    </section>

    <!-- What to Expect -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">What to Expect</h2>
        <div class="row text-center">
        <div class="col-md-4"><h5>Before</h5><p>Preparation steps</p></div>
        <div class="col-md-4"><h5>During</h5><p>Procedure details</p></div>
        <div class="col-md-4"><h5>After</h5><p>Recovery process</p></div>
        </div>
    </div>
    </section>

    <!-- Meet the Specialists -->
    <section class="container py-5">
    <h2 class="mb-5" style="text-align: center">Meet the Specialists</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
        <div class="card text-center doctor-card">
            <img src="https://via.placeholder.com/100" class="mx-auto mt-3" alt="Doctor">
            <div class="card-body">
            <h5 class="card-title">Dr. Bamidele</h5>
            <p class="card-text">10 years experience</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 mb-3">
        <div class="card text-center doctor-card">
            <img src="https://via.placeholder.com/100" class="mx-auto mt-3" alt="Doctor">
            <div class="card-body">
            <h5 class="card-title">Dr. Bamidele</h5>
            <p class="card-text">15 years experience</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 mb-3">
        <div class="card text-center doctor-card">
            <img src="https://via.placeholder.com/100" class="mx-auto mt-3" alt="Doctor">
            <div class="card-body">
            <h5 class="card-title">Dr. Bamidele</h5>
            <p class="card-text">15 years experience</p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Technology & Equipment with Tabs -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">Endoscopic image and video gallery</h2>
        <!-- Tabs -->
        <ul class="nav nav-tabs" id="mediaTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="images-tab" data-bs-toggle="tab" data-bs-target="#images" type="button" role="tab">Images</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab">Videos</button>
        </li>
        </ul>
        <div class="tab-content mt-3">
        <!-- Images -->
        <div class="tab-pane fade show active" id="images" role="tabpanel">
            <div class="row">
                <div class="col-md-4 mb-3"><img src="{{ asset('img/endo3.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/endo1.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/endo2.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/endo4.jpeg') }}" class="img-fluid rounded"></div>

            </div>
        </div>
        <!-- Videos -->
        <div class="tab-pane fade" id="videos" role="tabpanel">
            <div class="row">
            <div class="col-md-6 mb-3">
                <video class="w-100 rounded" controls>
                <source src="{{ asset('videos/endo.mp4') }}" type="video/mp4">
                Your browser does not support video.
                </video>
            </div>
            <div class="col-md-6 mb-3">
                <video class="w-100 rounded" controls>
                <source src="{{ asset('videos/endo1.mp4') }}" type="video/mp4">
                Your browser does not support video.
                </video>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- FAQs -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">FAQs</h2>
        <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="q1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">Is it painful?</button>
            </h2>
            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Minimal discomfort with anesthesia.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">How long is recovery?</button>
            </h2>
            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Most patients recover in 1-2 days.</div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center py-5" id="book">
    <h2>Ready to Book?</h2>
    <p>Contact us today to schedule your appointment.</p>
    <a href="tel:+2347031323030" class="btn btn-success btn-lg">📞 Call Now</a>
    </section>
@endsection
