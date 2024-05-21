<footer class="site-footer">
    <div class="site-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 text-center text-sm-start">
                    <a href="index.html" class="navbar-brand">
                        <img src="{{ asset('images/logo.svg') }}" width="204" height="56" alt="logo"
                            loading="eager">
                    </a>

                    <p class="mt-4">Zaobserwuj nas:</p>
                    <div class="social-media d-flex align-items-center">
                        <div class="social-media-item d-flex align-items-center pe-md-3 pe-xxl-4">
                            <img src="{{ asset('images/ig.svg') }}" alt="instagram" class="social-icon" width="48"
                                height="48" loading="lazy">
                            <a href="">@Ozorkowska.28</a>
                        </div>
                        <div class="social-media-item d-flex align-items-center">
                            <img src="{{ asset('images/fb.svg') }}" alt="facebook" class="social-icon" width="48"
                                height="48" loading="lazy">
                            <a href="">/Ozorkowska.28</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1">
                    <ul class="footer-nav text-center text-sm-start">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.investment') }}">O inwestycji</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.developro.investment.index') }}">Apartamenty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('front.amenities') }}">Udogodnienia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.investor') }}">Inwestor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.contact.index') }}">Kontakt</a>
                        </li>
                    </ul>
                    <div class="footer__contact d-flex align-items-center">
                        <div class="footer__contact-item d-flex align-items-center pe-md-4">
                            <img src="{{ asset('images/phone.svg') }}" alt="telefon" class="contact-icon"
                                width="48" height="48" loading="lazy">
                            <a href="tel:+48705548142">705 548 142</a>
                        </div>
                        <div class="footer__contact-item d-flex align-items-center pe-md-4">
                            <img src="{{ asset('images/email.svg') }}" alt="email" class="contact-icon"
                                width="48" height="48" loading="lazy">
                            <a href="mailto:sprzedaz@ozorkowska28.pl">sprzedaz@ozorkowska28.pl</a>
                        </div>
                        <div class="footer__contact-item d-flex align-items-center footer__contact-address">
                            <img src="{{ asset('images/pin.svg') }}" alt="pinezka" class="contact-icon" width="48"
                                height="48" loading="lazy">
                            <p>ul. Ozorkowksa 28, <br> 93-286 Łódź</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="container py-2">
            <div class="row">
                <div class="col-12 text-center">
                    <p><span id="year"></span> Hitower. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
