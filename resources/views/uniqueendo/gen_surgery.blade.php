@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | General Surgery
@endsection

@section('contents')

    <!-- Hero Section -->
     <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                         <h1>General Surgery</h1>
                        <h5 class="text-danger">Comprehensive surgical care for a wide range of conditions</h5>
                        <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="container py-5">
    {{-- <h2 class="mb-5" style="text-align: center">About Minimally Invasive Surgery</h2> --}}
    <p>General Surgery involves the diagnosis and treatment of a variety of medical conditions through surgical procedures. It covers a broad spectrum of health issues affecting the abdomen, digestive system, soft tissues, and more.

        <br />At UniqueEndo, we provide both traditional and minimally invasive surgical solutions tailored to each patient’s needs. Our highly skilled surgeons use modern techniques and advanced equipment to ensure safe, effective, and successful outcomes. Whether it’s an emergency or a planned procedure, our focus is always on patient safety, faster recovery, and compassionate care.</p>
    </section>

    <!-- Benefits -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4" style="text-align: center">Key Benefits</h2>
        <ul class="list-unstyled">
            <li><span class="benefit-icon">✅</span>Wide range of surgical expertise</li>
            <li><span class="benefit-icon">✅</span>Safe and effective procedures</li>
            <li><span class="benefit-icon">✅</span>Access to both open and minimally invasive options</li>
            <li><span class="benefit-icon">✅</span>Shorter recovery times where possible</li>
            <li><span class="benefit-icon">✅</span>Highly experienced surgical team</li>
        </ul>
    </div>
    </section>

    <!-- Conditions Treated -->
    <section class="container py-5">
    <h2 class="mb-5" style="text-align: center">Conditions Treated</h2>
    <div class="row">
        <div class="col-md-4">✅Appendicitis</div>
        <div class="col-md-4">✅Hernias</div>
        <div class="col-md-4">✅Gallbladder disease</div>
        <div class="col-md-4">✅Tumors and abnormal growths</div>
        <div class="col-md-4">✅Abdominal infections and injuries</div>
    </div>
    </section>

    <!-- What to Expect -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">What to Expect</h2>
        <div class="row text-center">
        <div class="col-md-4">
            <h5>Before</h5>
            <p>Pre-surgery consultation and diagnostic tests</p>
            <p>Guidance on preparation and lifestyle adjustments</p>
        </div>
        <div class="col-md-4">
            <h5>During</h5>
            <p>Procedure carried out under anesthesia</p>
            <p>Depending on condition: open or minimally invasive technique</p>
            <p>Continuous monitoring for safety</p>
        </div>
        <div class="col-md-4">
            <h5>After</h5>
            <p>Recovery in a safe hospital environment</p>
            <p>Pain management and wound care</p>
            <p>Gradual return to normal activities with follow-up support</p>
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
        <h2 class="mb-5" style="text-align: center">General Surgery Image and video gallery</h2>
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
                <div class="col-md-4 mb-3"><img src="{{ asset('img/mips2.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/endo1.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/ge3.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/endo2.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/ma3.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/mips1.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/ge1.jpg') }}" class="img-fluid rounded"></div>
                <div class="col-md-4 mb-3"><img src="{{ asset('img/ge2.png') }}" class="img-fluid rounded"></div>
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
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">What types of surgeries are done under General Surgery?</button>
            </h2>
            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
            <div class="accordion-body">A wide variety, including appendectomy, hernia repair, gallbladder removal, and tumor excisions.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">Is recovery time long?</button>
            </h2>
            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Recovery depends on the procedure, but with modern techniques, most patients heal faster than before.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">Are these surgeries safe?</button>
            </h2>
            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Yes. Our team follows strict safety protocols and advanced techniques to minimize risks.</div>
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
