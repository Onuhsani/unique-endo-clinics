@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | MAS
@endsection

@section('contents')

    <!-- Hero Section -->
     <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                         <h1>Minimal Access Surgery</h1>
                        <h5 class="text-danger">Advanced care with smaller cuts, faster recovery</h5>
                        <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="container py-5">
    {{-- <h2>About Minimal Access Surgery</h2> --}}
    <p>Minimal Access Surgery, also known as laparoscopic or keyhole surgery, is a modern surgical approach that uses tiny incisions instead of large cuts. Through these small openings, surgeons insert a special camera (laparoscope) and fine surgical instruments to perform procedures with precision. This technique reduces trauma to the body, minimizes scarring, and speeds up recovery. It is commonly used for treating conditions such as gallbladder problems, hernias, appendicitis, and certain gynecological or urological issues. Unlike traditional open surgery, patients undergoing minimal access surgery often experience less pain, reduced risk of infection, and a quicker return to normal activities. <br /><br />At UniqueEndo, our specialists are trained in advanced techniques to ensure patient safety and successful outcomes. Whether for diagnostic or therapeutic purposes, minimal access surgery provides a safer, less invasive alternative to conventional surgery.</p>
    </section>

    <!-- Benefits -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4" style="text-align: center">Key Benefits</h2>
        <ul class="list-unstyled">
        <li><span class="benefit-icon">✅</span>Smaller incisions</li>
        <li><span class="benefit-icon">✅</span>Less pain and bleeding</li>
        <li><span class="benefit-icon">✅</span>Shorter hospital stay</li>
        <li><span class="benefit-icon">✅</span>Faster recovery and return to daily life</li>
        <li><span class="benefit-icon">✅</span>Minimal scarring</li>
        </ul>
    </div>
    </section>

    <!-- Conditions Treated -->
    <section class="container py-5">
    <h2 class="mb-5" style="text-align: center">Conditions Treated</h2>
    <div class="row">
        <div class="col-md-4">✅Gallstones and gallbladder disease</div>
        <div class="col-md-4">✅Hernias</div>
        <div class="col-md-4">✅Appendicitis</div>
        <div class="col-md-4">✅Ovarian cysts and gynecological conditions</div>
        <div class="col-md-4">✅Certain urological disorders</div>
    </div>
    </section>

    <!-- What to Expect -->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="mb-5" style="text-align: center">What to Expect</h2>
        <div class="row text-center">
        <div class="col-md-4">
            <h5>Before</h5>
            <p>Pre-surgery consultation and medical tests</p>
            <p>Fasting instructions and preparation</p>
        </div>
        <div class="col-md-4">
            <h5>During</h5>
            <p>Small incisions made for camera and instruments</p>
            <p>Procedure performed under anesthesia</p>
        </div>
        <div class="col-md-4">
            <h5>After</h5>
            <p>Short hospital observation</p>
            <p>Light discomfort that eases quickly</p>
            <p>Return to daily activities in a few days</p>
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
        <h2 class="mb-5" style="text-align: center">MAS Image and video gallery</h2>
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
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ma2.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ma3.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ma1.jpeg') }}" class="img-fluid rounded"></div>
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
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">Is it safe?</button>
            </h2>
            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Yes, minimal access surgery is safe and widely used around the world with very high success rates.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">Will I have scars?</button>
            </h2>
            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Only tiny marks that usually fade over time.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">How soon can I resume normal activities?</button>
            </h2>
            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">Most patients return to work and light activities within a week.</div>
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
