<header class="top-menu fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-xl">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('images/logo.svg') }}" width="204" height="56" alt="logo" loading="eager">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav pe-0 pe-xxl-4">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.investment') }}">O inwestycji</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/apartamenty/">Apartamenty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galeria/">Galeria</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-hover" href="{{ route('front.amenities') }}" id="navbarDropdown" role="button" data-bs-hover="dropdown" aria-expanded="false">Udogodnienia</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('front.packages') }}">Pakiety</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.financing') }}">Finansowanie</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.investor') }}">Inwestor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.contact.index') }}">Kontakt</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center top-menu__fast-contact">
                <div class="top-menu__social d-flex align-items-center">
                    <a href="" class="social-link social-link-ig">
                        <img src="{{ asset('images/ig.svg') }}" alt="instagram" class="social-icon social-icon-ig">
                        <img src="{{ asset('images/ig-hover.svg') }}" alt="instagram" class="social-icon-hover social-icon-ig-hover">
                    </a>
                    <a href="" class="social-link social-link-fb">
                        <img src="{{ asset('images/fb.svg') }}" alt="facebook" class="social-icon social-icon-fb">
                        <img src="{{ asset('images/fb-hover.svg') }}" alt="facebook" class="social-icon-hover social-icon-fb-hover">
                    </a>
                </div>
                <a href="" class="project-btn">Skontaktuj się</a>
            </div>
        </nav>
    </div>
</header>