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
                         <h1>Minimally Invasive Paediatric Surgery</h1>
                        <h5 class="text-danger">Gentle care for little ones with advanced surgical techniques</h5>
                        <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="container py-5">
    {{-- <h2 class="mb-5" style="text-align: center">About Minimally Invasive Surgery</h2> --}}
    <p>Minimally Invasive Paediatric Surgery is a highly specialized surgical approach designed for infants and children. Using tiny instruments and cameras, our surgeons perform procedures through very small incisions, avoiding the need for large cuts. This method is gentle on young patients, reduces pain, and ensures a faster recovery with minimal scarring.

        <br /><br />It is particularly effective for treating conditions such as appendicitis, hernias, undescended testis, and certain chest or abdominal problems in children. By combining advanced technology with child-centered care, we make sure your little one receives safe, effective, and compassionate treatment.

        At UniqueEndo, our paediatric specialists understand the unique needs of children. Every procedure is performed with precision, care, and comfort in mind, so parents can rest assured their child is in safe hands.</p>

    </section>

    <!-- Benefits -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4" style="text-align: center">Key Benefits</h2>
        <ul class="list-unstyled">
        <li><span class="benefit-icon">✅</span>Smaller cuts and quicker healing</li>
        <li><span class="benefit-icon">✅</span>Less pain and discomfort for children</li>
        <li><span class="benefit-icon">✅</span>Reduced risk of infection</li>
        <li><span class="benefit-icon">✅</span>Shorter hospital stays</li>
        <li><span class="benefit-icon">✅</span>Minimal scarring</li>
        </ul>
    </div>
    </section>

    <!-- Conditions Treated -->
    <section class="container py-5">
    <h2 class="mb-5" style="text-align: center">Conditions Treated</h2>
    <div class="row">
        <div class="col-md-4">✅Appendicitis in children</div>
        <div class="col-md-4">✅Hernias</div>
        <div class="col-md-4">✅Undescended testis</div>
        <div class="col-md-4">✅Ovarian cysts in young girls</div>
        <div class="col-md-4">✅Chest and abdominal abnormalities</div>
    </div>
    </section>

    <!-- What to Expect -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">What to Expect</h2>
        <div class="row text-center">
        <div class="col-md-4">
            <h5>Before</h5>
            <p>Thorough consultation and child-friendly explanations</p>
            <p>Necessary lab tests and preparation guidelines</p>
        </div>
        <div class="col-md-4">
            <h5>During</h5>
            <p>Procedure done under safe paediatric anesthesia</p>
            <p>Small incisions made for camera and instruments</p>
            <p>Real-time monitoring for maximum safety</p>
        </div>
        <div class="col-md-4">
            <h5>After</h5>
            <p>Quick recovery with short hospital observation</p>
            <p>Mild discomfort that fades rapidly</p>
            <p>Children can resume normal activities within a short period</p>
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
        <h2 class="mb-5" style="text-align: center">MIPS Image and video gallery</h2>
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
            <div class="col-md-4 mb-3"><img src="{{ asset('img/mips1.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/mips2.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/mips3.jpg') }}" class="img-fluid rounded"></div>
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
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">Is this safe for children?</button>
            </h2>
            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Yes. Minimally invasive surgery is very safe for children when performed by trained specialists.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">Will my child feel pain?</button>
            </h2>
            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Only minimal discomfort, managed with safe paediatric anesthesia.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">How long will my child stay in the hospital?</button>
            </h2>
            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Most children can go home within 1–2 days, depending on the condition.</div>
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
