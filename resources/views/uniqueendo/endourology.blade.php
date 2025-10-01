@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | MIPS
@endsection

@section('contents')

    <!-- Hero Section -->
     <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                         <h1>Endourology Services</h1>
                        <h5 class="text-danger">Advanced urinary tract treatment with minimal invasion</h5>
                        <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="container py-5">
    {{-- <h2 class="mb-5" style="text-align: center">About Minimally Invasive Surgery</h2> --}}
    <p>Endourology is a modern branch of urology that focuses on diagnosing and treating conditions of the urinary tract using minimally invasive techniques. With the help of small cameras, fine instruments, and advanced imaging, doctors can treat problems inside the kidneys, ureters, bladder, and urethra without the need for large incisions.

        <br /><br />This approach is particularly effective for removing kidney stones, treating urinary blockages, or addressing tumors within the urinary tract. By using natural body passages or very small entry points, endourology reduces pain, speeds up recovery, and minimizes complications compared to traditional open surgery.

        At UniqueEndo, our specialists use cutting-edge technology and expertise to provide safe, effective, and patient-centered urological care.</p>
    </section>

    <!-- Benefits -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4" style="text-align: center">Key Benefits</h2>
        <ul class="list-unstyled">
        <li><span class="benefit-icon">✅</span>Minimally invasive procedures</li>
        <li><span class="benefit-icon">✅</span>Reduced pain and faster healing</li>
        <li><span class="benefit-icon">✅</span>Shorter hospital stays</li>
        <li><span class="benefit-icon">✅</span>High success rate for stone removal and urinary tract treatments</li>
        <li><span class="benefit-icon">✅</span>Minimal risk of infection</li>
        </ul>
    </div>
    </section>

    <!-- Conditions Treated -->
    <section class="container py-5">
    <h2 class="mb-5" style="text-align: center">Conditions Treated</h2>
    <div class="row">
        <div class="col-md-4">✅Kidney stones</div>
        <div class="col-md-4">✅Ureteral and bladder stones</div>
        <div class="col-md-4">✅Urinary tract blockages</div>
        <div class="col-md-4">✅Prostate conditions</div>
        <div class="col-md-4">✅Bladder tumors</div>
    </div>
    </section>

    <!-- What to Expect -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">What to Expect</h2>
        <div class="row text-center">
        <div class="col-md-4">
            <h5>Before</h5>
            <p>Diagnostic tests such as ultrasound, X-ray, or CT scan</p>
            <p>Clear instructions on diet and preparation</p>
        </div>
        <div class="col-md-4">
            <h5>During</h5>
            <p>Procedure performed under anesthesia</p>
            <p>Small instruments inserted through natural openings or tiny incisions</p>
            <p>Real-time imaging guides treatment</p>
        </div>
        <div class="col-md-4">
            <h5>After</h5>
            <p>Quick recovery, often same-day discharge</p>
            <p>Mild discomfort that fades quickly</p>
            <p>Return to normal life within a few days</p>
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
        <h2 class="mb-5" style="text-align: center">Endourology Image and video gallery</h2>
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
            <div class="col-md-4 mb-3"><img src="https://via.placeholder.com/400x250" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="https://via.placeholder.com/400x250" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="https://via.placeholder.com/400x250" class="img-fluid rounded"></div>
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
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">Is endourology painful?</button>
            </h2>
            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
            <div class="accordion-body">No, the procedure is done under anesthesia. Patients may only feel mild discomfort afterward.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">Can all kidney stones be treated with endourology?</button>
            </h2>
            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Most stones can be managed with endourological techniques, though very large ones may require other approaches.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">How long before I can return to work?</button>
            </h2>
            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Usually within a few days, depending on the condition treated.</div>
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
