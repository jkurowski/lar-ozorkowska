<footer class="site-footer">
    <div class="site-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 text-center text-sm-start">
                    <a href="/" class="navbar-brand">
                        <img src="{{ asset('images/logo.svg') }}" width="204" height="56" alt="logo" loading="eager">
                    </a>
                    <p class="mt-4">Zaobserwuj nas:</p>
                    <div class="social-media d-flex align-items-center">
                        <div class="social-media-item d-flex align-items-center">
                            <a href="https://www.facebook.com/deweloper.pminvest" target="_blank">
                                <img src="{{ asset('images/fb.svg') }}" alt="Ikonka Facebook" class="" width="68" height="68" loading="lazy">
                            </a>
                        </div>
                    </div>
                    <a href="https://pm-invest.com.pl/" class="me-4"><img src="{{ asset('images/pminvest-logo.png') }}" alt="Logotyp PM Invest" width="80" height="82"></a>
                    <a href="https://www.pzfd.pl/s/developers" target="_blank"><img src="{{ asset('images/pzfd_logo.png') }}" width="180" height="62px" alt="Logo PZFD" loading="lazy"></a>
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
                            <img src="{{ asset('images/phone-black.svg') }}" alt="Ikonka telefonu" class="contact-icon"
                                width="48" height="48" loading="lazy">
                            <a href="tel:+48536882090">536 882 090</a>
                        </div>
                        <div class="footer__contact-item d-flex align-items-center pe-md-4">
                            <img src="{{ asset('images/email.svg') }}" alt="Ikonka adresu e-mail" class="contact-icon"
                                width="48" height="48" loading="lazy">
                            <a href="mailto:sprzedaz@ozorkowska28.pl">sprzedaz@ozorkowska28.pl</a>
                        </div>
                        <div class="footer__contact-item d-flex align-items-center footer__contact-address">
                            <img src="{{ asset('images/pin.svg') }}" alt="Ikonka położenia na mapie" class="contact-icon" width="48"
                                height="48" loading="lazy">
                            <p>Plac Zwycięstwa 2, <br> 90-312 Łódź</p>
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
