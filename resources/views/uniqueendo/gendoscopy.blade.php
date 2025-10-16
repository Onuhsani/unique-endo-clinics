@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | Gynae Endoscopy
@endsection

@section('contents')

    <!-- Hero Section -->
     <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                         <h1>Gynae Endoscopy</h1>
                        <h5 class="text-danger">Gentle and precise care for women’s health</h5>
                        <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="container py-5">
    {{-- <h2 class="mb-5" style="text-align: center">About Minimally Invasive Surgery</h2> --}}
    <p>Gynae Endoscopy, also known as gynaecological endoscopy, is a modern procedure that helps doctors diagnose and treat conditions affecting the female reproductive system using minimally invasive techniques. With the aid of small cameras and specialized instruments, our specialists can examine and treat the uterus, fallopian tubes, and ovaries without the need for large surgical cuts.

        <br /><br />Common procedures include hysteroscopy (looking inside the uterus) and laparoscopy (examining the abdomen and pelvis). These techniques are effective in diagnosing and managing issues such as fibroids, ovarian cysts, infertility, pelvic pain, and abnormal bleeding.

        At UniqueEndo, we combine advanced technology with compassionate care, ensuring that every woman receives safe, comfortable, and effective treatment tailored to her needs.</p>

    </section>

    <!-- Benefits -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4" style="text-align: center">Key Benefits</h2>
        <ul class="list-unstyled">
        <li><span class="benefit-icon">✅</span>Small incisions with quick healing</li>
        <li><span class="benefit-icon">✅</span>Less pain and bleeding</li>
        <li><span class="benefit-icon">✅</span>Shorter hospital stays</li>
        <li><span class="benefit-icon">✅</span>High accuracy in diagnosis and treatment</li>
        <li><span class="benefit-icon">✅</span>Minimal scarring</li>
        </ul>
    </div>
    </section>

    <!-- Conditions Treated -->
    <section class="container py-5">
    <h2 class="mb-5" style="text-align: center">Conditions Treated</h2>
    <div class="row">
        <div class="col-md-4">✅Fibroids and ovarian cysts</div>
        <div class="col-md-4">✅Infertility-related issues</div>
        <div class="col-md-4">✅Abnormal uterine bleeding</div>
        <div class="col-md-4">✅Endometriosis</div>
        <div class="col-md-4">✅Pelvic pain and adhesions</div>
    </div>
    </section>

    <!-- What to Expect -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">What to Expect</h2>
        <div class="row text-center">
        <div class="col-md-4">
            <h5>Before</h5>
            <p>Consultation with a gynaecologist</p>
            <p>Ultrasound or diagnostic tests as required</p>
            <p>Pre-procedure instructions</p>
        </div>
        <div class="col-md-4">
            <h5>During</h5>
            <p>Procedure done under anesthesia</p>
            <p>Tiny camera inserted through natural passages or small incisions</p>
            <p>Real-time imaging used for diagnosis and treatment</p>
        </div>
        <div class="col-md-4">
            <h5>After</h5>
            <p>Fast recovery with little discomfort</p>
            <p>Same-day or short hospital stay</p>
            <p>Quick return to daily activities</p>
        </div>
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
        <h2 class="mb-5" style="text-align: center">Gynae Endoscopy Image and video gallery</h2>
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
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ge1.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ge2.png') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ge3.jpg') }}" class="img-fluid rounded"></div>
            </div>
        </div>
        <!-- Videos -->
        <div class="tab-pane fade" id="videos" role="tabpanel">
            <div class="row">
            <div class="col-md-6 mb-3">
                <video class="w-100 rounded" controls>
                <source src="videos/demo.mp4" type="video/mp4">
                Your browser does not support video.
                </video>
            </div>
            <div class="col-md-6 mb-3">
                <video class="w-100 rounded" controls>
                <source src="videos/demo2.mp4" type="video/mp4">
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
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">Is Gynae Endoscopy painful?</button>
            </h2>
            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
            <div class="accordion-body">No. The procedure is performed under anesthesia, and discomfort afterward is minimal.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">Can it help with infertility?</button>
            </h2>
            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Yes. Gynae endoscopy is often used to identify and treat conditions that affect fertility.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">Will I need to stay long in the hospital?</button>
            </h2>
            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Most patients go home the same day or within 24 hours.</div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center py-5" id="book">
    <h2>Ready to Book?</h2>
    <p>Contact us today to schedule your appointment.</p>
    <a href="tel:+2349019113479" class="btn btn-success btn-lg">📞 Call Now</a>
    </section>
@endsection
