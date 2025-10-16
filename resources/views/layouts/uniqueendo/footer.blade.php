<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__logo">
                        {{-- <a href="#"><img src="img/footer-logo.png" alt=""></a> --}}
                        <a href="#"><h3 style="color: white;">{{ config('app.name') }}</h3></a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="footer__newslatter">
                        <form action="{{ route('newsletter.subscribe') }}" method="POST" file="True" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <input type="text" placeholder="Enter your email" name="email" id="email" required>
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="{{route('uniqueendo.home')}}">Home</a></li>
                        <li><a href="{{route('uniqueendo.about')}}">About Us</a></li>
                        <li><a href="{{route('uniqueendo.home')}}#clinics">Clinics</a></li>
                        <li><a href="{{route('uniqueendo.home')}}#consultation__form">Book appointment</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>Quick links</h5>
                    <ul>
                        <li><a href="#">Endoscopy and Endo Therapy</a></li>
                        <li><a href="#">Minimal Access Surgery</a></li>
                        <li><a href="#">Edourology</a></li>
                        <li><a href="#">Gynae Endoscopy</a></li>
                        <li><a href="#">General Surgery</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__address">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> Full address, Makurdi, Benue State</li>
                        <li><i class="fa fa-phone"></i>+234 (0) 703 132 3030</li>
                        {{-- <li><i class="fa fa-envelope"></i> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a193f3a3a25383e0a2d272b232664292527">[email&#160;protected]</a></li> --}}
                        <li><i class="fa fa-envelope"></i> uniqueendoclinics@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
                <div class="footer__map">
                    {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                    height="190" style="border:0" allowfullscreen=""></iframe> --}}

                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.5558810352!2d8.527852082404994!3d7.721828940009635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105081b7e41a15fd%3A0x5072780b6342bcb5!2sWurukum%2C%20Makurdi%20970101%2C%20Benue!5e0!3m2!1sen!2sng!4v1730841389568!5m2!1sen!2sng"
                    width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.627792446435!2d8.541060774037138!3d7.723023508064945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105081b89875192f%3A0x165a7fb653fa74c9!2sDr%20Ame%20Idoko%20St%2C%20Wurukum%2C%20Markurdi%20970101%2C%20Benue!5e0!3m2!1sen!2sng!4v1731087231297!5m2!1sen!2sng"
                    width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | UniqueEndo clinics</p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="col-lg-5">
                    <ul>
                        <li>All Rights Reserved</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
